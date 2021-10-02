@extends('layout')
@section('content') 
<div class="wrapper__area" id="wrapper_Area">
<div class="forms__area">
<form class="login__form" id="signUpForm">
      <h1 class="form__title">Sign Up!</h1>
          <input type="text" name="username" placeholder="Username123..." id="signUpUsername">
          <input type="text" name="email" placeholder="Email@example.com" id="signUpEmail">
          <input type="password" name="password" placeholder="Password123$#%&..." id="signUpPassword">
          <button type="submit" class="submit-button" id="signUpSubmitBtn">Sign Up</button>
    </form> 
  </div>
  <div class="aside__area" id="aside_Area">
    <div class="login__aside-info">
      <h4>Welcome</h4>
      <img src="https://e.top4top.io/p_1945sidbp2.png" alt="Image">
      <p>To Keep connected with us please login with your personal info</p>
      <button id="aside_signIn_Btn"><a href="login" style="text-decoration:none; color:white;">Sign In</a></button>
    </div>
  </div>
</div>
@endsection