<?php

namespace App\Http\Controllers;

use App\AboutUser;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=AboutUser::whereId($id)->firstOrFail();
        return view('layout.aboutme',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gender=$request->gender;
        $interest=$request->interest;
        $birth=$request->birth;
        //$sign=$request->sign;
        $looking=$request->looking;
        $city=$request->city;
        $country=$request->country;
        $height=$request->height;
        $body=$request->body;
        $looks=$request->looks;
        $hair=$request->hair;
        $eye=$request->eye;
        $relationship=$request->relationship;
        $havechild=$request->havechild;
        $wantchild=$request->wantchild;
        $diet=$request->diet;
        $drinking=$request->drinking;
        $smoking=$request->smoking;
        $education=$request->education;
        $occupation1=$request->occupation1;
        $occupation2=$request->occupation2;
        $income=$request->income;
        $religion=$request->religion;
        $ethincity=$request->ethincity;
        $homelang=$request->homelang;
        $otherlang=$request->otherlang;

        if(($gender == $interest) && ($gender != "Any" && $interest != "Any"))
        {       
            return redirect('/aboutme/'.$id)->with('error_gender','Oh! You are interesting in same gender!');
        }
        else if(($country != "Myanmar" && $city != "Other")  && ($country != "Any" && $city != "Any"))
        {
            return redirect('/aboutme/'.$id)->with('error_place','Oh! This city is not in your country!');
        }
        else if($relationship == "Single" && ($havechild == "Yes, not living with me" || $havechild == "Yes, living with me" || $havechild == "Yes, living with me sometimes"))
        {
            return redirect('/aboutme/'.$id)->with('error_rs','Oh! This is fanny, have childern?');
        }
        else
        {
            AboutUser::find($id)->update([
            'gender'=>$gender,
            'interest'=>$interest,
            'birth'=>$birth,
            //'sign'=>$sign,
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
            'otherlang'=>$otherlang
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
