@extends('layouts.app_publisher')

@section('title')
  Tambah Buku
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/publisher/input_buku.css">
@endpush

@section('content')
  <form
    action="/api/publisher/book/store"
    method="POST"
    enctype="multipart/form-data">
    <h1>Tambah Buku</h1>

    @csrf

    <div class="grid-container">

      <label for="inputTitle">Judul Buku</label>
      <input type="text" name="title" id="inputTitle">

      <label for="inputAuthor">Penulis</label>
      <input type="text" name="author" id="inputAuthor">

      <label for="inputAbstract">Abstrak</label>
      <textarea name="abstract" id="inputAbstract" rows="4"></textarea>

      <label for="inputNumberOfPage">Jumlah Halaman</label>
      <input type="number" name="number_of_page" id="inputNumberOfPage" min="1" required>
      
      <label for="inputLanguageId">Bahasa</label>
      <select name="language_id" id="inputLanguageId" required>
        @foreach ($languages as $language)
          @if ($loop->first)
            <option value="{{ $language->id }}" selected>{{ $language->name }}</option>
          @else
            <option value="{{ $language->id }}">{{ $language->name }}</option>
          @endif
        @endforeach
      </select>

      <label for="inputCategoryId">Kategori</label>
      <select name="category_id" id="inputCategoryId" required>
        @foreach ($categories as $category)
          @if ($loop->first)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </select>

      <label for="inputReleaseAt">Tanggal Rilis</label>
      <input type="date" name="release_at" id="inputReleaseAt" max="2022-02-20" required>

      <label for="inputPrice">Harga</label>
      <input type="number" name="price" id="inputPrice" min="1" required>

      <label for="inputEbookFile">File Ebook</label>
      <input type="file" name="ebook_file" id="inputEbookFile" accept=".pdf" required>

      <label for="inputSampleEbookFile">File Sample Ebook</label>
      <input type="file" name="sample_ebook_file" id="inputSampleEbookFile" accept=".pdf" required>

      <label for="inputEbookCoverFile">File Cover Ebook</label>
      <input type="file" name="ebook_cover_file" id="inputEbookCoverFile" accept=".jpg,.jpeg,.png" required>

    </div>
    <button 
      type="submit" 
      id="btnSubmit" 
      class="slim-button">Tambah Buku</button>
  </form>
@endsection

@push('add-on-script')
  {{-- <script src="/js/publisher/dashboard.js" type="text/javascript"></script> --}}
@endpush