<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'login'
        ]);
    }

    public function login_proses(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        
        if(Auth::attempt($data)) {
            $user = Auth::User();
            if($user->level === 'admin'){
                return redirect('/dashboard');
            }elseif($user->level === 'user'){
                return redirect('/');
        } 
        else{
            return redirect('/');
        }   
    }
}

    public function logout(){
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect()->route('dashboard')->with('success', 'Kamu Berhasil Logout');
    }

    public function register(){
        return view('login.register');
    }

    public function register_proses(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
            'email' => ['required', 'unique:users'],
        ]);
        
        // Hash password sebelum disimpan ke basis data
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['level'] = 'user';
        User::create($validatedData);
        
        $login = [
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
        ];

        if(Auth::attempt($login)){
            return view('login.index');
        }else{
            return redirect()->route('login.register');
        }
    }
}
