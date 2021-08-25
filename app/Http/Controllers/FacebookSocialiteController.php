<?php
   
namespace App\Http\Controllers;
   
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;


   
class FacebookSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback(Request $request)
    {
        
     
            $user = Socialite::driver('facebook')->stateless()->user();
            //  dd($user);
            
            $finduser = User::where('email', $user->email)->first();
           
           
            if($finduser){
                if($finduser->role == 2)
                {
                Auth::login($finduser);
                $request->session()->put('user',$finduser->name);
                $request->session()->put('id',$finduser->id);
                $request->session()->put('user_img',$finduser->avatar);
                $request->session()->put('role',$finduser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/');
                }
                elseif($finduser->role == 1)
            {
                Auth::login($finduser);
                $request->session()->put('user',$finduser->name);
                $request->session()->put('id',$finduser->id);
                $request->session()->put('user_img',$finduser->avatar);
                $request->session()->put('role',$finduser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/admin');
            }
            else
            {
                Auth::login($finduser);
                $request->session()->put('user',$finduser->name);
                $request->session()->put('id',$finduser->id);
                $request->session()->put('user_img',$finduser->avatar);
                $request->session()->put('role',$finduser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/users1');
            }
     
      
        }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'user_id' => $user->id,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'social_id'=> $user->id,
                    'social_type'=> 'facebook',
                    'password' => encrypt('my-facebook')
                ]);

                // dd($newUser);
                // dd($user);
     
                Auth::login($newUser);
                $request->session()->put('user',$newUser->name);
                $request->session()->put('id',$newUser->id);
                $request->session()->put('user_img',$newUser->avatar);
                $request->session()->put('role',$newUser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/');
            }
    }
}
