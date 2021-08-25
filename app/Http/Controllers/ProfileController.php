<?php

namespace App\Http\Controllers;
use App\Models\chat;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Hash;
use Session;
use Redirect;

class ProfileController extends Controller
{
    public function user_profile($id)
    {

        $User = User::where('id',$id)->first();

        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();

        $category = Category::with('subcategory')->get();
      return view('User_profile',compact('messagecount','category','User'));
    }

    public function change_password(Request $request)
    {
          // $oldPassword = Hash::make($request->oldPassword);
          $newPassword =  Hash::make($request->newPassword);

          $checkPass = User::where('id',$request->id)->first();


         

          if(Hash::check($request->oldPassword,$checkPass->password))
          {
            $checkPass->password = $newPassword;
            $checkPass->save();

            return Redirect::back()->with('successmessage', 'Password Changed successfully your new password is '.$request->newPassword);

          }
          else
          {
            return Redirect::back()->with('failedmessage', 'Your new password is not matching with old password');

            
          }


    }

    public function update_profile(Request $request)
    {

     $update_profile = User::where('id',$request->id)->first();
     $update_profile->name = $request->name;
     $update_profile->email = $request->email;
     $update_profile->phone_number = $request->phone;
     $update_profile->address = $request->address;
     $update_profile->gender = $request->gender;
     $update_profile->save();

     return Redirect::back()->with('profilesuccessmessage', 'Your profile updated successfully');
    }
}
