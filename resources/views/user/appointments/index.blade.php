<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SabMed - Medical Center of Sabaragmuwa Unviverity of Sri Lanka</title>
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
    @include('sweetalert::alert')


  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">SAB</span>-Med</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" style="background-color:#00D9A5;color:white"  href="{{ url('/user_appointments') }}">My appoinmets</a>
                </li>
                <x-app-layout>
                </x-app-layout>
                @else
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



<div class="container table-responsive py-5">
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Doctor/Speciality</th>
          <th scope="col">Date</th>
          <th scope="col">Message</th>
          <th scope="col">Statue</th>
          <th scope="col" align="center">Cancel Appointment</th>


        </tr>
      </thead>
      <tbody>
        @foreach ($userAppointments as $userAppointment )
        <tr>
            <td>{{ $userAppointment->doctor_speciality }}</td>
            <td>{{ $userAppointment->appointment_date }}</td>
            <td>{{ $userAppointment->reason }}</td>
            <td>{{ $userAppointment->status }}</td>
            <td>
                @if($userAppointment->status == "Pending")
                <a type="submit" class="btn" style="background: red;color:white" href="{{ url('user_appointments_destroy',$userAppointment->id) }}">Cancel</a>
                @else
                <a type="submit" class="btn disabled" style="background: red;color:white" href="{{ url('user_appointments_destroy',$userAppointment->id) }}">Cancel</a>
                @endif
                
            </td>


          </tr>
        @endforeach
      </tbody>
    </table>
    </div>





<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>

</body>
</html>


