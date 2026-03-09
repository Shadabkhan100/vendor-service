@extends('layout.main')

@section('title', 'Home Page')

@section('content')
  <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Profile</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Profile</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
 @if(auth()->user()->userType === 'admin')
    <h1>    Admin Profile Page</h1>
    @elseif(auth()->user()->userType === 'vendor')
    <h1>    Vendor Profile Page</h1>
    @else
    <h1>    User Profile Page</h1>  
    @endif
  @endsection