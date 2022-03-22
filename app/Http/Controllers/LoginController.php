<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }

    public function storelogin(Request $request)
    {
        $userpost = $request->except('_token');
        if(Auth::attempt($userpost)){
            return redirect()->route('dashboard');
        }
        else
        return redirect()->back()->with('msg','Information incorrect');
    }

    public function Logout()
    {
        Auth::Logout();
        return redirect()->route('admin.login')->with('msg','logout successfully');
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect()->route('dashboard');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'role_id' => 1,
                    'facebook_id' => $user->id,
                    'password' => bcrypt('123')
                ]);

                Auth::login($createUser);
                return redirect()->route('dashboard');
            }

        } catch (\Throwable $exception) {
            dd($exception->getMessage());
        }
    }

}
