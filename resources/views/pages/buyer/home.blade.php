@extends('layouts.app')

@section('title')
  Vervays Ebook store
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/buyer/home.css">
@endpush

@section('content')
  <h1>Buku Terbaru</h1>
  <div class="grid-container" id="newestBookContainer">
  </div>

  <h1>Pilihan Editor</h1>
  <div class="grid-container">
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      <p class="prevPrice">Rp. 54.000</p>
      <p class="currPrice">Rp. 45.000</p>
    </a>
  </div>

  <template id="bookTemplate">
    <a href="#" class="grid-item">
      <img class="placeholder" src="/image/placeholder/book_placeholder.png" alt="" srcset="">
      <p class="title">90 Masakan Rumahan Untuk Sebulan-Endang Indriani</p>
      <p class="author">Endang Indriani</p>
      <div class="star-container">
        <img src="/image/icon/yellow_star.png" alt="" class="star star1">
        <img src="/image/icon/yellow_star.png" alt="" class="star star2">
        <img src="/image/icon/yellow_star.png" alt="" class="star star3">
        <img src="/image/icon/blank_star.png" alt="" class="star star4">
        <img src="/image/icon/blank_star.png" alt="" class="star star5">
      </div>
      {{-- <p class="prevPrice">Rp. 54.000</p> --}}
      <p class="price">Rp. 45.000</p>
    </a>
  </template>
@endsection

@push('add-on-script')
  <script src="/js/buyer/home.js" type="text/javascript"></script>
@endpush