@extends('layout.main')

@section('title', 'Home Page')

@section('content')
  <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                  
                        @if(auth()->user()->userType === 'admin')
                           <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">  
                            Admin Profile    
 </h4>
                        @elseif(auth()->user()->userType === 'vendor')
                         <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">  
                            Vendor Profile      
    </h4>
                        @else
                         <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">  
                                User Profile
    </h4>
                        @endif
                      
                   
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
     @include('auth.vendor.profile')
    @else
    <h1>    User Profile Page</h1>  
    @endif
  @endsection