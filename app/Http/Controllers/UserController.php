<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function DoLogin(){
    return view('user-login');
   }
   public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    } 

   public function RegistrationForm(){
      return view('register');
   }
   public function CreateUser(Request $request){

      $name = $request->user_name;
      $email = $request->user_name;
      $place = $request->user_name;
      $password = $request->user_name;
      $request->validate([
         'user_name' => 'required|string|max:250',
         'email' => 'required|email|max:250|unique:users',
         'user_place'=>'required',
         'password' => 'required|min:8'
     ]);
    
     User::create([
         'name' => $request->user_name,
         'place' => $request->user_place,
         'email' => $request->email,
         'password' => Hash::make($request->password)
     ]);

     $credentials = $request->only('email', 'password');
     Auth::attempt($credentials);
     $request->session()->regenerate();
     return redirect()->route('dashboard')
     ->withSuccess('You have successfully registered & logged in!');
     
   }
   public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }else{
        
        return redirect()->route('dologin')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
            }
    } 
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('dologin')
            ->withSuccess('You have logged out successfully!');;
    } 
}
