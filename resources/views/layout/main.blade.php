<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SAFE SERVICES - Stock Market Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lib/animate/animate.min.css') }}"/>
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('layout.header')

    <main>
        @yield('content')
    </main>
<div class="modal fade" id="authModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">

            <h4 id="authModalTitle" class="mb-3"></h4>

            <p id="authModalMessage"></p>

            <button id="authModalBtn" class="btn btn-primary mt-3" data-bs-dismiss="modal">
    OK
</button>

        </div>
    </div>
</div>
@if(session('success') || session('error') || $errors->any())

<script>

document.addEventListener("DOMContentLoaded", function(){
    let title = document.getElementById("authModalTitle");
    let message = document.getElementById("authModalMessage");
    let button = document.getElementById("authModalBtn");
    @if(session('success'))
        title.innerHTML =
        '<i class="fa fa-check-circle text-success"></i> Success';
        message.innerText = "{{ session('success') }}";
        button.className = "btn btn-success mt-3";
    @elseif(session('error'))
        title.innerHTML =
        '<i class="fa fa-times-circle text-danger"></i> Error';
        message.innerText = "{{ session('error') }}";
        button.className = "btn btn-danger mt-3";
    @elseif($errors->any())
        title.innerHTML =
        '<i class="fa fa-exclamation-triangle text-danger"></i> Validation Error';
        message.innerText =
        "@foreach($errors->all() as $error) {{ $error }} \n @endforeach";
        button.className = "btn btn-danger mt-3";
    @endif
    let modal = new bootstrap.Modal(
        document.getElementById("authModal")
    );
    modal.show();
});

</script>

@endif
    @include('layout.footer')

<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

</html>