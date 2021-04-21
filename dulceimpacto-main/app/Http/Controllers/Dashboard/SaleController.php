<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Models\StateSale;
use Illuminate\Http\Request;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
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
        $stateSales = StateSale::all();
        return View('dashboard.sale', [
            'sales' => $this->sales(),
            'stateSales' => $stateSales
        ]);
    }

    public function sales(){
        $sales = DB::table('sales')->join('state_sales', 'state_sales.id', '=', 'sales.stateSale_id')
        ->join('people', 'people.id', '=', 'sales.person_id')
        ->select('sales.*', 'people.fullName','state_sales.state')->get();
        // dd($sales);
        return $sales;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/ventas');
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
        $sale = Sale::find($id);
        $sale->description = $request->get('description');
        $sale->stateSale_id = $request->get('state');
        $sale->update();

        return redirect('/ventas');
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
