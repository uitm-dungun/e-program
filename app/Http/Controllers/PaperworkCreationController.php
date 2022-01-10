<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PaperworkCreationController extends Controller
{
    public function index()
    {
        $paperworks = Paperwork::whereHas('status', function(Builder $query) { return $query->where('name', 'Pending'); })->get();
        return view('paperworks.index', ['paperworks' => $paperworks]);
    }

    // TODO: Debug 404 for this method
    public function show($id)
    {
        //return 'show page!';
        $paperworks = Paperwork::where('id', $id)->get();
        return view('paperwork.show', ['paperworks' => $paperworks]);
    }

    public function store(Request $request)
    {
        $paperwork = new Paperwork();

        // Step 1
        $paperwork->title = $request->input('title');
        $paperwork->venue = $request->input('venue');
        $paperwork->total_participants = $request->input('total_participants');
        $paperwork->target_participants = $request->input('target_participants');
        $paperwork->objective = $request->input('objective');

        $paperwork->begin_date = new Carbon($request->begin_date);
        $paperwork->begin_time = '00:00:00';
        $paperwork->end_date = new Carbon($request->end_date);
        $paperwork->end_time = '00:00:00';

        // Step 2
        $paperwork->budget_moneybank = $request->input('budget_moneybank');
        $paperwork->budget_grant = $request->input('budget_grant');
        $paperwork->budget_notes = $request->input('budget_notes');

        // KIV parse table inputs
        $paperwork->officers = json_encode($request->input('officers'));
        $paperwork->budgets = json_encode($request->input('budgets'));

        $paperwork->status = "Pending";

        $paperwork->save();

        // Here setup the supporter for one's paperwork
        $paperwork->supports;
    }
}
