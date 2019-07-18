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
        $keywords_name = $request->input('name');
        $data = Hotel::select('Name', 'CtfId', 'Gender', 'Birthday', 'Address', 'Mobile', 'Version') -> where('Name', $keywords_name)->paginate(20);
        $appendData = $data->appends(array(
            'name' => $keywords_name,
        ));
        return view('dbpanel.hotel', compact('data'));
    }
}
