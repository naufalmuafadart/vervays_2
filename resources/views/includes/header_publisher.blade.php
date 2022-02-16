<header id="page-header">
  @include('includes.navbar')
  <hr>
  <div id="dropdown-container">
    <aside id="dropdown-menu">
      <a href="#">Pengaturan Akun</a>
      <a href="{{ url('/logout') }}">Logout</a>
    </aside>
  </div>
</header>