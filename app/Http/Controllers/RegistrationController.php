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

class RegistrationController extends Controller
{
    public function index(){
    	return view('registration');
    }
    public function registrationCheck(Request $req){
    	$name = $req->name;
    	$phoneNumber = $req->phonenumber;
    	$email = $req->email;
        $gender = $req->gender;
    	$city = $req->city;
    	$location = $req->location;
    	$password = $req->password;
    	$confirmPassword = $req->confirmPassword;


        $rules = [
            'name' => 'required|string|min:3|max:255',
            'city' => 'required|string|min:3|max:255',
            'location' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'gender' => 'required|string|min:3|max:255',
            'phonenumber' => 'required|numeric|min:11'
        ];
        $validator = Validator::make($req->all(),$rules);
        if (false) {
            return redirect('registration')->withInput()->withErrors($validator);
        }
        else{
            try{

                $allUser = new AllUser;
                $allUser->name = $name;
                $allUser->phone = $phoneNumber;
                $allUser->email = $email;
                $allUser->type = "normal";
                $allUser->password = $password;
                $allUser->save();

                $recentInserted = DB::table('all_user')->where('phone', $phoneNumber)->first();

                $recentInsertedUserId = $recentInserted->gid;

                $normalUser = new NormalUserInfo;
                $normalUser->uid = $recentInsertedUserId;
                $normalUser->name = $name;
                $normalUser->phone = $phoneNumber;
                $normalUser->email = $email;
                $normalUser->gender = $gender;
                $normalUser->dob = "not given";
                $normalUser->city = $location.", ".$city;
                $normalUser->profile_pic = "not given";
                $normalUser->password = $password;
                $normalUser->save();


                return redirect('login')->with('status',"Insert successfully");
            }
            catch(Exception $e){
                return redirect('registration')->with('failed',"operation failed");
            }
        }
    }


    public function updateCheck(Request $req){
        $firstName = $req->rfname;
        $lastName = $req->rlname;
        $phoneNumber = $req->rphonenumber;
        $dateOfBirth = $req->rdob;
        $gender = $req->rgender;
        $email = $req->remail;
        $country = $req->rcountry;
        $city = $req->rcity;
        $location = $req->rlocation;
        $favouriteFood = $req->rfavouritefood;
        $password = $req->rpassword;
        $confirmPassword = $req->rconfirmpassword;
        $type = $req->rtype;
        $favouriteRestaurant = $req->rfavouriterestaurant;

        $firstNameFlag = false;
        $lastNameFlag = false;
        $phoneNumberFlag = false;
        $dateOfBirthFlag = false;
        $genderFlag = false;
        $emailFlag = false;
        $counrtyFlag = false;
        $cityFlag = false;
        $locationFlag = false;
        $favouriteFoodFlag = false;
        $passwordFlag = false;
        $favouriteRestaurantFlag = false;

        //firstname and last name should not be empty and first charecture not be a numeric number;
        if($firstName != "" && !is_numeric($firstName[0]))
        {
            $firstNameFlag = true;
        }
        if($lastName != "" && !is_numeric($lastName[0]))
        {
            $lastNameFlag = true;
        }

        if(strlen($phoneNumber) == 11 && $phoneNumber[0] == 0 && $phoneNumber[1] == 1)
        {
            if($phoneNumber[2] == 5 || $phoneNumber[2] == 6 || $phoneNumber[2] == 7 || $phoneNumber[2] == 8 || $phoneNumber[2] == 9)
            {
                if(is_numeric($phoneNumber))
                {
                    $phoneNumberFlag=true;
                }
                else
                {
                    $phoneNumberFlag=false;
                }
                
            }
            else
            {
                $phoneNumberFlag=false;
            }
        }
        else if(strlen($phoneNumber) == 14 && $phoneNumber[0] == 0 && $phoneNumber[1] == 1 && is_numeric($phoneNumber))
        {
            if($phoneNumber[2] == 5 || $phoneNumber[2] == 6 || $phoneNumber[2] == 7 || $phoneNumber[2] == 8 || $phoneNumber[2] == 9)
            {
                $phoneNumberFlag=true;
            }
            else
            {
                $phoneNumberFlag=false;
            }
        }
        else
        {
            $phoneNumberFlag=false;
        }

        if($dateOfBirth != "")
        {
            $dateOfBirthFlag = true;
        }
        if($gender == "male" || $gender == "female" || $gender == "other")
        {
            $genderFlag = true;
        }

        if(!empty($email))
        {
            //echo "your email is: ".$Email."<br>";
            $n = strlen($email);
            for($i=0;$i<$n;$i++)
            {
                if($email[$i] == "@")
                {
                    $take1 = $i;
                    $a = explode("@", $email);
                
                }
            }
            $name = $a[0];
            $after = $a[1];
            $b = explode(".", $after);
            if(sizeof($b) == 2)
            {
                if(strlen($b[0]) > 2 && strlen($b[0]) < 8)
                {
                    if(strlen($b[1]) > 2 && strlen($b[1]) < 4)
                    {
                        $emailFlag=true;
                    }
                    else
                        echo "b false";
                }
                else
                    echo "b0 false";
            }
            else
                echo "size of after error";                 

        }
        else
        {
            echo "textfield can't be empty!!!!";
        }

        if($country != "" && strlen($country) > 1)
        {
            $counrtyFlag = true;
        }
        if($city != "" && strlen($city) > 1)
        {
            $cityFlag = true;
        }
        if($location != "" && strlen($location) > 1)
        {
            $locationFlag = true;
        }
        if($favouriteFood != "" && strlen($favouriteFood) > 1)
        {
            $favouriteFoodFlag = true;
        }
        if($favouriteRestaurant != "" && strlen($favouriteRestaurant) > 1)
        {
            $favouriteRestaurantFlag = true;
        }
        if($password == $confirmPassword)
        {
            $passwordFlag = true;
        }

        if($firstNameFlag && $lastNameFlag && $phoneNumberFlag && $dateOfBirthFlag && $genderFlag && $emailFlag && $counrtyFlag && $cityFlag && $locationFlag && $favouriteFoodFlag && $passwordFlag && $favouriteRestaurantFlag)
        {
            return redirect()->route('login');
        }
        else
        {
            return redirect()->route('registration');
        }




        
    }
}
