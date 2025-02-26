<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //step-1 admin registration
    public function adminRegistrationPage(){
        return view('pages.registration.admin-reigstration');
    }


    public function adminRegister(Request $request){
        $request->validate([
            'admin_name' => 'required|string|max:255',
            'hotel_name' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'contact_number' => 'required|string|max:15|unique:admins',
            'address' => 'required|string',
        ]);

        Admin::create([
            'admin_name' => $request->admin_name,
            'hotel_name' => $request->hotel_name,
            'owner_name' => $request->owner_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact_number' => $request->contact_number,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Admin Registered Successfully');

    }

}
