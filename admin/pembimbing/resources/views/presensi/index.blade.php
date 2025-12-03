{{-- 1. Panggil Layout Utama --}}
@extends('layouts.main')

{{-- 2. Judul Tab --}}
@section('title', 'Presensi Peserta Magang')

{{-- 3. Isi Konten --}}
@section('content')

    {{-- Panggil Section Tabel Presensi --}}
    {{-- Pastikan file admin-presensi.blade.php ada di folder sections/presensi --}}
    @include('sections.presensi-peserta.admin-presensi')

@endsection