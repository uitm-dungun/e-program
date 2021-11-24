<?php

namespace App\Http\Controllers;

use App\Models\EpaperworkPaperwork;
use Illuminate\Http\Request;

class PaperworkPhase1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('paperworkphase1.index', ['paperworks' => EpaperworkPaperwork::all()]);
    }

    public function create()
    {
        return view('paperworkphase1.create');
        //
        // return view('user.add', [
        //     'name'=> $this->name;
        //     'level_id'=> $this->level_id;
        //     //'permission'=> $this->permission;
        //     'title'=> $this->title;
        //     'date_from'=> $this->date_from;
        //     'date_until'=> $this->date_until;
        //     'budgets'=> $this->budgets;
        //     'status'=> $this->status[$this->budgets];
        //     'details'=> $this->details;
        // ]);
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

        // Step 2
        $paperwork->budget_moneybank = $request->input('budget_moneybank');
        $paperwork->budget_grant = $request->input('budget_grant');
        $paperwork->budget_notes = $request->input('budget_notes');

        // KIV parse table inputs
        $paperwork->officers = json_encode($request->input('officers'));
        $paperwork->budgets = json_encode([]);

        return $paperwork->save();

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
        return view('paperworkphase1.index');
    }

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
