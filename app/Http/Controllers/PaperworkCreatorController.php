<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PaperworkCreatorController extends Controller
{
    public function index()
    {
        $paperworks = Paperwork::whereHas('status', function(Builder $query) { return $query->where('name', 'Pending'); })->get();
        return view('paperwork.index', ['paperworks' => $paperworks]);
    }

    // TODO: Debug 404 for this method
    public function show($id)
    {
        //return 'show page!';
        $paperworks = Paperwork::where('id', $id)->get();
        return view('paperwork.show', ['paperworks' => $paperworks]);
    }
}
