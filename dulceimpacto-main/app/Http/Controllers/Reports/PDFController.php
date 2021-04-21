<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Http\Request;
use PDF;

use App\Exports\PeopleExport;
use Maatwebsite\Excel\Facades\Excel;


class PDFController extends Controller
{
    public function generateUserPdf()
    {
        $users = new UserController();
        $data = [
            'title' => 'Usuarios dulce impacto',
            'date' => date('m/d/Y')
        ];

        $data = array_merge($data, $users->loadData());
        
        $pdf = PDF::loadView('dashboard.reports.user', $data);

        // dd($data);
        // return $pdf->download('Usuarios dulce impacto.pdf', $data);
        return $pdf->stream('Usuarios dulce impacto.pdf', $data);
    }

    public function generateUserExcel()
    {
        // $users = new UserController();
        // $data = [
        //     'title' => 'Usuarios dulce impacto',
        //     'date' => date('m/d/Y')
        // ];

        // $data = array_merge($data, $users->loadData());
          
        // $pdf = PDF::loadView('dashboard.reports.user', $data);
// dd(new PeopleExport());
        // dd($data);
        return Excel::download(new PeopleExport, 'users.xlsx');
        // return $pdf->stream('Usuarios dulce impacto.pdf', $data);
    }

    
}
