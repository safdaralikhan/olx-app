<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\Invoicemodel;
use App\Models\Assignment;   
use DB;
use Mail;
use App\Models\User;
use App\Models\DownloadLink;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {

        return view('User.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
 
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        
      $stripe=  Stripe\Charge::create ([
                "amount" => 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
// return $stripe->amount;
//DileepKumar04
//4242424242424242
  
  //       // $addassignment ->expirydate = request('expirydate');
return redirect()->back()->with('download','kindly check your email and download the assignment');
     
     
    


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