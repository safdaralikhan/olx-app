<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;


class LoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('google')->stateless()->user();
        // dd($user);

        // return $user->name;

        $authUser = User::where('email', $user->email)->first();

        if($authUser)
        {
            if($authUser->status == 1)
            {
            if($authUser->role == 2)
            {

            Auth::login($authUser);
            $request->session()->put('user',$authUser->name);
            $request->session()->put('id',$authUser->id);
            $request->session()->put('user_img',$authUser->avatar);
            $request->session()->put('role',$authUser->role);
            $request->session()->flash('successMsg','You are loged in successfully');
            return redirect('/');
            }elseif($authUser->role == 1)
            {
                Auth::login($authUser);
                $request->session()->put('user',$authUser->name);
                $request->session()->put('id',$authUser->id);
                $request->session()->put('user_img',$authUser->avatar);
                $request->session()->put('role',$authUser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/admin');
            }else
            {
                Auth::login($authUser);
                $request->session()->put('user',$authUser->name);
                $request->session()->put('id',$authUser->id);
                $request->session()->put('user_img',$authUser->avatar);
                $request->session()->put('role',$authUser->role);
                $request->session()->flash('successMsg','You are loged in successfully');
                return redirect('/users1');
            }
            }
            else
            {
                $request->session()->flash('blockMsg','Your account has been Blocked by Super Admin!');
                return redirect('/');
            }

        }
        else
        {
            $newUser = new User();
            $newUser->email = $user->email;
            $newUser->name = $user->name;
            $newUser->user_id = $user->id;
            $newUser->password = uniqid();
            $newUser->avatar = $user->avatar;
            $newUser->save();

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
