<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Product;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Dashboard\SaleController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth'); 
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
    {
        if (isset(Auth::user()->person_id)) {
            $personId = Auth::user()->person_id;
            $person = Person::where('id', $personId)->get();
            $fullName = explode(' ', $person[0]->fullName);
            session(['fullName' => $fullName[0]]);
            
            if(Auth::user()->role_id !== 3){
                $sale = new SaleController();
                return $sale->index();
                // return View('dashboard.sale');
            }
        }

        // $products = Product::all();

        $products = DB::table("products")->join('images', 'images.product_id', '=', 'products.id')
        ->select('images.image', 'products.*')
        ->orderByDesc('id')->get();

        // dd($products);

        return View('client.index',[
            'products' => $products
        ]);
    }

    public function nosotros()
    {
        return View('client.nosotros');
    }
}
