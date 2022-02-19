@extends('layouts.app_publisher')

@section('title')
  Ubah Info Publisher
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/publisher/edit.css">
@endpush

@section('content')
  <form>
    <h1>Ubah Data Penerbit</h1>
    <div class="grid-container">
      <label for="inputProfilePhotoId">Foto</label>
      <input type="file" name="profile_photo_id" id="inputProfilePhotoId">
      <label for="inputName">Nama*</label>
      <input type="text" name="name" id="inputName" required>
      <label for="inputDescription">Deskripsi*</label>
      <textarea rows="4" name="description" id="inputDescription" required></textarea>
    </div>
    <button 
      type="submit" 
      id="btnSubmit" 
      class="slim-button">Ubah</button>
  </form>
@endsection

@push('add-on-script')
  {{-- <script src="/js/publisher/dashboard.js" type="text/javascript"></script> --}}
@endpush