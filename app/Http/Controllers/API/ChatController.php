<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\chat;
use App\Models\User;
use Illuminate\Http\Request;
use View;
use DB;

class ChatController extends Controller
{

    public function load($id)
    {

       
        $id = $id;
        $post = post::where('id',$id)->first();
        return view('chatload',compact('id','post'));
    }
    public function index($id)
    {
        
     $post = post::where('id',$id)->first();
     
     $chat = chat::where('sender_id',session('id'))
     ->where('reciver_id',$post->user_id)
     ->orWhere('sender_id',$post->user_id)
     ->where('reciver_id',session('id'))
     ->get();




   
     
    //  return View::make('chat',compact('post','chat'));
     return view('chat',compact('post','chat'));
    }

    public function send(Request $request)
    {
     
        
        $reciver = User::where('id',$request->user_id)->first();
        $reciver2 = User::where('id',auth()->id())->first();
        $sender = User::where('id',auth()->id())->first();
    //   dd($sender);
        $chatSend = new chat;
        $chatSend->sender_id = session('id');
        $chatSend->reciver_id = $request->user_id;
        $chatSend->sender_name = session('user');
        $chatSend->reciver_name = $reciver->name;
        if ($sender->avatar != null) {
            $chatSend->sender_avatar = $sender->avatar;
        } else {
            $chatSend->sender_image = $sender->user_img;
        }
        // dd($reciver->avatar);
        if ($reciver2->avatar != null) 
        {
            $chatSend->reciver_avatar = $reciver2->avatar;
        } else {
            $chatSend->reciver_image = $reciver2->user_img;
            // dd($chatSend->reciver_avatar);
        }
        // dd($chatSend->reciver_image);
        $chatSend->ad_id = $request->ad_id;
        $chatSend->message = $request->message;
        $chatSend->save();

        

        // $chat = chat::where('sender_id',session('id'))
        // ->where('reciver_id',$request->user_id)
        // ->orWhere('sender_id',$request->user_id)
        // ->where('reciver_id',session('id'))
        // ->get();
        // dd($chat);
        // return json_encode(array('data'=>$chat));
        // return $reciver;

    //    $post = post::where('id',$request->ad_id)->first();


    //    return view('chat')->with('post',$post)->with('chat',$chat);
        

        
    }

    public function messangerload($id)
    {
      
        DB::table('chats')
        ->where('ad_id', $id)
        ->where('reciver_id',session('id'))
        ->update(['status' => 'read']);
        

        $chat = chat::where('ad_id',$id)->first();
        $post = post::where('id',$id)->first();
        
        return view('messangerload',compact('id','chat','post'));
    }

   public function messanger($id)
   {
       
       
    $post = post::where('id',$id)->first();
    
    // $chat = chat::where('sender_id',session('id'))
    // ->where('reciver_id',$post->user_id)
    // ->orWhere('sender_id',$post->user_id)
    // ->where('reciver_id',session('id'))
    // ->get();
    $chat = chat::where('ad_id',$id)->get();
  
    // $read = chat::find($id)->all();
    // $read->status = 'read';
    // $read->save();

    return view('chat',compact('post','chat'));
   }
}
