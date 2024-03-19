<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Mail;

use App\Mail\ProjectConfirm;

class AdminController extends Controller
{
    public function index(Request $request){


        $payment_history = DB::table('project_details')
        ->join('users', 'project_details.user_id', '=', 'users.id')
        ->select(DB::raw('sum(project_details.amount) as amounts'),'project_details.month')->groupBy('project_details.month')
        ->get(); 
        $payment_history=$payment_history->mapWithKeys(function($item,$key){
            return [$item->month=>$item->amounts];
        });
        // dd($payment_history);


        $users=DB::table('users')->simplePaginate(30);
        $tickets=DB::table('ticket')->simplePaginate(30);
        $project_details=DB::table('project_details')->simplePaginate(30);
        $users_count=DB::table('users')->count();
        $project_count=DB::table('project_details')->count();
        $project_amount=DB::table('project_details')->where('progress',"100%")->sum('amount');
        $open_projects=DB::table('project_details')->where('progress',">=","10%")->get();
        $completed_projects=DB::table('project_details')->get();
        $ticket_count=DB::table('ticket')->count();
        $mails=DB::table('mail')->latest()->simplePaginate(5);
        return view('admin.index')->with('completed_projects',$completed_projects)
        ->with('project_details',$project_details)->with('tickets',$tickets)
        ->with('open_projects',$open_projects)->with('project_amount',$project_amount)
        ->with('ticket_count',$ticket_count)->with('project_count',$project_count)
        ->with('mails',$mails)->with('users_count',$users_count)->with('users',$users)->with('payment_history',$payment_history);
    }
 
    public function my_projects(Request $request){
        $search=$request['search'] ?? "";
        if($search !==""){
            $project_details= DB::table('project_details')
            ->join('users', 'users.id', '=', 'project_details.user_id')
            ->select('users.name as client_name','users.email','users.password', 'project_details.*', )->where('project_details.name' ,'LIKE' ,"%$search%")->simplePaginate(30);
            return view('admin.my_projects')->with('project_details',$project_details);
        }else{
        $project_details = DB::table('project_details')
        ->join('users', 'users.id', '=', 'project_details.user_id')
        ->select('users.name as client_name','users.email','users.password', 'project_details.*', )
        ->get();
        return view('admin.my_projects')->with('project_details',$project_details);
  }
}

public function my_emails(Request $request){
    $search=$request['search'] ?? "";
    if($search !==""){
        // dd($search);
        $mail= DB::table('mail')->where('email' ,'LIKE' ,"%$search%")->where('name' ,'LIKE' ,"%$search%")->simplePaginate(30);
        return view('admin.my_emails')->with('mail',$mail);
    }else{
    $mail = DB::table('mail')->get();
    // dd($mail);
    return view('admin.my_emails')->with('mail',$mail);
}
}



    public function new_user_form(){
        return view('admin.new');
    }

    public function new_project_form(Request  $request){
        $clients=DB::table('users')->simplePaginate(30);
        return view('Admin.new_project')->with('clients',$clients);
    }


    public function make_user(Request  $request){
        $request->validate([
            'email' => 'required|unique:users',
        ]);
        $user =  User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>$request->password,
               ]);
               return Redirect('My-Clients')->with('success',"Client Registered Successfully");
}



public function all_clients(Request $request){
    $users=DB::table('users')->simplePaginate(30);

    return view('admin.clients')->with('users',$users);
}
public function edit_client(Request  $request ,$id){
    $users= DB::table("users")->where('id',$id)->get();

return view('admin.edit_client')->with('users',$users)->with('id',$id);
}



public function edit_project(Request  $request ,$id){
    $project_details= DB::table("project_details")->where('id',$id)->get();

return view('admin.edit_project')->with('project_details',$project_details);
}


public function edit_ticket(Request  $request ,$id){
    $tickets= DB::table("ticket")->where('id',$id)->get();

return view('admin.edit_ticket')->with('tickets',$tickets);
}




public function delete_project(Request  $request ,$id){
    $users= DB::table("project_details")->where('id',$id)->delete();
    return Redirect('/My-Projects')->with('warning',"Project Delete Successfully");
}

public function delete_ticket(Request  $request ,$id){
    $users= DB::table("ticket")->where('id',$id)->delete();
    return Redirect('/My-Tickets')->with('info',"Ticket Delete Successfully");
}


public function delete_client(Request  $request ,$id){
    $users= DB::table("users")->where('id',$id)->delete();
    return Redirect('/My-Clients')->with('warning',"Client Account  Delete Successfully");
}



public function update_client_acc(Request  $request){
    $id=$request->id;

    $email=$request->email;
    if($email==Null){
    $email=DB::table('users')->where('id',$id)->value('email');
    DB::table('users')->where('id',$id)->update([
        'name' => $request->name,
        'password' =>$request->password,
       ]);
     
        return Redirect('/My-Clients')->with('success',"Client Account  Updated Successfully");
    }else{

        $request->validate([
            'email' => 'required|unique:users',
        ]);
               DB::table('users')->where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>$request->password,
               ]);
           
                return Redirect('/My-Clients')->with('success',"Client Account  Updated Successfully");
    }
}

public function see_project_images(Request  $request, $id){
    $image1=DB::table('project_details')->where('id',$id)->value('image1');
    $image2=DB::table('project_details')->where('id',$id)->value('image2');
    $image3=DB::table('project_details')->where('id',$id)->value('image3');
    $image4=DB::table('project_details')->where('id',$id)->value('image4');
    return view("Admin.project_images")->with('image1',$image1)->with('image1',$image1)->with('image2',$image2)
    ->with('image3',$image3)->with('image4',$image4);


}

public function create_project(Request  $request){
    DB::table("project_details")->insert([
        'name'=>$request->name,
        'description'=>$request->description,
        'type'=>$request->type,
        'client'=>$request->client,
        'amount'=>$request->amount,
        'payment_method'=>$request->payment,
        'month'=>Carbon::now()->format('F'),
        'user_id'=>$request->client,
    ]);
    return Redirect('/My-Projects')->with('success',"Project Created  Successfully");

}


public function update_project(Request  $request){
    $id=$request->id;
                            
    DB::table("project_details")->where('id',$id)->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'type'=>$request->type,
        'client'=>$request->client,
        'payment_method'=>$request->payment,
        'amount'=>$request->amount,
        'progress'=>$request->progress,
        'user_id'=>$request->client,
    ]);
   
    return Redirect('/My-Projects')->with('success',"Project Created  Successfully");

}
public function show_tickets(Request $request){
    $search=$request['search'] ?? "";
    if($search !==""){
        $ticket= DB::table('ticket')
        ->join('users', 'users.id', '=', 'ticket.user_id')
        ->select('users.name as client_name','users.email','users.password', 'ticket.*', )->where('ticket.name' ,'LIKE' ,"%$search%")->simplePaginate(30);
        return view('admin.tickets')->with('ticket',$ticket);
    }else{
    $ticket = DB::table('ticket')
    ->join('users', 'users.id', '=', 'ticket.user_id')
    ->select('users.name as client_name','users.email','users.password', 'ticket.*', )
    ->get();
    return view('admin.tickets')->with('ticket',$ticket);
}
}




public function new_project_images(Request  $request ,$id){
    return view('Admin.new_project_images')->with('id',$id);
}





public function adding_images(Request  $request){
    $image1  = $request->image1->getClientOriginalName();
    $image2  = $request->image2->getClientOriginalName();
    $image3  = $request->image3->getClientOriginalName();
    $image4  = $request->image4->getClientOriginalName();
    $id=$request->id;
                            
    DB::table("project_details")->where('id',$id)->update([
        'image1'=>$image1,
        'image2'=>$image2,
        'image3'=>$image3,
        'image4'=>$image4,
    ]);
    $request->image1->move(public_path('images'), $image1);
    $request->image2->move(public_path('images'), $image2);
    $request->image3->move(public_path('images'), $image3);
    $request->image4->move(public_path('images'), $image4);
    return Redirect('/My-Projects')->with('success',"Project Updated  Successfully"); 
}


    public function create_ticket(Request  $request){
        $clients=DB::table('users')->simplePaginate(30);
        return view('Admin.new_ticket')->with('clients',$clients);
    }
    public function create_new_ticket(Request  $request){
        DB::table("ticket")->insert([
            'name'=>$request->name,
            'description'=>$request->description,
            'type'=>$request->type,
            'user_id'=>$request->client,
        ]);
        return Redirect('/My-Tickets')->with('success',"Ticket Created  Successfully");
    
    }


    public function update_ticket(Request  $request){
        $id=$request->id;
        $user_id=$request->user_id;
        DB::table("ticket")->where("id",$id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'type'=>$request->type,
            'status'=>$request->status,
            'user_id'=>$user_id,
        ]);
        return Redirect('/My-Tickets')->with('success',"Ticket Updated  Successfully");
    
    }

      public function project_confirm(Request  $request,$id){
        $user_id=DB::table('project_details')->where('id',$id)->value('user_id');
        $name=DB::table('users')->where('id',$user_id)->value('name');
        $email=DB::table('users')->where('id',$user_id)->value('email');
        // dd($email);

        $details = [
            'name' => $name,
        ];
        Mail::to($email)->send(new ProjectConfirm($details));
       
        return Redirect('/My-Projects')->with('success',"Mail Sent Successfully");
      }


        public function Mail_box(Request  $request){
return view('Admin.mail_box');
}

public function MakeMail(Request $request){
            
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'subject' => 'required|min:6',
  ]);
        $name=$request->name;
        $email=$request->email;
        $user_id=DB::table('users')->where('email',$email)->value('id');
        if($user_id==NULL){
          return back()->with('warning',"Mail Address Not Found Successfully");

        }else{
          $subject=$request->subject;
        $message=$request->message;
    
        $files = $request->file('files');
        if($request->hasFile('files') ){

       
 
        foreach ($files as $file) {
            
          $filename = uniqid() . '.' . $file->getClientOriginalName();
          
          // Save the file to a designated folder
          $file->storeAs('public/images', $filename);
          
          // Save file details to the database if needed
          // You can create a model and use Eloquent to perform database operations
      }
      }

      
        $data['name']=$name;
        $data['title']=$subject;
        // dd($message);
      $data['info']=$message;
      $data['email']=$email;
      if($request->hasFile('files')){
        Mail::send('emails.admin', $data, function($message)use($data, $files) {
          $message->to($data["email"], $data["email"])
          ->subject($data["title"]);

                    foreach($files as $file) {
                        $message->attach($file->getRealPath(), array(
                            'as' => $file->getClientOriginalName(), // If you want you can chnage original name to custom name      
                            'mime' => $file->getMimeType())
                        );
                    }
      });
    
      }else{
        Mail::send('emails.admin', $data, function($message)use($data) {
          $message->to($data["email"], $data["email"])
          ->subject($data["title"]);

                  
      }); 
   
      }
         
        DB::table('mail')->insert([
            "name"=>$name,
            "subject"=>$subject,
            "email"=>$email,
            "message"=>$message,
            "month"=>Carbon::now()->format('F'),
            "user_id"=>$user_id,
]);

return back()->with('success',"Mail Send Successfully");
        }
        
      }

}
