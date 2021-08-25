<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\chat;
use App\Models\post;
use Hash;
use Session;
use Twilio\Rest\Client;
use Auth;


class AuthController extends Controller
{

    public function registerForm()
    {
      $messagecount = chat::where('status','unread')
      ->where('reciver_id',session('id'))->count();
        return view('registerForm',compact('messagecount'));
    }

    public function register(Request $request)
    {

        $register = new User;
        $register->name = $request->username;
        $register->email = $request->email;
        $register->contact = $request->contact;
        $register->address = $request->address;
        $register->gender = $request->gender;
        if($request->hasfile('user_img') )
        {
        $user_img = $request->file('user_img');
        $image_name = $user_img->getClientOriginalName();
        $filename = uniqid(). ".".$image_name;
        $user_img->move('User/images/profile_images',$filename);
        $register->user_img=$filename;
        }
        $register->password = Hash::make($request->password);
        $register->save();
        
        Session::flash('registerSuccess','You are registered Successfully!');
        return redirect('loginForm');
    }

    public function loginForm()
    {
      $messagecount = chat::where('status','unread')
      ->where('reciver_id',session('id'))->count();
        return view('loginForm',compact('messagecount'));
    }

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user)
        {
          $User = Hash::check($request->password,$user->password);
          if($User)
          {
            if($user->status == 1)
            {
              if($user->role == 2)
              {
            $request->session()->put('user',$user->name);
            $request->session()->put('id',$user->id);
            $request->session()->put('user_imgE',$user->user_img);
            $request->session()->put('role',$user->role);
            $request->session()->flash('successMsg','You are loged in successfully');
            return redirect('/');
              }
              elseif($user->role == 1)
              {
            $request->session()->put('user',$user->name);
            $request->session()->put('id',$user->id);
            $request->session()->put('user_imgE',$user->user_img);
            $request->session()->put('role',$user->role);
            $request->session()->flash('successMsg','You are loged in successfully');
            return redirect('/admin');
              }
              else
              {
                $request->session()->put('user',$user->name);
                $request->session()->put('id',$user->id);
                $request->session()->put('user_imgE',$user->user_img);
                $request->session()->put('role',$user->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/users1');
              }
            }else
            {
              $request->session()->flash('blockMsg','Your account has been Blocked by Super Admin!');
              return redirect('/loginForm');
            }
          }
          else
          {
            $request->session()->flash('failedMsg','Username or Password is incorrect!');
            return redirect('/loginForm');
          }

        }

        $request->session()->flash('failedMsg','Username or Password is incorrect!');
        return redirect('/loginForm');
    }

    protected function create(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($data['phone_number'], "sms");

        return redirect()->route('verify')->with(['phone_number' => $data['phone_number'],'name' => $data['name'],'password' => $data['password']]);
    }

    protected function verify(Request $request)
    {
      
        $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);
        
        
        
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($request->verification_code, array('to' => $request->phone_number));
        if ($verification->valid) {

          $User = new User;
          $User->name = $request->name;
          $User->phone_number = $request->phone_number;
          $User->password = Hash::make($request->password);
          $User->save();

          // User::create([
          //   'name' => $data->name,
          //   'phone_number' => $data->phone_number,
          //   'password' => Hash::make($data->password)
        // ]);
            $user = tap(User::where('phone_number', $request->phone_number))->update(['isVerified' => true]);
            /* Authenticate user */
            Auth::login($user->first());
            $messagecount = chat::where('status','unread')
            ->where('reciver_id',session('id'))->count();
            $category = Category::with('subcategory')->get();
            $post = post::where('status',1)->orderByDesc('is_featured')->paginate(6);
            // return redirect('/',compact('messagecount','category','post'))->with(['message' => 'Phone number verified']);
            return redirect()->route('moblogin');
        }
        return back()->with(['phone_number' => $request->phone_number, 'error' => 'Invalid verification code entered!']);
    }

    public function moblogin()
    {

      return view('auth.moblogin');
    }

    public function mobloginpro(Request $request)
    {
      

      $user = User::where('phone_number',$request->phone_number)->first();
      if($user)
      {
        $User = Hash::check($request->password,$user->password);
        if($User)
        {
          if($user->status == 1)
          {
            if($user->role == 2)
            {
          $request->session()->put('user',$user->name);
          $request->session()->put('id',$user->id);
          $request->session()->put('user_imgE',$user->user_img);
          $request->session()->put('role',$user->role);
          $request->session()->flash('successMsg','You are loged in successfully');
          return redirect('/');
            }
            elseif($user->role == 1)
            {
          $request->session()->put('user',$user->name);
          $request->session()->put('id',$user->id);
          $request->session()->put('user_imgE',$user->user_img);
          $request->session()->put('role',$user->role);
          $request->session()->flash('successMsg','You are loged in successfully');
          return redirect('/admin');
            }
            else
            {
              $request->session()->put('user',$user->name);
              $request->session()->put('id',$user->id);
              $request->session()->put('user_imgE',$user->user_img);
              $request->session()->put('role',$user->role);
              $request->session()->flash('successMsg','You are loged in successfully');
              return redirect('/users1');
            }
          }else
          {
            $request->session()->flash('blockMsg','Your account has been Blocked by Super Admin!');
            return redirect('/loginForm');
          }
        }
        else
        {
          $request->session()->flash('failedMsg','Username or Password is incorrect!');
          return redirect('/loginForm');
        }

      }
      else
      {
        $request->session()->flash('failedMsg','Username or Password is incorrect!');
        return redirect('moblogin');
      }

    }
}
