<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\favorites_ads;
use App\Models\chat;
use App\Models\post;
use App\Models\Category;

class FavoritesAdsController extends Controller
{
    public function favorites_ads()
    {

       $favorites_find = favorites_ads::where('user_id',session('id'))->get('ad_id');

       $ads = array();
     foreach($favorites_find as $item)
     {
         $ads[]=$item->ad_id;
     }
         
          $favorites = post::whereIn('id',$ads)->get();
          $messagecount = chat::where('status','unread')->count();
          $category = Category::with('subcategory')->get();


        return view('User.favorites',compact('favorites','messagecount','category'));
    }
}
