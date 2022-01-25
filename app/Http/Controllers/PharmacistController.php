<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Pharmacist;

use Illuminate\Http\Request;

class PharmacistController extends Controller
{
    public function phar_login()
    {
        return view("auth.phar_login");
    }

    public function loginPharmacist(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $pharmacist = Pharmacist::where('email', '=', $request->email)->first();
        if ($pharmacist) {
            if (Hash::check($request->password, $pharmacist->password)) {
                $request->session()->put('loginId', $pharmacist->id);
                return redirect('phar_products');
            } else {
                return back()->with('fail', 'Password not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function logout() 
    {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('home');
        }
    }





}
