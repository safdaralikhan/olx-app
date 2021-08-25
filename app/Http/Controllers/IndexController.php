<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\post;
use App\Models\chat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\notification;
use App\Models\ad_likes_counter;
use App\Models\favorites_ads;
use App\Models\Business;


class IndexController extends Controller
{
    public function Index()
    {

      $messangers = chat::where('sender_id',session('id'))
      ->orWhere('reciver_id',session('id'))
      ->groupBy('ad_id')
      ->get();

      $messagecount = chat::where('status','unread')
      ->where('reciver_id',session('id'))->count();


      

    
    
        // get the current timey
//    return $current = Carbon::now()->toDateTimeString();

// add 30 days to the current time
//    return $trialExpires = $current->addDays(60);
        $category = Category::with('subcategory')->get();
        $post = post::where('status',1)->orderByDesc('is_featured')->paginate(6);
        $current = Carbon::now()->toDateTimeString();
        // dd($current);

          $feature_expire =  post::where('featured_expiry_date','<',$current)->first();
          if($feature_expire)
          {
             
            $feature_expire->is_featured = null;
            $feature_expire->save();
          }


          $admin_noti = notification::where('user_id',session('id'))->get();
          $admin_noti_count = notification::where('user_id',session('id'))->count();
          
          $SA_notifications_count = notification::all()->count();
          $SA_notifications = notification::all();

        return view('User.index',compact('post','category','admin_noti','admin_noti_count','SA_notifications_count','SA_notifications','messangers','messagecount'));
        
    }

    public function subcat_pro($id)
    {
        $category = Category::with('subcategory')->get();
       $sub_cat = post::where('subcategory_id',$id)->get();
       $messagecount = chat::where('status','unread')
       ->where('reciver_id',session('id'))->count();

       return view('User.index',compact('sub_cat','category','messagecount'));

    }

    public function cat_pro($id)
    {
        $category = Category::with('subcategory')->get();
       $cat = post::where('category_id',$id)->get();
       $messagecount = chat::where('status','unread')
       ->where('reciver_id',session('id'))->count();



       return view('User.index',compact('cat','category','messagecount'));

    }

    public function detail($id)
    {
        $detail = post::where('id',$id)->first();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();
        $category = Category::with('subcategory')->get();
        return view('User.product-details',compact('category','detail','messagecount'));
    }

    public function search_post(Request $req)
    {
        $category = Category::with('subcategory')->get();
      $post_search = post::where('title','like','%'.$req->input('search_post').'%')
      ->orWhere('type','like','%'.$req->input('search_post').'%')
      ->orWhere('condition','like','%'.$req->input('search_post').'%')
      ->orWhere('description','like','%'.$req->input('search_post').'%')
      ->orWhere('price','like','%'.$req->input('search_post').'%')
      ->get();
      $messagecount = chat::where('status','unread')
      ->where('reciver_id',session('id'))->count();
      return view('User.index',compact('category'),compact('post_search','messagecount'));
    }

    public function search_city(Request $req)
    {
        $category = Category::with('subcategory')->get();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();
        $city_search = post::where('city','like','%'.$req->input('search_city').'%')->get();
      return view('User.index',compact('category'),compact('city_search','messagecount'));
    }

    public function like(Request $request)
    {
        
         $like_counter = new ad_likes_counter;
         $favorites_ads = new favorites_ads;
        
         
          $like_counter->user_id = session('id');
            $like_counter->ad_id = $request->id;
              $like_counter->save();
         

         $favorites_ads->user_id = session('id');
         $favorites_ads->ad_id = $request->id;
         $favorites_ads->save();
         return 1;

         


        // if($path == 'like_favorite/'.$id)
        // {
        //     return redirect('/favorites_ads');
        // }
        // else
        // {
        //     return redirect('/');

        // }
    }

    public function dislike(Request $request)
    {
        
     
        $path = $request->path();
        $ad_likes_counter =  ad_likes_counter::where('ad_id',$request->id);
        $favorites_ads =  favorites_ads::where('ad_id',$request->id);

        $ad_likes_counter->delete();
        $favorites_ads->delete();
        return 2;

        // if($path == 'dislike_favorite/'.$request->id)
        // {
        //     return redirect('/favorites_ads');
        // }
        // else
        // {
        //     return redirect('/');

        // }
        


    }

    public function featured_filter()
    {
        $featured_filter = post::where('is_featured','Featured')->get();
        $category = Category::with('subcategory')->get();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();

        return view('User.index',compact('featured_filter','category','messagecount'));
    }

    public function lowprice_filter()
    {
        $lowprice_filter = post::orderBy('price', 'ASC')->get();
        $category = Category::with('subcategory')->get();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();

        return view('User.index',compact('lowprice_filter','category','messagecount'));
    }

    public function highprice_filter()
    {
        $highprice_filter = post::orderBy('price', 'DESC')->get();
        $category = Category::with('subcategory')->get();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();

        return view('User.index',compact('highprice_filter','category','messagecount'));
    }

        public function allads_filter()
    {
        $allads_filter = post::get();
        $category = Category::with('subcategory')->get();
        $messagecount = chat::where('status','unread')
        ->where('reciver_id',session('id'))->count();

        return view('User.index',compact('allads_filter','category','messagecount'));
    }

    public function business()
    {
      $category = Category::with('subcategory')->get();
      return view('User.olxbuisness',compact('category'));
    }

    public function business_process(Request $request)
    {
      $Business = new Business;
      $Business->name = $request->name;
      $Business->number = $request->number;
      $Business->category = $request->category;
      $Business->more_ads = $request->more_ads;
      $Business->featured_ads = $request->featured_ads;
      $Business->other_business_upgrated = $request->Other_Business_Upgrated;
      $Business->advertising = $request->advertising;
      $Business->save();
      return view('User.businesssuccess');

     
    }



  
    
}
