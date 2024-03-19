<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use Mail;
use Session;
use Carbon\Carbon; 

use App\Mail\OtpMail;
use App\Mail\ForgetPassword;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Str;

  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('Auth.login');
    }  

 

  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('client.register');
    }
  
      
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
      
   
        $credentials = User::where('email', $request->email)->where('password', $request->password)
        ->first();

      $email=$request->email;
    
if($credentials) {
    Auth::login($credentials);
    $user_id=$request->user()->account_Id;
    $email=$request->user()->email;
    if($email=="admin@software.com")
    {
    return redirect('Admin')->withSuccess('Welcome Back');

    }

    return redirect('dashboard')->withSuccess('Welcome Back');
} else {
    return redirect("login")->withWarning('Oppes! You have entered invalid credentials');

}
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $url = 'http://95.179.225.7:8080/ClientAPI/CreateAccount';
        $name=$request->name;
        $password=$request->password;
        $email=$request->email;
  
        // Data to be sent as JSON
        $data = array(
            "Group" => "Stockton",
            "Name" => $name,
            "Password" => $password,
            "Email" => $email,
            "Country" => "string",
            "City" =>"string",
            "State" =>"string",
            "Zipcode" => "string",
            "Address" =>"string",
            "Phone" => "string" ,
            "Leverage" => 0,
            "Deposit" => 0,
            "AgentAccount" => 0,
            "InvestorPassword" => "string"
        );        // Convert the data to JSON format
        $jsonData = json_encode($data);
        
        // Initialize cURL session
        $ch = curl_init($url);
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        
        // Execute the cURL session and capture the response
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        }
        
        // Close cURL session
        curl_close($ch);
        $data = json_decode($response, true);

        if ($data) {
            if (isset($data['Balance'])) {
                $Id = $data['Id'];
                $name = $data['Name'];
                $email = $data['Email'];
                // echo "Id: " . $Id;
                // echo "name: " . $name;
                // echo "email: " . $email;
                $user=  User::create([
    
                    'login_id' => $Id,
                    'name' => $name,
                   'email' => $email,
                   'password' => $password,
                  ]);
                //   dd($Id);
                  Auth::login($user);

            } else {
                echo "Balance not found in the response.";
            }
        } 


    
     
return redirect('dashboard')->with('success',"You are Registered Successfully");
}


    // return redirect('dashboard')->with('success','Congratulations You are verified With us to do banking');

    public function otpPage(){
        return view('client.emailOtp');
    }

public function  ConfirmOtp(Request $request){
    $confirm_otp1=$request->confirm_otp1;
    $confirm_otp2=$request->confirm_otp2;
    $confirm_otp3=$request->confirm_otp3;
    $confirm_otp4=$request->confirm_otp4;
    $confirm_otp=$request->otp;
    $user_id=$request->user()->id;

    $user_otp=  DB::table('users')->where('id',$user_id)->value('otp');
// dd($confirm_otp1);
    if($user_otp==$confirm_otp){
      $account_number=  DB::table('users')->where('id',$user_id)->value('account_number');
      $email=  DB::table('users')->where('id',$user_id)->value('email');
      $password=  DB::table('users')->where('id',$user_id)->value('password');

        $details = [
            'name' => $request->name,
            'email' => $email,
            'email' =>$email,
            'password' =>$password,
        ];
        DB::table('users')->where('id',$user_id)->update([
            "status"=>"Verified",
]);
        Mail::to($email)->send(new RegisterMail($details));
        return redirect('dashboard')->with('success',"Thanks You are fully Verified");


    }else{
        return back()->with('warning',"Your Otp is Not Verified ");
    }
}
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create( Request $request)
    {
      User::create([
        'name' =>  $request->fullname,
        'email' => $request->email,
        'password' =>$request->password,
   
      ]);
   

    //   return redirect(route('login'))->withSuccess(' You have access');
    return redirect('profile')->withSuccess('Great! You are Successfully Registered');


    }



    public function showForgetPasswordForm()
    {
       return view('Auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $email=$request->email;

        $token = Str::random(64);

        DB::table('forget_password')->insert([
            'email' => $email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
         $name=DB::table('users')->where('email', $email)->value('name');
          $details = [
            'name' => $name,
            'email' =>$email,
            'token'=>$token
        ];
        Mail::to('ahmadfiverr98@gmail.com')->send(new ForgetPassword($details));

     

        return back()->with('success', 'We have e-mailed your password reset link!');
    }




    public function showResetPasswordForm($token) { 
        return view('Auth.forgetPasswordLink', ['token' => $token]);
     }
     public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('forget_password')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }


        $user = User::where('email', $request->email)
                    ->update(['password' => $request->password]);
                   
                    
                 
        DB::table('forget_password')->where(['email'=> $request->email])->delete();
        return redirect('/login')->with('success', 'Your password has been changed!');
        
    }


    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}