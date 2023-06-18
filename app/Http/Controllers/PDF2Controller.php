<?php

namespace App\Http\Controllers;

use App\Models\FormInput2;
use Illuminate\Http\Request;
use PDF;

class PDF2Controller extends Controller
{
    public function exportPDF($id)
{
    $dataFormInput2 = FormInput2::find($id);
    if (!$dataFormInput2) {
        return redirect()->back()->with('error', 'Data not found!');
    }

    $data = [
        'kegawatanpernafasan' => $dataFormInput2->kegawatanpernafasan ? '' : '',
        // 'checkbox2' => $dataFormInput2->checkbox2 ? 'X' : ''
    ];



    $pdf = PDF::loadView('pdf.export2', compact('dataFormInput2'));
    $dataFormInput2 = implode(', ', $data);
    return $pdf->download('AssesmenPasien.pdf');
}

    // public function exportPDF(Request $request)
    // {
    //     $dataFormInput2 = FormInput2::find($request);
    //     // $array = explode(",", $dataFormInput2['kegawatanpernafasan']);
    //     // //$dataFormInput2['kegawatanpernafasan'] = implode(', ', $dataFormInput2['kegawatanpernafasan']);
    //     // $dataFormInput2['kegawatanpernafasan'] = implode(', ', $array);



    //     // if (!$dataFormInput2) {
    //     //     return redirect()->back()->with('error', 'Data not found!');
    //     // }

    //     $data = [

    //         'kegawatanpernafasan' => $request->has('kegawatanpernafasan') ? 'X' : '',
    //         // 'checkbox2' => $request->has('checkbox2') ? 'X' : ''
    //     ];

    //     $pdf = PDF::loadView('pdf.export2', compact('dataFormInput2'));
    //     return $pdf->download('AssesmenPasien.pdf');
    // }

    //     $pdf = PDF::loadView('pdf.export2', compact('dataFormInput2'));

    //     return $pdf->download('AssesmenPasien.pdf');
    // }
}
