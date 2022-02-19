@extends('layouts.app_publisher')

@section('title')
  Ubah Info Publisher
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/publisher/edit.css">
@endpush

@section('content')
  <form
    action="/api/publisher/update"
    method="POST"
    enctype="multipart/form-data">
    <h1>Ubah Data Penerbit</h1>
    @csrf
    <div class="grid-container">
      <label 
        for="inputProfilePhotoId">Foto</label>
      <input 
        type="file" 
        name="profile_photo_id" 
        id="inputProfilePhotoId"
        accept=".jpg,.jpeg,.png">
      <label 
        for="inputName">Nama*</label>
      <input 
        type="text" 
        name="name" 
        id="inputName"
        value="{{ $name }}"
        required>
      <label 
        for="inputDescription">Deskripsi*</label>
      <textarea 
        rows="4" 
        name="description" 
        id="inputDescription"
        required>{{ $description }}</textarea>
    </div>
    <input type="hidden" name="id" value="{{ $id }}">
    <button 
      type="submit" 
      id="btnSubmit" 
      class="slim-button">Ubah</button>
  </form>
@endsection

@push('add-on-script')
  <script src="/js/publisher/edit.js" type="text/javascript"></script>
@endpush