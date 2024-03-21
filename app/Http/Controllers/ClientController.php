<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(Request $request){
        $user_id=$request->user()->id;


        $payment_history = DB::table('project_details')
        ->join('users', 'project_details.user_id', '=', 'users.id')
        ->select(DB::raw('sum(project_details.amount) as amounts'),'project_details.month')->groupBy('project_details.month')
        ->get(); 
        $payment_history=$payment_history->mapWithKeys(function($item,$key){
            return [$item->month=>$item->amounts];
        });

        $tickets=DB::table('ticket')->where('user_id',$user_id)->simplePaginate(30);
        $project_details=DB::table('project_details')->where('user_id',$user_id)->simplePaginate(30);
        $project_count=DB::table('project_details')->where('user_id',$user_id)->count();
        $project_amount=DB::table('project_details')->where('user_id',$user_id)->where('progress',"100%")->sum('amount');
        $open_projects=DB::table('project_details')->where('user_id',$user_id)->get();
        $open_projects_count=DB::table('project_details')->where('user_id',$user_id)->count();
        $completed_projects=DB::table('project_details')->where('user_id',$user_id)->get();
        $ticket_count=DB::table('ticket')->where('user_id',$user_id)->count();
        return view('client.index')->with('open_projects_count',$open_projects_count)
        ->with('completed_projects',$completed_projects)->with('project_details',$project_details)
        ->with('tickets',$tickets)->with('open_projects',$open_projects)
        ->with('project_amount',$project_amount)->with('payment_history',$payment_history)
        ->with('ticket_count',$ticket_count)->with('project_count',$project_count);    
    }

 
    public function my_projects(Request $request){
        $user_id=$request->user()->id;

        $search=$request['search'] ?? "";
        if($search !==""){
            $project_details= DB::table('project_details')
            ->join('users', 'users.id', '=', 'project_details.user_id')
            ->select('users.name as client_name','users.email','users.password', 'project_details.*', )->where('project_details.name' ,'LIKE' ,"%$search%")->simplePaginate(30);
            return view('client.my_projects')->with('project_details',$project_details);
        }else{
        $project_details = DB::table('project_details')
        ->join('users', 'users.id', '=', 'project_details.user_id')
        ->select('users.name as client_name','users.email','users.password', 'project_details.*', )->where('project_details.user_id'  ,$user_id)
        ->get();
        return view('client.my_projects')->with('project_details',$project_details);
  }
}

    public function see_project_images(Request  $request, $id){
        $image1=DB::table('project_details')->where('id',$id)->value('image1');
        $image2=DB::table('project_details')->where('id',$id)->value('image2');
        $image3=DB::table('project_details')->where('id',$id)->value('image3');
        $image4=DB::table('project_details')->where('id',$id)->value('image4');
        return view("client.project_images")->with('image1',$image1)->with('image1',$image1)->with('image2',$image2)
        ->with('image3',$image3)->with('image4',$image4);
    }
    public function remarks_page(Request  $request, $id){
        return view('client.remarks')->with('id',$id);
    }
    public function create_project_remarks(Request  $request){
        $id=$request->id;

        DB::table("project_details")->where('id',$id)->update([
            'remarks'=>$request->remarks,
        ]);
        return Redirect('/My-Projects')->with('success',"Thanks For Your Feedback");
    
    }




    public function ticket_page(Request  $request){
        return view('client.new_ticket');
    }



    public function show_profile(Request  $request){
        return view('client.show_profile');
    }
    public function show_tickets(Request $request){
        $search=$request['search'] ?? "";
        if($search !==""){
            $ticket= DB::table('ticket')
            ->join('users', 'users.id', '=', 'ticket.user_id')
            ->select('users.name as client_name','users.email','users.password', 'ticket.*', )->where('ticket.name' ,'LIKE' ,"%$search%")->simplePaginate(30);
            return view('client.my_tickets')->with('ticket',$ticket);
        }else{
        $ticket = DB::table('ticket')
        ->join('users', 'users.id', '=', 'ticket.user_id')
        ->select('users.name as client_name','users.email','users.password', 'ticket.*', )
        ->get();
        return view('client.my_tickets')->with('ticket',$ticket);
    }
    }

    public function create_new_ticket(Request  $request){
        $user_id=$request->user()->id;

        DB::table("ticket")->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'type'=>$request->type,
            'user_id'=>$user_id,
        ]);
        return Redirect('/My-Tickets')->with('success',"Ticket Created Successfully Admin Will Contact You Shortly");
    
    }

}
