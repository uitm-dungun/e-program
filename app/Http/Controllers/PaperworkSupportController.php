<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;
use Illuminate\Http\Request;

class PaperworkSupportController extends Controller
{
    public function index ()
    {
        $paperworks = Paperwork::whereHas('support.supporters', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('paperworks.supporter.index', ['paperworks' => $paperworks]);
    }

}
