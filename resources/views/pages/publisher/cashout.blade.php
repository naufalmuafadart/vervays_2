@extends('layouts.app_publisher')

@section('title')
  Pencairan Saldo
@endsection

@push('add-on-style')
  <link rel="stylesheet" href="/css/publisher/cashout.css">
@endpush

@section('content')
  <form>
    <h1>Pencairan Saldo</h1>
    <div class="grid-container">
      <label for="">Total Saldo</label>
      <p>Rp. 123.000</p>
      <label for="">Jumlah Pencairan</label>
      <div class="input-and-small-container">
        <input type="number" min="10000" name="amount" id="inputAmount" required>
        <small>Minimal pencairan sebesar Rp. 10.000</small>
      </div>
      <label for="bank_id">Bank</label>
      <select name="bank_id" id="inputBankId" required>
        <option value="1" selected>Bank 1</option>
        <option value="2">Bank 2</option>
        <option value="3">Bank 3</option>
        <option value="4">Bank 4</option>
      </select>
      <label for="inputAccountOwner">Nama Pemilik Rekening</label>
      <input type="text" name="account_owner" id="inputAccountOwner" required>
      <label for="inputAccountNumber">Nomor Rekening</label>
      <input type="number" name="account_number" id="inputAccountNumber" required>
    </div>
    <button 
      type="submit" 
      id="btnSubmit" 
      class="slim-button">Cairkan</button>
  </form>
@endsection

@push('add-on-script')
  {{-- <script src="/js/publisher/dashboard.js" type="text/javascript"></script> --}}
@endpush