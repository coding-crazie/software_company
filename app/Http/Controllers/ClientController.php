<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(Request $request){
        $user_id=$request->user_id;


        $payment_history = DB::table('project_details')
        ->join('users', 'project_details.user_id', '=', 'users.id')
        ->select(DB::raw('sum(project_details.amount) as amounts'),'project_details.month')->groupBy('project_details.month')
        ->get(); 
        $payment_history=$payment_history->mapWithKeys(function($item,$key){
            return [$item->month=>$item->amounts];
        });

        $users=DB::table('users')->where('id',$user_id)->simplePaginate(30);
        $tickets=DB::table('ticket')->where('user_id',$user_id)->simplePaginate(30);
        $project_details=DB::table('project_details')->where('user_id',$user_id)->simplePaginate(30);
        $users_count=DB::table('users')->where('id',$user_id)->count();
        $project_count=DB::table('project_details')->where('user_id',$user_id)->count();
        $project_amount=DB::table('project_details')->where('user_id',$user_id)->where('progress',"100%")->sum('amount');
        $open_projects=DB::table('project_details')->where('user_id',$user_id)->get();
        $open_projects_count=DB::table('project_details')->where('user_id',$user_id)->count();
        $completed_projects=DB::table('project_details')->where('user_id',$user_id)->get();
        $ticket_count=DB::table('ticket')->where('user_id',$user_id)->count();
        return view('client.index')->with('open_projects_count',$open_projects_count)->with('completed_projects',$completed_projects)->with('project_details',$project_details)->with('tickets',$tickets)->with('open_projects',$open_projects)->with('project_amount',$project_amount)->with('ticket_count',$ticket_count)->with('project_count',$project_count)->with('users_count',$users_count)->with('users',$users);
    }
}
