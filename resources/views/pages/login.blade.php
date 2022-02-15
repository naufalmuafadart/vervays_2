<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/image/favicon.ico">
  <link rel="stylesheet" href="/css/app.css">

  <link rel="stylesheet" href="/css/login.css">
</head>
<body>
  <div id="grid-container">
    <div id="left-side">
      <img src="/image/login/left_side_login_content4.png" alt="">
    </div>
    <div id="right-side">
      <form action="POST" id="formSignup">
        <h1>Login</h1>

        @csrf

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
    </div>
  </div>
</body>
</html>