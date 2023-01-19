<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(){
        $data = 'MH John';
        $pdf = Pdf::loadView('billing_invoice',[
            'data'=>$data
        ]);
        return $pdf->stream('Billing Invoice.pdf');
    }

    public function downloadPDF(){
        $data = 'MH John';
        $pdf = Pdf::loadView('billing_invoice',[
            'data'=>$data
        ]);
        return $pdf->download('Billing Invoice.pdf');
    }
}
