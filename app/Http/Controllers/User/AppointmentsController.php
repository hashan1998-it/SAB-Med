<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Doctor;
use RealRashid\SweetAlert\Facades\Alert;



class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id()){

            $userId = Auth::user()->id;
            $userAppointments = appointment::where('user_id', $userId)->get();

            return view('user.appointments.index',compact('userAppointments'));

        }


        else
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::id()){
            $doctors = doctor::all();
            return view('user.appointment',compact('doctors'));
        }
        else{
            return redirect('/login')->with('status','You need to login first');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new appointment;
        $data->full_name = $request->full_name;
        $data->index = $request->index;
        $data->appointment_date = $request->appointment_date;
        $data->doctor_speciality = $request->doctor_speciality;
        $data->email = $request->email;
        $data->reason = $request->reason;
        $data->status = 'Pending';
        $data->user_id = Auth::user()->id;
        $data->save();
        if($data->save()){
            return redirect('/home')->with('appointment_success','Appointment created successfully');
        }
        else{
            Alert::error('Error', 'Appointment not created');
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();

    }
}
