<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keywords_name = $request->input('search');
        $data = Hotel::select('Name', 'CtfId', 'Gender', 'Birthday', 'Address', 'Mobile', 'Version') -> where('Name', $keywords_name)->get();
        return view('dbpanel.hotel', compact('data'));
    }
}
