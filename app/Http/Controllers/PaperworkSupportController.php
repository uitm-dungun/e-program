<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;
use Illuminate\Http\Request;

class PaperworkSupportController extends Controller
{
    public function index()
    {
        $paperworks = Paperwork::whereRelation('support.supporters', 'user_id', auth()->user()->id)
            ->whereRelation('support.supporters', 'has_supported', true)
            ->get();

        return view('paperwork.index', ['paperworks' => $paperworks]);
    }

    public function show($id)
    {
        return view('paperwork.supporter.show', ['paperwork' => Paperwork::find($id)]);
    }

}
