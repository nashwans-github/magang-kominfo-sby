@extends('layouts.main')

@section('title', 'Penilaian Peserta Magang')

@section('content')

    {{-- Panggil Section Penilaian --}}
    @include('sections.penilaian-peserta.admin-penilaian')

@endsection