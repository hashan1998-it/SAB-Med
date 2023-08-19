<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>User Appoinment Creation</title>
</head>
<body>
    <div class="page-section background-image vh-100">
        @include('sweetalert::alert')
        <div class="container h-100 d-flex align-items-center flex-column justify-content-center">
              <div class="w-75 h-75 p-4 form-background rounded">
                  <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
                  <form class="main-form" method="POST" action="{{ url('appointment_store') }}">
                    @csrf
                    <div class="row mt-5">
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" class="form-control border-primary" placeholder="Full name" name="full_name">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text" class="form-control border-primary" placeholder="Index Number" name="index">
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="text" placeholder="Appoinment Date" class="form-control border-primary" name="appointment_date" onfocus="(this.type='date')" >
                      </div>
                      <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor_speciality" id="doctor_speciality" class="custom-select border-primary">
                            <option value="">Select Doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="Name = {{ $doctor->doctor_name }}/ Speciality = {{ $doctor->speciality }}">{{ $doctor->doctor_name }} - {{ $doctor->speciality }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <input type="text" class="form-control border-primary" placeholder="Email Address" name="email">
                      </div>
                      <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                        <textarea name="reason" id="reason" class="form-control border-primary" rows="6" placeholder="Reason for appoinment"></textarea>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center"><button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button></div>
                  </form>
              </div>

        </div>
      </div>



      <style>
        .background-image{
           background-image: url('assets/img/sabra1.jpg');
        }

        .form-background{
            background: #ffffff;
        }
      </style>


</body>
</html>
