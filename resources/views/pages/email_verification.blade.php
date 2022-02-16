<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  @include('includes.style')
  <title>Email Verification</title>
  <link rel="stylesheet", href="/css/email_verification.css">
</head>
<body>
  <h1>Vervays</h1>
  <p>Untuk menggunakan layanan Vervays, anda harus memverifikasi email terlebih dahulu</p>
  <p>Email verifikasi sudah dikirimkan ke {{ $email }}</p>
</body>
</html>