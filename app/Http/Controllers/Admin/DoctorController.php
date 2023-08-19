<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $view)
    {
        $doctors = doctor::all();

        if($view == 'show')
        return view('admin.doctors.index',compact('doctors'));

        elseif($view == 'delete')
        return view('admin.doctors.delete',compact('doctors'));

        elseif($view == 'modify')
        return view('admin.doctors.modify',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctors.add_doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->doctor_name = $request->doctor_name;
        $doctor->phone_number = $request->phone_number;
        $doctor->speciality = $request->speciality;
        $doctor->medical_licence_number = $request->medical_licence_number;

        $profile_image = $request->file('profile_image');
        $profile_image_name = time().".".$profile_image->getClientOriginalExtension();
        $request->file('profile_image')->move('images/doctor_profile_images',$profile_image_name);
        $doctor->profile_image = $profile_image_name;

        $doctor->save();
        return redirect('/doctors_create')->with('status','Doctor Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = doctor::find($id);
        return view('admin.doctors.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = doctor::find($id);
        $doctor->doctor_name = $request->doctor_name;
        $doctor->phone_number = $request->phone_number;
        $doctor->speciality = $request->speciality;
        $doctor->medical_licence_number = $request->medical_licence_number;

        $profile_image = $request->file('profile_image');

        if($profile_image)
        {

        $profile_image_name = time().".".$profile_image->getClientOriginalExtension();
        $request->file('profile_image')->move('images/doctor_profile_images',$profile_image_name);
        $doctor->profile_image = $profile_image_name;
        
        }

        $doctor->save();
        return redirect('/doctors/modify')->with('status','Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }
}
