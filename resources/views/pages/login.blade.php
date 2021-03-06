@extends('layouts.login_and_signup')

@section('title')
  Login
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/login.css">
@endpush

@section('content')
  <form action="/api/login" method="post" id="formSignup">
    <h1>Login</h1>

    <div class="alert" id="alert">
      <p id="alertMessage">Email atau password salah</p>
    </div>

    @csrf

    <small id="smallalert">Email tidak ditemukan</small>
    <label for="inputEmail">Email</label>
    <input type="email" name="email" id="inputEmail">

    <label for="inputPassword">Password</label>
    <input type="password" name="password" id="inputPassword">

    <div id="centering">
      <button 
        type="submit"
        form="formSignup"
        class="fat-button"
        value="Login">Login</button>
    </div>

    <p class="exception-help">Belum punya akun? <a href="/signup">Daftar Disini</a></p>
    <p class="exception-help">Lupa password? <a href="#">Reset Password</a></p>
  </form>
@endsection

@push('add-on-script')
  <script src="/js/login.js" type="text/javascript"></script>
@endpush