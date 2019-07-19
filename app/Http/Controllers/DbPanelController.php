<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DbPanelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function us()
    {
      return view('dbpanel/us');
    }

    public function index()
    {
      return view('dbpanel/index');
    }
}
