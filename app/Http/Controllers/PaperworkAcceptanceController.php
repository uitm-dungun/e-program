<?php

namespace App\Http\Controllers;
use App\Models\Paperwork;

use Illuminate\Http\Request;

class PaperworkAcceptanceController extends Controller
{
    public function index ()
    {
        $paperworks = Paperwork::whereRelation('status', 'name', 'Reviewed')->get();
        $paperworks_mode = 'acceptance';

        return view('paperwork.index', [
            'paperworks' => $paperworks,
            'paperworks_mode' => $paperworks_mode,
        ]);
    }

    public function show($id)
    {
        return view('paperwork.acceptance.show', ['paperwork' => Paperwork::find($id)]);
    }
}
