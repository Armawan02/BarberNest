@extends('master2')
@section('content')
<h2>Tambah Cabang</h2>
<form action="">
    <label for="">Nama Cabang:</label>
    <input type="text" name="nama" class="form-control mb-3" required>
    <label for="">Alamat:</label>
    <input type="text" name="alamat" class="form-control mb-3" required>
    <label for="">Kota/Kabupaten:</label>
    <input type="text" name="kota_kab" class="form-control mb-3" required>
</form>
@endsection