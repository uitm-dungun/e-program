<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaperworkPhase1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('paperworkphase1.index');
    }

    public function create()
    {
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
        //
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
