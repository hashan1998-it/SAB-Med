<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->user_type == 'admin')
            {
                $doctors = doctor::all();
                Alert::toast('Login to admin successful', 'success')->background('#00D9A5')->autoClose(4000);
                return view('admin.dashboard',compact('doctors'));
            }

            else if(Auth::user()->user_type == 'user')
            {
                $doctors = doctor::all();

                if(session('appointment_success'))
                Alert::success('Appointment created successfully!')->autoClose(4000);
               
                return view('user.home',compact('doctors'));
            }

        }

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        $doctors = doctor::all();
        return view('user.home',compact('doctors'));
    }
}
