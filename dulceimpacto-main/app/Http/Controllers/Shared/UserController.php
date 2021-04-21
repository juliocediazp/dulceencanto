<?php

namespace App\Http\Controllers\Shared;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {

        return View('shared.profile.index', [
            'user' => $this->user(),
            'purchases' => $this->purchases(),
        ]);
    }

    public function changePassword(Request $request){
        $oldPassword = $request->get('oldPassword');
        $currentPassword = Auth::user()->password;
        $newPasswod = $request->get('newPassword');
        if(Hash::check($oldPassword, $currentPassword)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($newPasswod);
            $user->update();
        }
        
        return View('shared.profile.index', [
            'user' => $this->user(),
            'purchases' => $this->purchases(),
        ]);
    }

    public function user(){
        $personId = Auth::user()->person_id;
        $person = Person::where('id', $personId)->get();
        return $person[0];
    }

    public function purchases(){
        $personId = Auth::user()->person_id;
        $purchases = DB::table('sales')->join('state_sales', 'state_sales.id', '=', 'sales.stateSale_id')
        ->select('sales.*', 'state_sales.state')
        ->where('sales.person_id', $personId)->get();
        // dd($purchases);
        return $purchases;
    }
}
