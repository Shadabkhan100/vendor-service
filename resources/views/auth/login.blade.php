@extends('layout.main')

@section('title', 'Home Page')

@section('content')
  <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Login</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Login</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->

 <div class="auth-container">

  <div class="auth-box-left">
      <div class="auth-content">
          <h2>Hello!</h2>

          <button class="auth-btn-signup" onclick="showSignup()">Sign up</button>
          <button class="auth-btn-login" onclick="showLogin()">Login</button>
      </div>
  </div>

  <div class="auth-box-right">

      <div class="auth-login-form">

<h1>Login Form</h1>

<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" placeholder="Email" class="auth-input" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" class="auth-input" required>
    <br><br>

    <button type="submit" class="auth-login-button">Login</button>
</form>

</div>

      <div class="auth-signup-form">
          <h1>Sign Up Form</h1>
          <form method="POST" action="/register">
              @csrf 
          <input type="text" name="name" placeholder="Username" class="auth-input" required>
          <br><br>
          <input type="email" name="email" placeholder="Email" class="auth-input" required>
          <br><br>
          <input type="password" name="password" placeholder="Password" class="auth-input" required>
           <input style="display: none;" type="text" value="user" name="userType" placeholder="User Type" class="auth-input" >
            <input style="display: none;" type="number" value="0" name="isPremium" placeholder="Is Premium" class="auth-input" >
          <br><br>
          <button class="auth-signup-button">Sign Up</button>
          </form>
      </div>

  </div>

</div>


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:Arial, Helvetica, sans-serif;

}

/* MAIN CONTAINER */

.auth-container{
display:grid;
grid-template-columns:1fr 2fr;
background:linear-gradient(to bottom,#00D084,#198754);
max-width:1014px;
width:100%;
min-height:420px;
margin: 55px auto;
border-radius:6px;
overflow:hidden;
}

/* LEFT SIDE */

.auth-box-left{
display:flex;
align-items:center;
justify-content:center;
}

.auth-content{
text-align:center;
color:white;
padding:40px 20px;
}

.auth-content h2{
font-size:32px;
margin-bottom:20px;
}

.auth-content button{
border:none;
font-size:15px;
padding:10px;
border-radius:6px;
background:white;
width:140px;
margin:10px;
cursor:pointer;
}

/* RIGHT SIDE */

.auth-box-right{
background:white;
display:flex;
align-items:center;
justify-content:center;
padding:20px;
}

.auth-login-form,
.auth-signup-form{
text-align:center;
width:100%;
max-width:550px;
}

.auth-signup-form{
display:none;
}

.auth-login-form h1,
.auth-signup-form h1{
font-size:24px;
margin-bottom:20px;
}

/* INPUT */

.auth-input{
width:100%;
padding:10px;
border-radius:6px;
border:1px solid #ccc;
}

/* BUTTONS */

.auth-login-button{
width:100%;
padding:12px;
border:none;
border-radius:6px;
background:#20c997;
color:white;
cursor:pointer;
}

.auth-signup-button{
width:100%;
padding:12px;
border:none;
border-radius:6px;
background:#20c997;
color:white;
cursor:pointer;
}

.auth-btn-login{
display:none;
}

/* ---------- MOBILE RESPONSIVE ---------- */

@media (max-width:768px){

.auth-container{
grid-template-columns:1fr;
}

.auth-box-left{
padding:30px 10px;
}

.auth-content h2{
font-size:26px;
}

.auth-box-right{
padding:30px 20px;
}

}

/* EXTRA SMALL MOBILE */

@media (max-width:480px){

.auth-content{
padding:25px 15px;
}

.auth-content button{
width:120px;
font-size:14px;
}

.auth-login-form h1,
.auth-signup-form h1{
font-size:20px;
}

}

</style>


<script>

function showSignup(){

document.querySelector(".auth-login-form").style.display="none";
document.querySelector(".auth-signup-form").style.display="block";

document.querySelector(".auth-container").style.background=
"linear-gradient(to bottom,rgb(56,189,149),rgb(28,139,106))";

document.querySelector(".auth-btn-signup").style.display="none";
document.querySelector(".auth-btn-login").style.display="inline-block";

}

function showLogin(){

document.querySelector(".auth-signup-form").style.display="none";
document.querySelector(".auth-login-form").style.display="block";

document.querySelector(".auth-container").style.background=
"linear-gradient(to bottom,rgb(6,108,224),rgb(14,48,122))";

document.querySelector(".auth-btn-login").style.display="none";
document.querySelector(".auth-btn-signup").style.display="inline-block";

}

</script>
  @endsection