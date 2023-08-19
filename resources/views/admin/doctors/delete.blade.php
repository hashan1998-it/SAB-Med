@extends('layouts.admin')

@section('content')

<div class="p-5">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Doctor Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Speciality</th>
            <th scope="col">Medical Licence Number</th>
            <th scope="col">Profile Image</th>
            <th scope="col">Delete</th>
          </tr>

        </thead>
        <tbody>

          @foreach ($doctors as $doctor )

          <tr>
              <td>{{ $doctor->doctor_name }}</td>
              <td>{{ $doctor->phone_number }}</td>
              <td>{{ $doctor->speciality }}</td>
              <td>{{ $doctor->medical_licence_number }}</td>
              <td><img src="/images/doctor_profile_images/{{ $doctor->profile_image }}" alt="{{ $doctor->profile_image }} " width="150px"></td>
              <td><a type="submit" class="btn btn-danger" href="{{ url('doctors_destroy',$doctor->id) }}">Delete</a></td>
            </tr>

          @endforeach
        </tbody>
      </table>
</div>


@endsection
