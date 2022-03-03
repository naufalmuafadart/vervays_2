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
  <div class="centering">
    @if ($isResend == "true")
      <button 
        class="fat-button" 
        id="btnResendEmail">Kirim ulang email verifikasi</button>
    @endif
  </div>
  @include('includes.script')
  <script src="/js/email_verification.js" type="text/javascript"></script>
</body>
</html>