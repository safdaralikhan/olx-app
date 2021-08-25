<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\notification;
use Auth;

class SuperAdminController extends Controller
{
    public function Users()
    {
        $Users = User::all();
        $SA_notifications_count = notification::all()->count();
        $SA_notifications = notification::all();


        return view('Super-Admin.Users',compact('Users','SA_notifications','SA_notifications_count'));
    }

    public function users_role($id)
    {
          $user_role = User::find($id);
          if ($user_role->role == 1) {
            $user_role->role = '2';
            Auth::check();
            $User = Auth::User()->name;
            $notification = new notification;
            $new_notification = "Your status has been changed from Admin to User by Super Admin $User!";
            $notification->notification = $new_notification;
            $notification->user_id = $id;
            $notification->save();
          } else {
            $user_role->role = '1';
            Auth::check();
            $User = Auth::User()->name;
            $notification = new notification;
            $new_notification = "Your status has been changed from User to Admin by Super Admin $User!";
            $notification->notification = $new_notification;
            $notification->user_id = $id;
            $notification->save();
          }

          $user_role->save();

          return redirect('/users1');
          
    }

    public function users_status($id)
    {
          $user_status = User::find($id);
          if ($user_status->status == 1) {
            $user_status->status = '0';
            Auth::check();
            $User = Auth::User()->name;
            $notification = new notification;
            $new_notification = "Your Account has been Blocked by Super Admin $User!";
            $notification->notification = $new_notification;
            $notification->user_id = $id;
            $notification->save();
          } else {
            $user_status->status = '1';
            Auth::check();
            $User = Auth::User()->name;
            $notification = new notification;
            $new_notification = "Congrate! Your Account has been Unblocked by Super Admin $User!";
            $notification->notification = $new_notification;
            $notification->user_id = $id;
            $notification->save();
          }

          $user_status->save();

          return redirect('/users1');
          
    }
    
}
