<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\chat;
use App\Models\Category;
use Illuminate\Http\Request;
use Stripe;
use Carbon\Carbon;

class PaymentController extends Controller
{


    public function index(Request $request)
    {
            $Ad_Id = $request->itemId;
            $packageName = $request->btn;
            $payment = $request->package;
            $category = Category::with('subcategory')->get();
            $messagecount = chat::where('status','unread')
            ->where('reciver_id',session('id'))->count();

        return view('User.paymentMethod',compact('payment','packageName','messagecount','Ad_Id','category'));
    }

    public function stripe(Request $request)
    {
             $Ad_Id = $request->AdId;
             $payment = $request->payment;
            $packageName = $request->packageName;


        return view('User.stripe',compact('payment','packageName','Ad_Id'));
    }









     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
     
        $packageName = $request->packageName;
        $Ad_Id = $request->Ad_Id;


 
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
      $stripe=  Stripe\Charge::create ([
                "amount" => $request->payment,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);

        $Featured =  post::where('id',$Ad_Id)->first();
        $Featured->package_type = $packageName;
        $Featured->is_featured = 'Featured';
        $current = Carbon::now();
        if ($packageName == 'thirtyDay') {
          $Featured->featured_expiry_date = $current->addDays(29);
        } else {
          $Featured->featured_expiry_date = $current->addDays(15);       
        } 
        $Featured->save();

        return redirect('/');



        


  
// return $stripe->amount;
//DileepKumar04
//4242424242424242
  
  //       // $addassignment ->expirydate = request('expirydate');
     
     
    


//         // return $request;
//       $request->amount;
//         // dd($request->stripeToken);
//       $userid=  session('id');
//         $assignmentid= session('assignmentid');
//          $price=5000;

//         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
// $assignmentdetails = Assignment::findorfail($assignmentid);
  
//  $assignmentdetails->price;

//       $stripe=  Stripe\Charge::create ([
//                 "amount" => $assignmentdetails->price * 100,
//                 "currency" => "usd",
//                 "source" => $request->stripeToken,
//                 "description" => "Test payment from itsolutionstuff.com." 
//         ]);
  
// // return $stripe->amount;
// //DileepKumar04
// //4242424242424242
//   $invoice = new Invoicemodel();
//         $invoice->user_id =$userid;
//         $invoice->assignment_id =$assignmentid;
//         $invoice->payment_id =$stripe->id; //$request->id;
//         $invoice->amount = $assignmentdetails->price ;
//          $invoice->payment_channel ="Stripe";
//   //       // $addassignment ->expirydate = request('expirydate');
     

//          $invoice->save();


//         Session::flash('success', 'Payment successful!');
          
        // return back();
}
}
