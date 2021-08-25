<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\notification;
use Auth;


class AdminController extends Controller
{
    public function dashboard()
    {
    $count_users = User::all()->count();
    $count_ads = post::all()->count();
    $count_main_category = Category::all()->count();
    $count_sub_category = Subcategory::all()->count();
    $count_featured_ads = post::where('is_featured','Featured')->count();
    $admin_noti = notification::where('user_id',session('id'))->get();
    $admin_noti_count = notification::where('user_id',session('id'))->count();

    // return $admin_noti;
    return view('admin.dashboard',compact('count_users','count_ads','count_main_category','count_sub_category','count_featured_ads','admin_noti','admin_noti_count'));
    }

    public function users()
    {
        $users = User::all();
        $admin_noti = notification::where('user_id',session('id'))->get();
        $admin_noti_count = notification::where('user_id',session('id'))->count();

        return view('admin.users',compact('users','admin_noti','admin_noti_count'));
    }

    public function ads()
    {
        $ads = post::all();
        $admin_noti = notification::where('user_id',session('id'))->get();
        $admin_noti_count = notification::where('user_id',session('id'))->count();

        return view('admin.ads',compact('ads','admin_noti','admin_noti_count'));
    }

    public function categories()
    {
        $categories = Category::all();
        $admin_noti = notification::where('user_id',session('id'))->get();
        $admin_noti_count = notification::where('user_id',session('id'))->count();

        return view('admin.categories',compact('categories','admin_noti','admin_noti_count'));
    }

    public function sub_categories()
    {
        $sub_categories = Subcategory::all();
        $admin_noti = notification::where('user_id',session('id'))->get();
        $admin_noti_count = notification::where('user_id',session('id'))->count();

        return view('admin.sub_categories',compact('sub_categories','admin_noti','admin_noti_count'));
    }

    public function featured()
    {
        $featured = post::where('is_featured','Featured')->get();
        $admin_noti = notification::where('user_id',session('id'))->get();
        $admin_noti_count = notification::where('user_id',session('id'))->count();
          
        return view('admin.featured',compact('featured','admin_noti','admin_noti_count'));
    }

    public function deleteCat($id)
    {
        // dd($id);
       $deleteCat = Category::find($id);
        $notification = new notification;
        Auth::check();
       $User = Auth::User()->name;
       $User_id = Auth::User()->id;

        $new_notification = "$User deleted $deleteCat->cat_name category!";
        $notification->user_id = $User_id;
        $notification->notification = $new_notification;
        $notification->save();
       $deleteCat->delete();


           return 1;
       
    }

    public function update_cat(Request $request, $id)
    {
        Auth::check();
        $User = Auth::User()->name;
        $User_id = Auth::User()->id;
       $update_cat = Category::find($id);

       $notification = new notification;

       $new_notification = "$User Changed $update_cat->cat_name category to $request->cat_name category!";
       $notification->user_id = $User_id;
       $notification->notification = $new_notification;
       $notification->save();

       $update_cat->cat_name = $request->cat_name;

       $update_cat->save();

       return redirect('/categorie');

    }


}
