<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  <title>@yield('title')</title>
  @include('includes.style')
  <link rel="stylesheet" href="/css/login_and_signup.css">
  @stack('add-on-style')
</head>
<body>
  <div id="grid-container">
    <div id="left-side">
      <img src="/image/login/left_side_login_content4.png" alt="">
    </div>
    <div id="right-side">
      @yield('content')
    </div>
  </div>
</body>
</html>