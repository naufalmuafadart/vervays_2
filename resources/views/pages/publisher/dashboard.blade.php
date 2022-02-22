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
        <td id="publisherJoinDate">{{ $created_at }}</td>
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
          @foreach ($books as $book)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$book->title}}</td>
              <td class="price">{{$book->price}}</td>
              <td>{{$book->rating}}</td>
              <td>{{$book->pcs_sold}}</td>
              <td>
                <a href="/publisher/book/edit/{{$book->id}}">
                  <button class="slim-button">Edit</button>
                </a>
                <button class="slim-button">Lihat Detail</button>
                <button class="slim-button">Hapus</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <p id="infoNoBook">Buku belum ditambahkan</p>
    </main>
  </section>
@endsection

@push('add-on-script')
  <script src="/js/publisher/dashboard.js" type="text/javascript"></script>
@endpush