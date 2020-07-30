<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\AboutUser;
// use App\Profile;
use App\Profilechange;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $gender="Any";
        $interest="Any";
        $birth=Date("Y-m-d");
        $sign="Any";
        $looking="Any";
        $city="Any";
        $country="Any";
        $height="Any";
        $body="Any";
        $looks="Any";
        $hair="Any";
        $eye="Any";
        $relationship="Any";
        $havechild="Any";
        $wantchild="Any";
        $diet="Any";
        $drinking="Any";
        $smoking="Any";
        $education="Any";
        $occupation1="Any";
        $occupation2="Any";
        $income="Any";
        $religion="Any";
        $ethincity="Any";
        $homelang="Any";
        $otherlang="Any";
        AboutUser::create(['gender'=>$gender,
                           'interest'=>$interest,
                           'birth'=>$birth,
                           'sign'=>$sign,
                           'looking'=>$looking,
                           'city'=>$city,
                           'country'=>$country,
                           'height'=>$height,
                           'body'=>$body,
                           'looks'=>$looks,
                           'hair'=>$hair,
                           'eye'=>$eye,
                           'relationship'=>$relationship,
                           'havechild'=>$havechild,
                           'wantchild'=>$wantchild,
                           'diet'=>$diet,
                           'drinking'=>$drinking,
                           'smoking'=>$smoking,
                           'education'=>$education,
                           'occupation1'=>$occupation1,
                           'occupation2'=>$occupation2,
                           'income'=>$income,
                           'religion'=>$religion,
                           'ethincity'=>$ethincity,
                           'homelang'=>$homelang,
                           'otherlang'=>$otherlang]);
        // $profile="";
        // $like_count=0;
        // Profile::create(['profile'=>$profile,
        //                  'like_count'=>$like_count]);

        //Movement
         $profile="";
         $user_id=0;
         $pname="Profile Name";
         Profilechange::create(['user_id'=>$user_id,
                                'profile'=>$profile,
                                'name'=>$pname
                              ]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
