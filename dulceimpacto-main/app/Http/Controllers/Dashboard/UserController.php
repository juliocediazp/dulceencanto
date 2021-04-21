<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($employees[0]);
        return View('dashboard.user', $this->loadData());
    }

    public function loadData(){
        $roles = Role::all();

        $employees = DB::table("people")->join('users', 'users.person_id', '=', 'people.id')
        ->join("roles", "roles.id", "=", "users.role_id")
        ->select('users.email', 'users.state', 'users.role_id', 'roles.name as role', 'users.id as user_id', 'people.*')
        ->where('role_id', 2)
        ->orderByDesc('id')->get();

        $clients = DB::table("people")->join('users', 'users.person_id', '=', 'people.id')
        ->join("roles", "roles.id", "=", "users.role_id")
        ->select('users.email', 'users.state', 'users.role_id', 'roles.name as role', 'users.id as user_id', 'people.*')
        ->where('role_id', 3)
        ->orderByDesc('id')->get();
        // dd($employees[0]);
        return [
            'employees' => $employees,
            'clients' => $clients,
            'roles' => $roles,
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = Person::create([
            'fullName' => $request->get('fullName'),
            'document' => $request->get('document'),
            'birthDate' => $request->get('birthDate'),
            'cellPhone' => $request->get('cellPhone'),
            'direction' => $request->get('direction'),
        ]);

        User::create([
            'email' =>  $request->get('email'),
            'password' => Hash::make( $request->get('password')),
            'person_id' => $person->getOriginal()['id'],
            'role_id' => $request->get('role'),
        ]);

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->fullName = $request->get('fullName');
        $person->document = $request->get('document');
        $person->birthDate = $request->get('birthDate');
        $person->cellPhone = $request->get('cellPhone');
        $person->direction = $request->get('direction');
        $person->update();

        $user = User::find($request->get('userId'));
        $user->email = $request->get('email');
        $user->role_id = $request->get('role');
        $user->save();
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
