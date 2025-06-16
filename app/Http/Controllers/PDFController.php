<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{

    public function show(){
        return view('page');
    }

    public function generatePDF(){

        $data = [
            'title' => 'Welcome To PDF Generate',
            'date' => date('m/d/y')
        ];

        $pdf = PDF::loadview('index', $data);
        return $pdf->download('First.pdf');

    }
}
