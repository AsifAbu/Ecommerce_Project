<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\MerchantUserInfo;
use App\NormalUserInfo;
use App\AllUser;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
session_start();

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function publicprofile(){
        return view('profilepublic');
    }

    public function ownprofile(){
        $tableName = session()->get('type').'_user_info';
        $user = DB::table($tableName)->where('email',session()->get('email'))
                    ->first();
        return view('profileown')->with('myData',$user);
    }

    public function logcheck(Request $req){
        try{
            $userData = DB::table('all_user')->where('email', $req->email)->first();
            if($userData){
                $userId = $userData->gid;
                $userType = $userData->type;
                $userPassword = $userData->password;
                $userEmail = $userData->email;
                $userName = $userData->name;
            }
            else{
                return redirect('login')->with('failed',"No Data Found");
            }
            
        }
        catch(Exception $e){
            return redirect('login')->with('failed',"operation failed");
        }

        if($req->email == $userEmail){
            if($req->password == $userPassword){
                if($userType =="admin"){

                    $req->session()->put('type', $userType);
                    $req->session()->put('id', $userId);
                    $req->session()->put('email', $userEmail);
                    $req->session()->put('name', $userName);
                    return redirect()->route('index')->with('status',"Successfully Login");;
                }
                if($userType =="merchant"){

                    $req->session()->put('type', $userType);
                    $req->session()->put('id', $userId);
                    $req->session()->put('email', $userEmail);
                    $req->session()->put('name', $userName);
                    return redirect()->route('index')->with('status',"Successfully Login");;
                }
                if($userType =="normal"){

                    $req->session()->put('type', $userType);
                    $req->session()->put('id', $userId);
                    $req->session()->put('email', $userEmail);
                    $req->session()->put('name', $userName);
                    return redirect()->route('index')->with('status',"Successfully Login");
                }
            }
            else{
                return redirect('login')->with('failed',"Invalid Password");
            }

        }else{
          return redirect('login')->with('failed',"Login failed");
      }
  }

}
