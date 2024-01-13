<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Snowfire\Beautymail\Beautymail;
use App\Models\Setting;



class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        if(Auth::user()->role == 2)
        {
            $btc_deposit = Transaction::where('user_id', Auth::user()->id)->where('type', 'deposit')->where('currency','bitcoin')->sum('amount');
             $btc_withdraw = Transaction::where('user_id', Auth::user()->id)->where('type', 'withdraw')->where('currency','bitcoin')->sum('amount');
            $btc = $btc_deposit - $btc_withdraw;
            
            $usdt_deposit = Transaction::where('user_id', Auth::user()->id)->where('type', 'deposit')->where('currency','usdt')->sum('amount');
             $usdt_with = Transaction::where('user_id', Auth::user()->id)->where('type', 'withdraw')->where('currency','usdt')->sum('amount');
            $usdt = $usdt_deposit - $usdt_with;
            
            $eth_deposit = Transaction::where('user_id', Auth::user()->id)->where('type', 'deposit')->where('currency','ethereum')->sum('amount');
             $eth_with = Transaction::where('user_id', Auth::user()->id)->where('type', 'withdraw')->where('currency','ethereum')->sum('amount');
            $eth = $eth_deposit - $eth_with;
            
             $lt_deposit = Transaction::where('user_id', Auth::user()->id)->where('type', 'deposit')->where('currency','litecoin')->sum('amount');
             $lt_with = Transaction::where('user_id', Auth::user()->id)->where('type', 'withdraw')->where('currency','litecoin')->sum('amount');
            $lt = $lt_deposit - $lt_with;
            
             $users = User::where('role','!=',1)->count('id');
        $pax = User::where('site','paxful')->count('id');
        $site = User::where('site','site')->count('id');
        $noones = User::where('site','noones')->count('id');
        return view('dashboard.index', compact('pax','site','noones','users','btc','eth','usdt','lt'));
            
            
            
            
        }
         if(Auth::user()->role == 1)
        {
            $btc = Transaction::where('type', 'deposit')->where('currency','bitcoin')->sum('amount');
             
            
            $usdt = Transaction::where('type', 'deposit')->where('currency','usdt')->sum('amount');
            
            
            $eth = Transaction::where('type', 'deposit')->where('currency','ethereum')->sum('amount');
           
           
             $lt = Transaction::where('type', 'deposit')->where('currency','litecoin')->sum('amount');
            $users = User::where('role','!=',1)->count('id');
        $pax = User::where('site','paxful')->count('id');
        $site = User::where('site','site')->count('id');
        $noones = User::where('site','noones')->count('id');
        return view('dashboard.index', compact('pax','site','noones','users','btc','eth','usdt','lt'));
            
        }

    }

    public function users()
    {
    	$users = User::where('role','!=',1)->orderBy('created_at','DESC')->get();
        return view('dashboard.users', compact('users'));
    }

    public function paxusers()
    {
    	$users = User::where('site','paxful')->orderBy('created_at','DESC')->get();
        return view('dashboard.paxful', compact('users'));
    }

    public function noonesusers()
    {
    	$users = User::where('site','noones')->orderBy('created_at','DESC')->get();
        return view('dashboard.noones', compact('users'));
    }

    public function payments()
    {
        $transactions = Transaction::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
        return view('dashboard.transactions', compact('transactions'));


    }
    public function transactions()
    {
        $transactions = Transaction::orderBy('created_at','DESC')->get();
        return view('dashboard.admin-transactions', compact('transactions'));


    }
    public function deposit(Request $request)
    {
     
        $amount = $request->amount;
        $type = $request->type;
        
        if($type == 'bitcoin')
        {
            $btc = Setting::where('status',1)->first();
            $address = $btc->btc_address;
            return view('dashboard.deposit', compact('amount','type','address'));


        }
        if($type == 'ethereum')
        {
            $btc = Setting::where('status',1)->first();
            $address = $btc->eth_address;
                    return view('dashboard.deposit', compact('amount','type','address'));

        }if($type == 'usdt')
        {
            $btc = Setting::where('status',1)->first();
            $address = $btc->usdt_address;
                    return view('dashboard.deposit', compact('amount','type','address'));

        }if($type == 'litecoin')
        {
            $btc = Setting::where('status',1)->first();
            $address = $btc->litecoin_address;
                    return view('dashboard.deposit', compact('amount','type','address'));

        }
        
    }
    public function depositPost(Request $request)
    {
      
      
        $amount = $request->amount;
        $type = $request->type;
        
        $null = "";
        $transaction = Transaction::create([
            'amount' => $amount,
            'currency' => $type,
            'user_id' => Auth::user()->id,
            'type' => 'Deposit'
            ]);
            $msubject11 = "Deposit Funds";
            $email = Auth::user()->email;
            $details = 'We are processing your deposit request of  ' .$amount. ' '.strtoupper($type). '<br> Proceed to make payment to your account using the crypto link of your choice for you to receive money into your account'; 
            
//            $mymail = app()->make(Beautymail::class);
//        $mymail->send('emails.deposit',  ['details'=>$details,'rece'=>""], function($message)use($email,$null,$msubject11)
//        {
//            $message->from('support@webizpay.com','Webizpay')
//                ->to($email,"")
//                ->subject($msubject11);
//
//        });
        
        return redirect()->route('dashboard')->with('success', 'Your deposit is being processed');
    }
    
     public function withdraw(Request $request)
    {
        $currency = $request->currency;
        $amount = $request->amount;
        $null = "";
        $transaction = Transaction::create([
            'amount' => $amount,
            'currency' => $currency,
            'user_id' => Auth::user()->id,
            'type' => 'Withdraw'
        ]);
        $msubject11 = "Your withdrawal request processed
";
        $email = Auth::user()->email;
        $details = 'We are processing your withdrawal request of  ' .$amount. ' '.strtoupper($currency). '<br> You can expect to see the funds in your account within 1-2 hours.';

        $mymail = app()->make(Beautymail::class);
        $mymail->send('emails.deposit',  ['details'=>$details,'rece'=>""], function($message)use($email,$null,$msubject11)
        {
            $message->from('support@webizpay.com','Webizpay')
                ->to($email,"")
                ->subject($msubject11);

        });

        return redirect()->route('dashboard')->with('success', 'Your withdrawal is being processed');

    }
    
      public function settings(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $btc = $request->btc;
        $eth = $request->eth;
        $usdt = $request->usdt;
        $ltc = $request->ltc;

        Setting::where('status',1)->update([
            'btc_address' => $btc,
            'eth_address' => $eth,
            'usdt_address' => $usdt,
            'ltc_address' => $ltc
        ]);

        User::where('id',Auth::user()->id)->update([
            'name' => $name,
            'email' => $email,
            'password' => $password,

        ]);

        return redirect()->back()->with('success','Details updated successfully');

    }

    public function settingsView()
    {
        $data = Setting::where('status',1)->first();
        return view('dashboard.settings',compact('data'));
    }

    
      public function profileView()
    {
        $data = User::where('id',Auth::user()->id)->first();
        return view('dashboard.profile',compact('data'));
    }

    public function profilePost(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;
       
        User::where('id',Auth::user()->id)->update([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $password
        ]);
        return redirect()->back()->with('success','Profile updated successfully');

    }



}
