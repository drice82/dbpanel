<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $keywords_name = $request->input('search');
        $data = Hotel::select('Name', 'CtfId', 'Gender', 'Birthday', 'Address', 'Mobile', 'Version') -> where('Name', $keywords_name)->get();
//	$user_name = $results->Name;
        return view('dbpanel.hotel', compact('data'));
    }
}
