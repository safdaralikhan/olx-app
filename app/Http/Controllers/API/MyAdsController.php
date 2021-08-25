<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\chat;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class MyAdsController extends Controller
{
    public function index($id)
    {
      $MyAds =  post::where('user_id',$id)->get();
      $messagecount = chat::where('status','unread')->count();
      $category = Category::with('subcategory')->get();
      return view('User.MyAds',compact('MyAds','messagecount','category'));


    }

    public function status_update($id)
    {
  //return $status;
         
 
  
  $update_status = post::find($id);

  if($update_status->status == 1)
  {
    $update_status->status = 0;
  }
  else
  {
    $update_status->status = 1;
  }

        
         $update_status->save();
//         $MyAds =  post::where('user_id',$id)->get();
return back();
         //return view('User.MyAds',compact('MyAds'));
    
         //  return view('User.MyAds');

    }

    public function edit_ad($id)
    {
        $edit_ad = post::find($id);
        

  $subcat_id = $edit_ad->subcategory_id;

      $sub_cat = Db::table('sub_categories')
        ->where('id',$subcat_id)->first();

        

        if($sub_cat->subcat_name == 'Tablets')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.tabletsform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Mobile Accessories')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.mubaccessoriesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Mobile Phones')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.mobile_phonesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Car' || $sub_cat->subcat_name == 'Car on Installments' || $sub_cat->subcat_name == 'Buses, Vans & Trucks' || $sub_cat->subcat_name == 'Rickshaw & Chingchi' || $sub_cat->subcat_name == 'Tractors & Trailers')
        { 
            
             $data = $edit_ad;
            
            return view('User.PostUpdate_Forms.carsform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Cars Accessories' || $sub_cat->subcat_name == 'Other Vehicles' || $sub_cat->subcat_name == 'Boats')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.car_acccesseriesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Apartments & Flats' || $sub_cat->subcat_name == 'Portions & Floors' || $sub_cat->subcat_name == 'Roommates & Paying Guests' || $sub_cat->subcat_name == 'Rooms' || $sub_cat->subcat_name ==  'Vacation Rentals - Guests Houses')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.apartmentsflatform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Land & Plots')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.landplotform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Houses')
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.housesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Games & Entertainmint' || $sub_cat->subcat_name == 'Ac & Cooler' || $sub_cat->subcat_name == 'Fridge & Freezer' || $sub_cat->subcat_name == 'Washing Machine & Dryers'
        || $sub_cat->subcat_name == 'Kids Furnitures' || $sub_cat->subcat_name == 'Toys' || $sub_cat->subcat_name == 'Parms & Walkers' || $sub_cat->subcat_name == 'Swing & Slides' || $sub_cat->subcat_name == 'Kids Bikes'
        || $sub_cat->subcat_name == 'Kids Accessories' || $sub_cat->subcat_name == 'Musical Instruments' || $sub_cat->subcat_name == 'Sport Equipments' || $sub_cat->subcat_name == 'Gym & Fitness' || $sub_cat->subcat_name == 'Other Fashion'
        || $sub_cat->subcat_name == 'Couture' || $sub_cat->subcat_name == 'Lawn & Prets' || $sub_cat->subcat_name == 'Wedding' || $sub_cat->subcat_name == 'Skin & Hair' || $sub_cat->subcat_name == 'Makup' || $sub_cat->subcat_name == 'Jewellery'
        || $sub_cat->subcat_name == 'Sofa & Chairs' || $sub_cat->subcat_name == 'Beds & Wardrobes' || $sub_cat->subcat_name == 'Home Decorations' || $sub_cat->subcat_name == 'Tables & Dinings' || $sub_cat->subcat_name == 'Garden & Outdoor' || $sub_cat->subcat_name == 'Painting & Mirrors'
        || $sub_cat->subcat_name == 'Rugs & Carpets' || $sub_cat->subcat_name == 'Curtains & Blinds' || $sub_cat->subcat_name == 'Office Furniture' || $sub_cat->subcat_name == 'Other Households Items'
        )
        {
            $data = $edit_ad;
            return view('User.PostUpdate_Forms.jewelleryform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Online' || $sub_cat->subcat_name == 'Markiting' || $sub_cat->subcat_name == 'Advertising & PR' || $sub_cat->subcat_name == 'Education'
        || $sub_cat->subcat_name == 'Customer Services' || $sub_cat->subcat_name == 'Sales' || $sub_cat->subcat_name == 'IT & Networking' || $sub_cat->subcat_name == 'Hotel & Tourism' || $sub_cat->subcat_name == 'Clerical & Adminestration'
        || $sub_cat->subcat_name == 'Human Resources' || $sub_cat->subcat_name == 'Accounting & Finance' || $sub_cat->subcat_name == 'Manufacturing' || $sub_cat->subcat_name == 'Medical' || $sub_cat->subcat_name == 'Domestic Staff'
        || $sub_cat->subcat_name == 'Part - Time' || $sub_cat->subcat_name == 'Other Jobs')
        {
            $data = $sub_cat;
            return view('User.PostUpdate_Forms.jobs')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Travel & Visa' || $sub_cat->subcat_name == 'Car Rental' || $sub_cat->subcat_name == 'Drivers & Texi' || $sub_cat->subcat_name == 'Web Development'
        || $sub_cat->subcat_name == 'Other Services' || $sub_cat->subcat_name == 'Electronics & Computer Repair' || $sub_cat->subcat_name == 'Event Services' || $sub_cat->subcat_name == 'Health & Beauty' || $sub_cat->subcat_name == 'Maids & Domestic Help'
        || $sub_cat->subcat_name == 'Movers & Packers' || $sub_cat->subcat_name == 'Home & Office Repair')
        {
            $data = $sub_cat;
            return view('User.PostUpdate.services')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Education & Classess')
        {
            $data = $sub_cat;
            return view('User.PostUpdate.education&classesform')->with('data',$data);
        }

        

    }

    public function update_ad(Request $request, $id)
    {


      $update = post::find($id);
        
        $update->title = $request->title;
        $update->Postman_Name = $request->postman_name;
        $update->type = $request->type;
        $update->condition = $request->condition;
        $update->description = $request->description;
        $update->price = $request->price;
        $update->state = $request->state;
        $update->city = $request->city;
        $update->make = $request->make;
        $update->IsPhone = $request->IsPhone;
        $update->year = $request->year;
        $update->KmDriven = $request->KmDriven;
        $update->fuel = $request->fuel;


            if($request->hasfile('main_img') )
            {
            $main_img = $request->file('main_img');
            $extension = $main_img->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $main_img->move('User/images/post_images',$filename);
            $update->main_img=$filename;
            }
            if($request->hasfile('img2') )
            {
            $img2 = $request->file('img2');
            $extension = $img2->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img2->move('User/images/post_images',$filename);
            $update->img2=$filename;
            }
            if($request->hasfile('img3') )
            {
            $img3 = $request->file('img3');
            $extension = $img3->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img3->move('User/images/post_images',$filename);
            $update->img3=$filename;
            }
            if($request->hasfile('img4') )
            {
            $img4 = $request->file('img4');
            $extension = $img4->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img4->move('User/images/post_images',$filename);
            $update->img4=$filename;
            }
            if($request->hasfile('img5') )
            {
            $img5 = $request->file('img5');
            $extension = $img5->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img5->move('User/images/post_images',$filename);
            $update->img5=$filename;
            }
            if($request->hasfile('img6') )
            {
            $img6 = $request->file('img6');
            $extension = $img6->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img6->move('User/images/post_images',$filename);
            $update->img6=$filename;
            }
            if($request->hasfile('img7') )
            {
            $img7 = $request->file('img7');
            $extension = $img7->getClientOriginalExtension();
            $filename = uniqid(). ".".$extension;
            $img7->move('User/images/post_images',$filename);
            $update->img7=$filename;
            }
            if($request->hasfile('img8') )
            {
            $img8 = $request->file('img8');
            $extension = $img8->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img8->move('User/images/post_images',$filename);
            $update->img8=$filename;
            }
            if($request->hasfile('img9') )
            {
            $img9 = $request->file('img9');
            $extension = $img9->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img9->move('User/images/post_images',$filename);
            $update->img9=$filename;
            }
            if($request->hasfile('img10') )
            {
            $img10 = $request->file('img10');
            $extension = $img10->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img10->move('User/images/post_images',$filename);
            $update->img10=$filename;
            }
            if($request->hasfile('img11') )
            {
            $img11 = $request->file('img11');
            $extension = $img11->getClientOriginalName();
            $filename = uniqid().$extension;
            $img11->move('User/images/post_images',$filename);
            $update->img11=$filename;
            }
            if($request->hasfile('img12') )
            {
            $img12 = $request->file('img12');
            $extension = $img12->getClientOriginalName();
            $filename = uniqid(). ".".$extension;
            $img12->move('User/images/post_images',$filename);
            $update->img12=$filename;
            }

           


            




        $update->Registered_In = $request->registered_in;
        $update->transmission = $request->transmission;
        $update->registered = $request->registered;
        $update->down_payment = $request->down_payment;
        $update->monthly_installment = $request->monthly_installment;
        $update->installment_plan = $request->installment_plan;
        $update->area_unit = $request->area_unit;
        $update->area = $request->area;
        $update->furnished = $request->is_furnished;
        $update->bedrooms = $request->bedrooms;
        $update->bathrooms = $request->bathrooms;
        $update->floor_level = $request->floor_level;
        $update->type_of_ad = $request->type_of_ad;
        $update->sallery_period = $request->sallery_period;
        $update->sallery_from = $request->sallery_from;
        $update->sallery_to = $request->sallery_to;
        $update->position_type = $request->position_type;
        $update->save();
        

        return redirect('my-ads/'.session('id'));

        
    }

    public function delete_ad($id)
    {

    
      $delete_ad =  post::find($id);
      return $delete_ad;

      $delete_ad->delete();
      $image_path = "the name of your image path here/".$request->Image; 

 if (file_exists($image_path)) {

       @unlink($image_path);

   }

      return redirect('my-ads/'.session('id'));


    }

    public function sell_fast($id)
    {
        $sell_fast = post::find($id);
         $real_price = $sell_fast->price;

      $fifteenDaysPackage =  $real_price * (10 / 100);
      $thirtyDaysPackage =  $real_price * (18 / 100);

      return view('User.packages', compact('fifteenDaysPackage'),compact('thirtyDaysPackage'),compact('sell_fast'));
    }
}
