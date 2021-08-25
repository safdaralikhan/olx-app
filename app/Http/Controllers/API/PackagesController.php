<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\chat;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function sell_fast($id)
    {
        $sell_fast = post::find($id);
         $real_price = $sell_fast->price;

         $messagecount = chat::where('status','unread')
         ->where('reciver_id',session('id'))->count();

      $fifteenDaysPackage =  $real_price * (10 / 100);
      $thirtyDaysPackage =  $real_price * (18 / 100);

      return view('User.packages', compact('fifteenDaysPackage','sell_fast','thirtyDaysPackage','messagecount'));
    }


}
