<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;

class PaperworkValidationController extends Controller
{
    public function index()
    {
        $paperworks = Paperwork::whereRelation('status', 'name', 'Reviewed')->get();
        $paperworks_mode = 'validation';

        return view('paperwork.index', [
            'paperworks' => $paperworks,
            'paperworks_mode' => $paperworks_mode,
        ]);
    }

    public function show()
    {
        return view('paperwork.validator.show');
    }
}
