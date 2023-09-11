<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class CustomAuthController extends Controller
{
    //
    public function login()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->to(route('category.index'));
        } else if (Auth::guard('web')->check()) {
            return redirect()->to(route('home'));
        }
        return view('auth.login');
    }

    public function registeration()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->to(route('category.index'));
        } else if (Auth::guard('web')->check()) {
            return redirect()->to(route('home'));
        }
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:10|min:3'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if ($request) {
            return back()->with('success', 'You have registered succesfully');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:10|min:3'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        $admin = Admin::where('email', '=', $request->email)->first();

        if ($admin) {
            if ($request->password == $admin->password) {
                Auth::guard('admin')->login($admin);
                return redirect()->to(route('category.index'));
            } else {
                return back()->with('fail', 'This password is not matches');
            }
        } else if ($user) {
            if (Hash::check($request->password , $user->password)) {
                Auth::guard('web')->login($user);
                return redirect()->to(route('home'));
            } else {
                return back()->with('fail', 'This password is not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function getProfile()
    {
        $user = Auth::guard('web')->user();
        return view('user.profile', compact('user'));
    }

    public function gethomee()
    {
        $categories = Category::all();
        return view('user.home', compact('categories'));
    }

    public function logout($guard) {
        Auth::guard($guard)->logout();
        return redirect()->to(route('login'));
    }
}
