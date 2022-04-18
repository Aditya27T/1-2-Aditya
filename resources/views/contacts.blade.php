@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
    <label for="inputname"></label>
  </div>
  <div class="mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
    <label for="inputemail" class="form-label"></label>
  </div>
  <div class="mb-3">
    <textarea class="form-control" placeholder="Tinggalkan Pesan Disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2"></label>
  </div>
  <button type="submit" class="btn btn-primary">kirim</button>
</form>

@endsection