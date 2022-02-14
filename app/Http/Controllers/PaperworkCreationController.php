<?php

namespace App\Http\Controllers;

use App\Models\Paperwork;
use App\Models\PaperworkSupport;
use App\Models\Supporter;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PaperworkCreationController extends Controller
{
    public function index()
    {
        $paperworks = Paperwork::whereHas('status', function(Builder $query) { return $query->where('name', 'Pending'); })->get();
        $paperworks_mode = 'creation';

        return view('paperwork.creator.index', [
            'paperworks' => $paperworks,
            'paperworks_mode' => $paperworks_mode,
        ]);
    }

    // TODO: Debug 404 for this method
    public function show($id)
    {
        //return 'show page!';
        $paperworks = Paperwork::where('id', $id)->get();
        return view('paperwork.creator.show', ['paperworks' => $paperworks]);
    }

    public function store(Request $request)
    {
        // TODO Refactor using FormRequest
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

        $paperwork->support()->create();

        $paperwork->save();

        switch ([auth()->user()->roleType->name, auth()->user()->roleType->type]) {

            case ['creator', 'ptj']:
                $paperwork->support->supporters()->createMany([
                    ['user_id' => User::ofRole('supporter')->ofType('officer_ptj')->inRandomOrder()->first()->id]
                ]);
                break;

            case ['creator', 'student_hea']:
                //trhea last approved
                $paperwork->support->supporters()->createMany([
                    ['user_id' => User::ofRole('supporter')->ofType('penasihat')->inRandomOrder()->first()->id],
                    ['user_id' => User::ofRole('supporter')->ofType('kpb')->inRandomOrder()->first()->id],
                    ['user_id' => User::ofRole('supporter')->ofType('kupr')->inRandomOrder()->first()->id],
                    ['user_id' => User::ofRole('supporter')->ofType('kpp')->inRandomOrder()->first()->id, 'level'=> 2]
                ]);
                break;

            case ['creator', 'student_hep']:
                //trhep last approved
                $paperwork->support->supporters()->createMany([
                    ['user_id' => User::ofRole('supporter')->ofType('penasihat')->inRandomOrder()->first()->id],
                    ['user_id' => User::ofRole('supporter')->ofType('kpb')->inRandomOrder()->first()->id],
                    ['user_id' => User::ofRole('supporter')->ofType('kupr')->inRandomOrder()->first()->id]
                ]);
                break;

            default:
                throw new Exception('Role\'s type is not found in database, please contact admin to diagnose this role issue.');
                break;
        }
        return redirect()->route('paperwork.creator.index');
    }
}
