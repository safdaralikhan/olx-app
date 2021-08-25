<?php

namespace App\Http\Controllers\API;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\post;
use Illuminate\Http\Request;
use Carbon;
use Image;

class PostController extends \App\Http\Controllers\Controller
{
    public function add_post()
    {
        
        $category = Category::with('subcategory')->get();

        return response($category,200);

        // return view('User.post')->with('categories',$category);
        
    }
    public function add_item($id)
    {
        $sub_cat = Subcategory::where('id',$id)
        ->first();

        return response ($sub_cat, 200);

        if($sub_cat->subcat_name == 'Tablets')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.tabletsform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Mobile Accessories')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.mubaccessoriesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Mobile Phones')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.mobile_phonesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Car' || $sub_cat->subcat_name == 'Car on Installments' || $sub_cat->subcat_name == 'Buses, Vans & Trucks' || $sub_cat->subcat_name == 'Rickshaw & Chingchi' || $sub_cat->subcat_name == 'Tractors & Trailers')
        { 
            
             $data = $sub_cat;
            
            return view('User.Post_Forms.carsform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Cars Accessories' || $sub_cat->subcat_name == 'Other Vehicles' || $sub_cat->subcat_name == 'Boats')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.car_acccesseriesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Apartments & Flats' || $sub_cat->subcat_name == 'Portions & Floors' || $sub_cat->subcat_name == 'Roommates & Paying Guests' || $sub_cat->subcat_name == 'Rooms' || $sub_cat->subcat_name ==  'Vacation Rentals - Guests Houses')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.apartmentsflatform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Land & Plots')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.landplotform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Houses')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.housesform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Games & Entertainmint' || $sub_cat->subcat_name == 'Ac & Cooler' || $sub_cat->subcat_name == 'Fridge & Freezer' || $sub_cat->subcat_name == 'Washing Machine & Dryers'
        || $sub_cat->subcat_name == 'Kids Furnitures' || $sub_cat->subcat_name == 'Toys' || $sub_cat->subcat_name == 'Parms & Walkers' || $sub_cat->subcat_name == 'Swing & Slides' || $sub_cat->subcat_name == 'Kids Bikes'
        || $sub_cat->subcat_name == 'Kids Accessories' || $sub_cat->subcat_name == 'Musical Instruments' || $sub_cat->subcat_name == 'Sport Equipments' || $sub_cat->subcat_name == 'Gym & Fitness' || $sub_cat->subcat_name == 'Other Fashion'
        || $sub_cat->subcat_name == 'Couture' || $sub_cat->subcat_name == 'Lawn & Prets' || $sub_cat->subcat_name == 'Wedding' || $sub_cat->subcat_name == 'Skin & Hair' || $sub_cat->subcat_name == 'Makup' || $sub_cat->subcat_name == 'Jewellery'
        || $sub_cat->subcat_name == 'Sofa & Chairs' || $sub_cat->subcat_name == 'Beds & Wardrobes' || $sub_cat->subcat_name == 'Home Decorations' || $sub_cat->subcat_name == 'Tables & Dinings' || $sub_cat->subcat_name == 'Garden & Outdoor' || $sub_cat->subcat_name == 'Painting & Mirrors'
        || $sub_cat->subcat_name == 'Rugs & Carpets' || $sub_cat->subcat_name == 'Curtains & Blinds' || $sub_cat->subcat_name == 'Office Furniture' || $sub_cat->subcat_name == 'Other Households Items'
        )
        {
            $data = $sub_cat;
            return view('User.Post_Forms.jewelleryform')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Online' || $sub_cat->subcat_name == 'Markiting' || $sub_cat->subcat_name == 'Advertising & PR' || $sub_cat->subcat_name == 'Education'
        || $sub_cat->subcat_name == 'Customer Services' || $sub_cat->subcat_name == 'Sales' || $sub_cat->subcat_name == 'IT & Networking' || $sub_cat->subcat_name == 'Hotel & Tourism' || $sub_cat->subcat_name == 'Clerical & Adminestration'
        || $sub_cat->subcat_name == 'Human Resources' || $sub_cat->subcat_name == 'Accounting & Finance' || $sub_cat->subcat_name == 'Manufacturing' || $sub_cat->subcat_name == 'Medical' || $sub_cat->subcat_name == 'Domestic Staff'
        || $sub_cat->subcat_name == 'Part - Time' || $sub_cat->subcat_name == 'Other Jobs')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.jobs')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Travel & Visa' || $sub_cat->subcat_name == 'Car Rental' || $sub_cat->subcat_name == 'Drivers & Texi' || $sub_cat->subcat_name == 'Web Development'
        || $sub_cat->subcat_name == 'Other Services' || $sub_cat->subcat_name == 'Electronics & Computer Repair' || $sub_cat->subcat_name == 'Event Services' || $sub_cat->subcat_name == 'Health & Beauty' || $sub_cat->subcat_name == 'Maids & Domestic Help'
        || $sub_cat->subcat_name == 'Movers & Packers' || $sub_cat->subcat_name == 'Home & Office Repair')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.services')->with('data',$data);
        }
        elseif($sub_cat->subcat_name == 'Education & Classess')
        {
            $data = $sub_cat;
            return view('User.Post_Forms.education&classesform')->with('data',$data);
        }else
        {
            $data = $sub_cat;
            return view('User.Post_Forms.services')->with('data',$data);
        }
  
    }

    public function post(Request $request)
    {
        

        $post = new post();
        // dd($request->all());
        // $post->create($request->except('_token'));
        $post->title = $request->title;
        $post->user_id = session('id');
        $post->category_id = $request->cat_id;
        $post->subcategory_id = $request->subcat_id;
        $post->Postman_Name = $request->postman_name;
        $post->type = $request->type;
        $post->make = $request->make;
        $post->condition = $request->condition;
        $post->description = $request->description;
        $post->price = $request->price;


        
        if($request->hasfile('main_img') )
        {
        $main_img = $request->file('main_img');
        $extension = $main_img->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $main_img->move('User/images/post_images',$filename);
        $post->main_img=$filename;
        }
        if($request->hasfile('img2') )
        {
        $img2 = $request->file('img2');
        $extension = $img2->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img2->move('User/images/post_images',$filename);
        $post->img2=$filename;
        }
        if($request->hasfile('img3') )
        {
        $img3 = $request->file('img3');
        $extension = $img3->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img3->move('User/images/post_images',$filename);
        $post->img3=$filename;
        }
        if($request->hasfile('img4') )
        {
        $img4 = $request->file('img4');
        $extension = $img4->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img4->move('User/images/post_images',$filename);
        $post->img4=$filename;
        }
        if($request->hasfile('img5') )
        {
        $img5 = $request->file('img5');
        $extension = $img5->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img5->move('User/images/post_images',$filename);
        $post->img5=$filename;
        }
        if($request->hasfile('img6') )
        {
        $img6 = $request->file('img6');
        $extension = $img6->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img6->move('User/images/post_images',$filename);
        $post->img6=$filename;
        }
        if($request->hasfile('img7') )
        {
        $img7 = $request->file('img7');
        $extension = $img7->getClientOriginalExtension();
        $filename = uniqid(). ".".$extension;
        $img7->move('User/images/post_images',$filename);
        $post->img7=$filename;
        }
        if($request->hasfile('img8') )
        {
        $img8 = $request->file('img8');
        $extension = $img8->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img8->move('User/images/post_images',$filename);
        $post->img8=$filename;
        }
        if($request->hasfile('img9') )
        {
        $img9 = $request->file('img9');
        $extension = $img9->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img9->move('User/images/post_images',$filename);
        $post->img9=$filename;
        }
        if($request->hasfile('img10') )
        {
        $img10 = $request->file('img10');
        $extension = $img10->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img10->move('User/images/post_images',$filename);
        $post->img10=$filename;
        }
        if($request->hasfile('img11') )
        {
        $img11 = $request->file('img11');
        $extension = $img11->getClientOriginalName();
        $filename = uniqid().$extension;
        $img11->move('User/images/post_images',$filename);
        $post->img11=$filename;
        }
        if($request->hasfile('img12') )
        {
        $img12 = $request->file('img12');
        $extension = $img12->getClientOriginalName();
        $filename = uniqid(). ".".$extension;
        $img12->move('User/images/post_images',$filename);
        $post->img12=$filename;
        }


        $post->state = $request->state;
        $post->city = $request->city;
        $post->IsPhone = $request->is_mobile;
        $post->year = $request->year;
        $post->KmDriven = $request->KmDriven;
        $post->fuel = $request->fuel;
        $post->Registered_In = $request->registered_in;
        $post->transmission = $request->tr;
        $post->registered = $request->transmission;
        $post->down_payment = $request->down_payment;
        $post->monthly_installment = $request->monthly_installment;
        $post->installment_plan = $request->installment_plan;
        $post->area_unit = $request->area_unit;
        $post->area = $request->area;
        $post->furnished = $request->is_furnished;
        $post->bedrooms = $request->bedrooms;
        $post->bathrooms = $request->bathrooms;
        $post->floor_level = $request->floor_level;
        $post->type_of_ad = $request->type_of_ad;
        $post->sallery_period = $request->sallery_period;
        $post->sallery_from = $request->sallery_from;
        $post->sallery_to = $request->sallery_to;
        $post->position_type = $request->position_type;
        $post->save();
        session()->flash('ad_added','Your Ad is posted Successfully!');
        return redirect('/');
        // subcat_id
        // cat_id
        // title
        // description
        // type
        // condition
        // area_unit
        // area
        // price
        // main_img
        // img2
        // img3
        // img4
        // img5
        // img6
        // img7
        // img8
        // img9
        // img10
        // img11
        // img12
        // state
        // city
        // postman_name
        // is_mobile
        // year
        // KmDriven
        // make
        // fuel
        // registered_in
        // make


    }

}
