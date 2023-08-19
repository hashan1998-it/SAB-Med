@extends('user.layouts.home_layout')


@section('content')
<div class="page-hero bg-image overlay-dark vh-100" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Medical Center of Sabaragamuwa University of Sri Lanka</span>
            <h1 class="display-4">SAB-Med</h1>
            <a href="{{ url('appointment_create') }}" class="btn btn-success">Let's Consult</a>
        </div>
    </div>
</div>
@endsection
