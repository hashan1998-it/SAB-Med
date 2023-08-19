<div class="main-panel">
    <div class="container mt-5 align-middle w-50">
        <h1 class="pb-5 d-flex justify-center h1">Doctor Information Form</h1>

        @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-between">
            <strong>{{ session('status') }}</strong>
            <button type="button" data-bs-dismiss="alert" style="color:black">X</button>
        </div>
        @endif

        <form action="{{ url('doctors_store') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="doctorName">Doctor Name:</label>
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" required="" style="color:black">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required="" style="color:black">
            </div>
            <div class="form-group">
                <label for="speciality">Speciality:</label>
                <select name="speciality" id="speciality" style="color: black">
                    <option value="">Select Speciality</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dental">Dental</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Orthopedic">Orthopedic</option>
                    <option value="Pathology">Pathology</option>
                    <option value="Urology">Urology</option>
                </select>
            </div>
            <div class="form-group">
                <label for="room_number">Room No:</label>
                <input type="text" class="form-control" id="room_number" name="room_number" required="" style="color:black">
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image:</label>
                <input type="file" class="form-control-file pb-5" id="profile_image" name="profile_image" required="">
            </div>
            <div class="d-flex justify-center"><button type="submit" class="btn btn-success">Submit</button></div>
        </form>
    </div>
</div>
