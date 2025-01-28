<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admintabs.dashboard');
    }


    // Auth Function

    public function showloginPage(){
       
        return view('admin.login.login');

    }
    
    public function verifyloginPage(Request $request){
    //    dd($request->all());
        $validate= Validator::make($request->all(),[
            'name'     => 'required| alpha', // Name must only contain alphabets
            'email'    => 'required| email', // Email must contain '@'
            'password' => 'required| min:5', 


        ]);
         // If validation fails, redirect back with error messages
        if ($validate->fails()){
            $firsterror=$validate->errors()->all()[0];
            return redirect()->back()->withError($firsterror)->withInput();
        }
        $data=$request->all('email', 'password');
        $verify=Auth::attempt($data);
        if($verify)
        {
            //  dd($verify);
            return redirect()->to('/admin/dashboard');
        }
        else{
            return redirect()->back()->withError('Invalid Email or Password')->withInput();
        }


        


    }
    


    public function showRegisterPage(){

        return view('admin.login.register');

    }

    public function storeRegisterInfo(Request $request){


        // dd($request->all());

        // add validation here

        // if validation Passed store the data in database user Table
        $deliveryBoy = new User();
        $deliveryBoy->name      = $request->name;
        $deliveryBoy->email     = $request->email;
        $deliveryBoy->phone     = $request->phone;
        $deliveryBoy->address   = $request->address;
        $deliveryBoy->password  = Hash::make($request->password);
        $deliveryBoy->role     = 'dBoy';
        $deliveryBoy->save();

        // Create a session for auth users
        $session = Auth::attempt(['email' => $request->email,'password' => $request->password],$remember = true);

            if($session){
                // dd($session);
                return redirect()->route('admin.dashboard');
            }else{
                dd($session);
                // Redirect to login
                return redirect()->route('login');
            }


    }

}
