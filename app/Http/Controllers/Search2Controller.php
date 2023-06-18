<?php

namespace App\Http\Controllers;

use App\Models\FormInput2;
use App\Models\Post;
use Illuminate\Http\Request;

class Search2Controller extends Controller
{
    public function search2(Request $request)
{
    $query = $request->input('query');

    if ($query) {
        $dataFormInput2 = FormInput2::where('nama', 'LIKE', "%$query%")
                                    ->orWhere('norm', 'LIKE', "%$query%")
                                    ->get();
    } else {
        $dataFormInput2 = FormInput2::all();
    }

    return view('pageview.form-input2-table', compact('dataFormInput2'));
}

}
