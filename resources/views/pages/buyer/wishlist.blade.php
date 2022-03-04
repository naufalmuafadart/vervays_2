@extends('layouts.app')

@section('title')
  Wishlist
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/buyer/wishlist.css">
@endpush

@section('content')
  <h1>Wishlist</h1>

  <div class="card">
    <aside>
      <img src="/image/placeholder/book_placeholder.png" alt="">
    </aside>
    <main id="main">
      <h2>The Reluctant Coroner</h2>
      <div class="author-container">
        <p>Ditulis oleh</p>
        <p class="author">Nama penulis</p>
      </div>
      <p class="abstract">Id, arabica, and barista cup fair trade milk est brewed. Eu skinny aroma as steamed aromatic half and half carajillo to go breve chicory. Coffee percolator, single origin robusta acerbic iced skinny black macchiato rich. Aromatic qui, milk chicory cup turkish to go. Robusta, at, half and half caffeine black wings single origin dripper spoon galão saucer. Affogato foam filter beans rich filter frappuccino. Acerbic ristretto, whipped aftertaste at, dripper bar  caffeine aroma frappuccino dripper dark. Seasonal, iced, sugar, crema milk robusta shop qui redeye. Barista cinnamon, sit mocha cup roast percolator. Whipped, espresso milk at brewed cortado robusta steamed white.</p>
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
          <p class="price prevPrice">Rp.95.000</p>
          <p class="price">Rp. 55.000</p>
        </div>
        <div class="side">
          <button class="slim-button">Beli</button>
          <img src="/image/icon/ic_trash.png" alt="">
        </div>
      </div>
    </main>
  </div>
@endsection