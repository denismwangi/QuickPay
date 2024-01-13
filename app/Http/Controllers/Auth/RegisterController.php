<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Snowfire\Beautymail\Beautymail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 2,
        ]);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
                    'email'   => 'required|email|unique:users',
                    'password' => 'required'
                ]);
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'role' => 2,
             'site' => 'Webizpay'
        ]);
        $details = 'A new user has regstered at webizpay website login to admin panel to view the information';
        $msubject11 = 'Webizpay new user registration';
        $null = "";
        $ad = User::where('role',1)->first();
        $email = $ad->email;

        $mymail = app()->make(Beautymail::class);
        $mymail->send('emails.admin',  ['details'=>$details,'rece'=>""], function($message)use($email,$null,$msubject11)
        {
            $message->from('support@webizpay.com','Webizpay')
                ->to($email,"")
                ->subject($msubject11);

        });
        return redirect()->route('otp.generate');

    }
    public function registerView()
    {
        return view('auth.register');

    }
}
