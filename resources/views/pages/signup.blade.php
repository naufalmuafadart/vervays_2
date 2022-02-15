<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="/css/signup.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
  <div id="grid-container">
    <div id="left-side">
      <img src="/image/login/left_side_login_content4.png" alt="">
    </div>
    <div id="right-side">
      <form action="POST" id="formSignup">
        <h1>Sign Up</h1>
        <p>Daftar akun agar bisa berbelanja di Vervays</p>

        @csrf
        <div id="form-grid">
          <section>
            <label for="inputFirstName">Nama depan*</label>
            <input type="text" name="firstname" id="inputFirstName">
          </section>

          <section>
            <label for="inputLastName">Nama belakang</label>
            <input type="text" name="lastname" id="inputLastName">
          </section>
        </div>

        <label for="inputEmail">Email*</label>
        <input type="email" name="email" id="inputEmail">

        <label for="inputPassword">Password*</label>
        <input type="password" name="password" id="inputPassword">

        <div id="centering">
          <button 
            type="submit"
            form="formSignup"
            value="Sign Up">Sign Up</button>
        </div>

        <p>Sudah punya akun? <a href="#">Login Disini</a></p>
      </form>
    </div>
  </div>
</body>
</html>