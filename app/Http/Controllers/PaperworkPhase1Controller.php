<?php

namespace App\Http\Controllers;

use App\Models\EpaperworkPaperwork;
use App\Models\Status;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PaperworkPhase1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if (auth()->user()->type == 'ptj') {
            $statusNames = ['Pending', 'Accepted', 'To Review',];
        // } elseif (auth()->user()->type == 'kerani') {
        //     $statusNames = ['Pending'];
        // } else {
        //     $statusNames = ['Reviewed'];
        // }
        // $statusNames = [['name', '=', 'Pending']];

        // Query Status Only
        $buildStatuses = Status::where('name', $statusNames[0]);
        foreach ($statusNames as $statusName) {
            $buildStatuses = $buildStatuses->orWhere('name', $statusName);
        }
        $statuses = $buildStatuses->get();

        // Collect all paperworks from each statuses

        $paperworkssssss = [];
        dd($statuses[1]->paperworks());
        foreach ($statuses as $status) {
            // dd($status->paperworks());
            // array_push($paperworkssssss, $status->paperworks());
        }
        return '';
        return collect($paperworkssssss);

        // dd($statuses);

        return '';
        return $statuses[0]->paperworks()->get();

        // $paperworks = EpaperworkPaperwork::with(['status' => function ($query) use ($statuses){
        //     $query->where('name', $statuses[0]);
        //     foreach ($statuses as $status) {
        //         $query = $query->orWhere('name', $status);
        //     }
        // }])->get();
        // $paperworks = $paperworks->get();

        // return view('paperworkphase1.index', ['paperworks' => $paperworks]);
    }

    public function create()
    {
        return view('paperworkphase1.ptj.create');
    }

    public function store(Request $request)
    {
        $paperwork = new EpaperworkPaperwork();

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

        // Parse indexed table inputs into jsons
        // $officer_json = '';
        // foreach (['name', 'program_id', 'position', 'ic', 'phone', 'category'] as $v) {
        //     for($i = 0; $request->input("officer-{$i}-{$v}") != null; ++$i) {

        //     }
        // }

        return redirect('/');
        // $status = Status::make($request ->all(),[
        //     'title' => 'required',
        //     'name' => 'required',
        //     'level_id' => 'required',
        // ]);

        // if($status->fails()){
        //     return redirect()
        //     ->back()
        //     ->withErrors($status)
        //     ->withInput();
        // }



    }

    public function showKerani($id)
    {
        return view('paperworkphase1.kerani.show', ['epaperwork_paperwork' => EpaperworkPaperwork::find($id)]);
    }

    public function printKerani($id)
    {
        $pdf = PDF::loadView('paperworkphase1.kerani.print', []);
        return $pdf->download('eprogram-paperwork-kerani.pdf');

        // return view('paperworkphase1.kerani.print', ['epaperwork_paperwork' => EpaperworkPaperwork::find($id)]);
    }

    // public function showKerani(EpaperworkPaperwork $epaperwork_paperwork) : View
    // {
    //     return 'aasdasd';
    //     return view('paperworkphase1.kerani.show', ['epaperworkpaperwork' => $epaperwork_paperwork]);
    // }

    public function show($id)
    {
        //
        // return view('user.show', [
        //     'title'=> $this->title;
        //     'date_from'=> $this->date_from;
        //     'date_until'=> $this->date_until;
        //     'budgets'=> $this->budgets;
        //     'status'=> $this->status[$this->budgets];
        //     'details'=> $this->details;
        // ]);
    }

    public function print($id)
    {
        //
    }

    // public function update(Request $request, $id)
    // {
    //     //
    //     $user = User::findOrFail($id);

    //     $user -> title = $request -> name;
    //     $user -> date_from = $request -> date_from;
    //     $user -> date_until =$request -> date_until;
    //     $user -> budgets = $request -> budgets;
    //     $user -> status = $request -> status ?? null;
    //     $user -> details = $request -> details;

    //     $user ->save();

    //     return redirect()
    //     ->route('user.show', $user)
    //     ->with('message', "User {$user->user_id} dikemaskini.")
    //     ->with('status', "success");
    // }

    // public function destroy($id)
    // {
    //     //
    //     $user = User::findOrFail($id);
    //     $user_id = $user->user_id;
    // }
}
