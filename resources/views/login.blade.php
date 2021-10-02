@extends('layout')
@section('content') 
<div class="wrapper__area" id="wrapper_Area">
  <div class="forms__area">
    <form class="login__form" id="loginForm">
      <h1 class="form__title">Sign In!</h1>
          <input type="text" name="username" placeholder="Username" id="loginUsername">
          <input type="password" name="password" placeholder="Password" id="loginPassword">
        <div class="forgot_password">Forgot Password?</div>
      <button type="submit" class="submit-button" id="loginSubmitBtn">Sign in</button>
    </form>
</div>
  <div class="aside__area" id="aside_Area">
    <div class="login__aside-info">
      <h4>Hello</h4>
      <img src="https://d.top4top.io/p_1945xjz2y1.png" alt="Image">
      <p>Enter your personal details and start journey with us</p>
      <button id="aside_signUp_Btn"><a href="signup" style="text-decoration:none; color:white;">Sign up</a></button>
    </div>
  </div>
</div>
@endsection