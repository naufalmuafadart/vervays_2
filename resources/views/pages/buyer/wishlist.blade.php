@extends('layouts.app')

@section('title')
  Wishlist
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/buyer/wishlist.css">
@endpush

@section('content')
  <h1>Wishlist</h1>

  <template id="template">
    <div class="card">
      <aside>
        <a href="/"><img src="/image/placeholder/book_placeholder.png" alt=""></a>
      </aside>
      <main id="main">
        <a href="/"><h2>Title</h2></a>
        <div class="author-container">
          <p>Ditulis oleh</p>
          <p class="author">Nama penulis</p>
        </div>
        <p class="abstract"></p>
        <div class="rating-container">
          <img src="/image/icon/yellow_star.png" alt="">
          <img src="/image/icon/yellow_star.png" alt="">
          <img src="/image/icon/yellow_star.png" alt="">
          <img src="/image/icon/blank_star.png" alt="">
          <img src="/image/icon/blank_star.png" alt="">
          <p class="rating">X.X</p>
          <p class="ratingCount">(XX ulasan)</p>
          <p class="soldCount">x kali terjual</p>
        </div>
        <div class="price-and-button-container">
          <div class="side">
            <p class="price discPrice">Rp.95.000</p>
            <p class="price currPrice">Rp. 55.000</p>
          </div>
          <div class="side">
            <button class="slim-button">Beli</button>
            <img src="/image/icon/ic_trash.png" alt="">
          </div>
        </div>
      </main>
    </div>
  </template>
@endsection

@push('add-on-script')
  <script type="text/javascript" src="/js/buyer/wishlist.js"></script>
@endpush
