<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperworkSupportController extends Controller
{
    public function index ()
    {
        return view('paperworks.supporter.index');
    }
}
