@extends('layouts.admin')

@section('content')

<div class="p-5">
    <h1 class="text-center pb-5">Appointments</h1>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Patient Name</th>
            <th scope="col">Doctor/Speciality</th>
            <th scope="col">Date</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Approve Appointment</th>
            <th scope="col">Reject Appointment</th>
          </tr>

        </thead>
        <tbody>
          @foreach ($appointments as $appointment )
          <tr>
              <td>{{ $appointment->full_name }}</td>
              <td>{{ $appointment->doctor_speciality }}</td>
              <td>{{ $appointment->appointment_date }}</td>
              <td>{{ $appointment->reason }}</td>
              <td>{{ $appointment->status }}</td>

              @if($appointment->status != "Pending")

                <td><a type="submit" class="btn btn-success disabled">Approve</a></td>
                <td><a type="submit" class="btn btn-danger disabled">Reject</a></td>

              @else
                <td><a type="submit" class="btn btn-success" href="{{ url('admin_appointments_approve',$appointment->id) }}">Approve</a></td>
                <td><a type="submit" class="btn btn-danger" href="{{ url('admin_appointments_reject',$appointment->id) }}">Reject</a></td>
              @endif

            </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection



