<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\FormInput;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $dataFormInput = FormInput::where('nama', 'LIKE', "%$query%")
                                     ->orWhere('norm', 'LIKE', "%$query%")
                                     ->get();
        } else {
            $dataFormInput = FormInput::all();
        }

        return view('pageview.form-input-table', compact('dataFormInput'));
    }
}