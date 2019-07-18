<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keywords_name = $request->input('search');
        $results = Hotel::where('Name', $keywords_name)->get();
//	$user_name = $results->Name;
        return view('dbpanel/us', compact('results'));
    }
}
