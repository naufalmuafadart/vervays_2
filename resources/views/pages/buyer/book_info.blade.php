@extends('layouts.app')

@section('title')
  {{ $book->title }}
@endsection

@push('add-on-meta')
  <meta name="bookid" content="{{ $book->id }}">
@endpush

@push('add-on-style')
  <link rel="stylesheet" href="/css/buyer/book_info.css">
@endpush

@section('content')
  <aside>
    <img src="{{ $book->coverURL }}" alt="" srcset="">
    <p id="discPrice">Rp. 34.000</p>
    <p id="price">Rp. 74.000</p>
    <button class="slim-button">Baca Sample</button>
    <button class="slim-button" id="btnAddToCart">Tambah ke Keranjang</button>
    <button class="slim-button" id="btnRemoveFromCart">Hapus dari Keranjang</button>
    <button class="slim-button" id="btnAddToWishlist" onclick="addBookToWishlist()">Tambah ke Wishlist</button>
    <button class="slim-button" id="btnRemoveFromWishlist" onclick="removeBookFromWishlist()">Hapus dari Wishlist</button>
    <button class="slim-button">Beli</button>
    <button class="slim-button">Beri Rating</button>
  </aside>
  <main id="main">
    <section id="headSection">
      <h1>{{ $book->title }}</h1>
      <div id="first-rating-row">
        <img class="star-img" src="/image/icon/yellow_star.png" alt="">
        <img class="star-img" src="/image/icon/yellow_star.png" alt="">
        <img class="star-img" src="/image/icon/yellow_star.png" alt="">
        <img class="star-img" src="/image/icon/blank_star.png" alt="">
        <img class="star-img" src="/image/icon/blank_star.png" alt="">
        <p>X.X</p>
        <p>(<span>XX</span> Ulasan)</p>
      </div>
      <p>XX kali terjual</p>
      <hr>
    </section>
    <section id="abstractSection">
      <h2>Abstrak</h2>
      <div id="textAbstract">{{ $book->abstract }}</div>
      <hr>
    </section>
    <section id="detailSection">
      <h2>Detail Buku</h2>
      <div id="detail-grid">
        <p>Bahasa</p>
        <p>:</p>
        <p>{{ $book->language }}</p>

        <p>Penerbit</p>
        <p>:</p>
        <p><a href="#" id="toPublisher">{{ $book->publisherName }}</a></p>

        <p>Penulis</p>
        <p>:</p>
        <p>{{ $book->author }}</p>

        <p>Jumlah Halaman</p>
        <p>:</p>
        <p>{{ $book->number_of_page }}</p>
      </div>
      <hr>
    </section>
  </main>
@endsection

@push('add-on-script')
  <script src="/js/buyer/book_info.js" type="text/javascript"></script>
@endpush