<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App;
class AddFormController extends Controller
{
    public function addForm(Request $request){

        $pdf = App::make('dompdf.wrapper');

        $pdf->loadView('form_data', compact('request'));

        return $pdf->stream();
    }
}
