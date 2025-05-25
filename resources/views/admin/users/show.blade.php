@extends('master')
@section('content')
<h2>Detail User</h2>
<ul>
    <li>Nama: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
    <li>Role: {{ ucfirst($user->role) }}</li>
    <li>Dibuat: {{ $user->created_at->format('d/m/Y H:i') }}</li>
</ul>
<a href="{{ route('admin.users.index') }}">← Kembali</a>

@endsection