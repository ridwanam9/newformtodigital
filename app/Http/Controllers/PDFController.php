<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormInput;
use PDF;

class PDFController extends Controller
{
    public function exportPDF($id)
    {
        $dataFormInput = FormInput::find($id);

        if (!$dataFormInput) {
            return redirect()->back()->with('error', 'Data not found!');
        }

        $pdf = PDF::loadView('pdf.export', compact('dataFormInput'));

        return $pdf->download('TansferIntra.pdf');

        
    }
}
