<header id="page-header">
  @include('includes.navbar')
  <hr>
  <div id="dropdown-container">
    <aside id="dropdown-menu">
      <a href="#">Koleksi Buku</a>
      <a href="#">Menu Publisher</a>
      <a href="#">Daftar Pesanan</a>
      <a href="#">Pengaturan Akun</a>
      <a href="{{ url('/logout') }}">Logout</a>
    </aside>
  </div>
</header>