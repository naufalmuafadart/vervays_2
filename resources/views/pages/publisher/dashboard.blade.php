@extends('layouts.app_publisher')

@section('title')
  Dashboard Publisher
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/publisher/dashboard.css">
@endpush

@section('content')
  <section class="d-flex-space-between-container">
    <h1>Data Penerbit</h1>
    <a href="{{ url('/publisher/edit') }}">
      <button class="slim-button" id="btnUbahData">Ubah Data</button>
    </a>
  </section>
  <section id="publisherInfoSection">
    <div id="profilePhotoWrapper">
      <img
        id="profilePhoto" 
        src="{{ $profile_photo_url }}" alt="">
    </div>
    <table id="tableLayout">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $name }}</td>
      </tr>
      <tr>
        <td>Bergabung</td>
        <td>:</td>
        <td>{{ $created_at }}</td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>:</td>
        <td>{{ $description }}</td>
      </tr>
    </table>
  </section>
  <hr>
  <section id="balanceSection">
    <h1>Saldo</h1>
    <p id="balance">Rp. {{ $balance }}</p>
    <a href="/publisher/cashout">
      <button class="slim-button">Cairkan Saldo</button>
    </a>
  </section>
  <hr>
  <section id="bookSection">
    <header class="d-flex-space-between-container">
      <h1 class="left-side">Daftar Buku</h1>
      <div class="right-side">
        <a href="/publisher/book/create">
          <button class="slim-button">Tambah Buku</button>
        </a>
        <div id="searchProductContainer">
          <input type="text" value="">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </header>
    <main>
      <table
        cellspacing="0"
        id="bookTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Harga</th>
            <th>Rating</th>
            <th>Terjual</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>90 Masakan Rumahan Untuk Sebulan-Endang Indriani</td>
            <td>Rp. 98.000</td>
            <td>2.3</td>
            <td>5</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>fdhghn h</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>90 Masakan Rumahan Untuk Sebulan-Laras Kinanthi</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>fdhghn h</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>fdhghn h</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>fdhghn h</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>fdhghn h</td>
            <td>Rp. 198.000</td>
            <td>4.1</td>
            <td>8</td>
            <td>
              <button class="slim-button">Edit</button>
              <button class="slim-button">Lihat Detail</button>
              <button class="slim-button">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </section>
@endsection

@push('add-on-script')
  <script src="/js/publisher/dashboard.js" type="text/javascript"></script>
@endpush