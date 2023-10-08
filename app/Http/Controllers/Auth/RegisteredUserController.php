<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function register(): View
    {
        return view('auth.register');
    }
    // public function registerpost(Request $request)
    // {
    //     $user = new User();

    //     $user->name =$request->name;
    //     $user->email =$request->email;
    //     $user->password =Hash::make($request->password);

    //     $user->save();

    //     return back()->with('success','Register Successfull');
    // }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerpost(Request $request): RedirectResponse
    {
        $check_email = User::where('email',$request->email)->first();

        if($check_email){
            return back()->with('error','Email already');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $credentials = [
            'email' => $user ->email,
            'password' => $request ->password,
        ];
        Auth::attempt($credentials);
        return redirect() ->route('dashboard')->with('SUCCESS_MASSAGE','You Have Been Registered Successfully.');
    }
} 
