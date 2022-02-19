<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  <title>@yield('title')</title>
  @include('includes.style')
  @stack('add-on-style')
</head>
<body>
  @include('includes.header_publisher')
  <main id="pageContent">@yield('content')</main>
  @include('includes.script')
  @stack('add-on-script')
</body>
</html>