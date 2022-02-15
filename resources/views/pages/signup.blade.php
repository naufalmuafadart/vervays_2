@extends('layouts.login_and_signup')

@section('title')
  Daftar Akun
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/signup.css">
@endpush

@section('content')
  <form action="/api/signup" method="post" id="formSignup">
    <h1>Sign Up</h1>
    <p>Daftar akun agar bisa berbelanja di Vervays</p>

    @csrf
    <div id="form-grid">
      <section>
        <label for="inputFirstName">Nama depan*</label>
        <input type="text" name="firstname" id="inputFirstName" required>
      </section>

      <section>
        <label for="inputLastName">Nama belakang</label>
        <input type="text" name="lastname" id="inputLastName">
      </section>
    </div>

    <label for="inputEmail">Email*</label>
    <input type="email" name="email" id="inputEmail" required>

    <label for="inputPassword">Password*</label>
    <input type="password" name="password" id="inputPassword" minlength="8" required>

    <div id="centering">
      <button 
        type="submit"
        form="formSignup"
        class="fat-button"
        value="Sign Up">Sign Up</button>
    </div>

    <p class="exception-help">Sudah punya akun? <a href="/login">Login Disini</a></p>
  </form>
@endsection