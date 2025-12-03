@extends('layouts.main')

@section('title', 'Dashboard - Pembimbing')

@section('content')
    <div class="w-full">
        
        @include('sections.dashboard.admin-stats')

        @include('sections.dashboard.admin-activity')

    </div>
@endsection