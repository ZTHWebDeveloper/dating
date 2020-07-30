<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Profile;
use App\Profilechange;
use App\User;
use App\AboutUser;
use App\ProfileShowbook;
use Auth;
class ProfileController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function profile($id)
    // {
    //     $profile=DB::table('users')
    //                ->join('profiles','users.id','=','profiles.id')
    //                ->join('about_users','users.id','=','about_users.id')
    //                ->select('users.*','profiles.*','about_users.*')
    //                ->where('users.id','=',$id)
    //                ->first();
    //     return view('layout.profile',compact('profile'));
    // }

    public function add_profile($id)
    {
        return view('layout.add_profile');
    }

    // public function update_profile(Request $request,$id)
    // {
    //    $file =$request->file('profile');
    //    $filename =uniqid().'_'.$file->getClientOriginalName();
    //    $file->move(public_path().'/uploads/', $filename);

    //    profile::find($id)->update(['profile'=>$filename]);
    //    return redirect('/profile/'.$id)->with('updated','Profile have uploaded!');
    // }
    
    public function bookshow($id){
          $bookshows =DB::table('users')
                     ->join('profile_showbooks','users.id','=','profile_showbooks.user_id')
                     ->join('profiles','profiles.id','=','profile_showbooks.profile_id') 
                     ->select('profile_showbooks.*','profiles.*')
                     ->where('users.id','=',$id)
                     ->get();
              
         return view('layout.bookmarks',compact('bookshows'));

      }

    public function bookmarks($id){

      $user_id =Auth::user()->id;

      $ProfileShowbook =new ProfileShowbook;
      $ProfileShowbook->user_id=$user_id;
      $ProfileShowbook->profile_id=$id;

      $ProfileShowbook->save();

      return redirect(action('ProfileController@profile',$id));

    }

    public function bookdetail($id){
     $profile=DB::table('users')
                   ->join('profiles','users.id','=','profiles.id')
                   ->join('about_users','users.id','=','about_users.id')
                   ->select('users.*','profiles.*','about_users.*')
                   ->where('users.id','=',$id)
                   ->first();
        return view('layout.profile',compact('profile'));
    }


    //Naung Naung
   
    public function profile($id)
    {
        $profile=Profilechange::find($id);
        return view('layout.profile',compact('profile'));
    }

    public function update_profile(Request $request,$id)
    {  
       $id =Auth::user()->id;
       $name =Auth::user()->name;
       $file =$request->file('profile');
       $filename =uniqid().'_'.$file->getClientOriginalName();
       $file->move(public_path().'/uploads/', $filename);
       
       $profilechange =Profilechange::find($id);
       $profilechange->update([
                               'user_id'=>$id,
                               'profile'=>$filename,
                               'name'=>$name
                                 ]);
       return redirect('/profile/'.$id)->with('updated','Profile have uploaded!');
    }
}
