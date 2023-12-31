<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ( $doctors as $doctor )
        <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img height="250px" src="images/doctor_profile_images/{{ $doctor->profile_image }}" alt="">
              </div>
              <div class="body">
                <p class="text-xl mb-0">{{ $doctor->doctor_name }}</p>
                <span class="text-sm text-grey">{{ $doctor->speciality }}</span>
              </div>
            </div>
          </div>
        @endforeach()

      </div>
    </div>
  </div>
