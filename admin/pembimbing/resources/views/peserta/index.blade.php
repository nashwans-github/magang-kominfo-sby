@extends('layouts.main')

@section('title', 'Daftar Peserta Magang')

@section('content')

    {{-- 2. Panggil Section Tabel Peserta --}}
    {{-- Sesuai gambar: folder sections -> daftar-peserta -> nama file --}}
    @include('sections.daftar-peserta.admin-peserta_aktif')

@endsection