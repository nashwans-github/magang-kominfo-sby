@extends('layouts.main')

@section('title', 'Edit Penilaian - Nashwan Bima Andika')

@section('content')

    {{-- HEADER JUDUL --}}
    <div class="mb-8">
        <h1 class="text-[#0066FF] text-3xl font-bold tracking-wide">
            Penilaian Peserta Magang
        </h1>
    </div>

    {{-- WRAPPER UTAMA --}}
    <div class="space-y-6">

        {{-- 1. CARD PROFIL UTAMA (NAMA & DATA UMUM) --}}
        <div class="bg-[#262626] p-8 rounded-xl shadow-lg border-l-4 border-[#0066FF] relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-[#262626] via-[#2a2a2a] to-[#202020] opacity-50 pointer-events-none"></div>
            
            <div class="relative z-10">
                <h2 class="text-white text-3xl font-bold mb-6">Nashwan Bima Andika</h2>
                <hr class="border-white mb-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-12">
                    <div class="flex items-start gap-4">
                        <div class="text-[#0066FF] mt-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium">Asal Instansi</p>
                            <p class="text-white font-semibold">Universitas Negeri Surabaya</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#0066FF] mt-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium">Dinas</p>
                            <p class="text-white font-semibold">Dinas Komunikasi dan Informatika</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#0066FF] mt-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/></svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium">Jurusan</p>
                            <p class="text-white font-semibold">Teknik Informatika</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#0066FF] mt-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium">Bidang</p>
                            <p class="text-white font-semibold">Pengembangan Aplikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{-- 2. FORM EDIT PENILAIAN --}}
        <div class="bg-[#262626] p-8 rounded-xl shadow-lg border border-white/5">
            <h3 class="text-white text-xl font-bold mb-6">Penilaian Kinerja</h3>

            <form action="#" method="POST">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <div class="bg-[#333] p-6 rounded-xl border border-white/5">
                        <h4 class="text-white font-semibold mb-4 text-lg tracking-wide">Presensi</h4>
                        
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label class="text-white/60 text-base">Kehadiran</label>
                                <span id="val1" class="text-white font-medium text-sm bg-[#444] px-4 py-1.5 rounded-md border border-white/50 shadow-md min-w-[3.5rem] text-center inline-block">3.2</span>
                            </div>
                            <input type="range" min="0" max="4" step="0.1" value="3.2" 
                                class="w-full h-1 bg-white/60 rounded-lg appearance-none cursor-pointer
                                [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:border-4 [&::-webkit-slider-thumb]:border-white/50 [&::-webkit-slider-thumb]:transition-all [&::-webkit-slider-thumb]:hover:scale-125
                                [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-4 [&::-moz-range-thumb]:border-white/50 [&::-moz-range-thumb]:transition-all [&::-moz-range-thumb]:hover:scale-125"
                                oninput="document.getElementById('val1').innerText = this.value">
                        </div>

                        <div class="mb-2">
                            <div class="flex justify-between mb-2">
                                <label class="text-white/60 text-base">Ketepatan Waktu</label>
                                <span id="val2" class="text-white font-medium text-sm bg-[#444] px-4 py-1.5 rounded-md border border-white/50 shadow-md min-w-[3.5rem] text-center inline-block">2.4</span>
                            </div>
                            <input type="range" min="0" max="4" step="0.1" value="2.4" 
                                class="w-full h-1 bg-white/60 rounded-lg appearance-none cursor-pointer
                                [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:border-4 [&::-webkit-slider-thumb]:border-white/50 [&::-webkit-slider-thumb]:transition-all [&::-webkit-slider-thumb]:hover:scale-125
                                [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-4 [&::-moz-range-thumb]:border-white/50 [&::-moz-range-thumb]:transition-all [&::-moz-range-thumb]:hover:scale-125"
                                oninput="document.getElementById('val2').innerText = this.value">
                        </div>
                    </div>

                    <div class="bg-[#333] p-6 rounded-xl border border-white/5">
                        <h4 class="text-white font-semibold mb-4 text-lg tracking-wide">Progres</h4>
                        
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label class="text-white/60 text-base">Tugas Selesai</label>
                                <span id="val3" class="text-white font-medium text-sm bg-[#444] px-4 py-1.5 rounded-md border border-white/50 shadow-md min-w-[3.5rem] text-center inline-block">3.2</span>
                            </div>
                            <input type="range" min="0" max="4" step="0.1" value="3.2" 
                                class="w-full h-1 bg-white/60 rounded-lg appearance-none cursor-pointer
                                [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:border-4 [&::-webkit-slider-thumb]:border-white/50 [&::-webkit-slider-thumb]:transition-all [&::-webkit-slider-thumb]:hover:scale-125
                                [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-4 [&::-moz-range-thumb]:border-white/50 [&::-moz-range-thumb]:transition-all [&::-moz-range-thumb]:hover:scale-125"
                                oninput="document.getElementById('val3').innerText = this.value">
                        </div>

                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label class="text-white/60 text-base">Ketepatan Deadline</label>
                                <span id="val4" class="text-white font-medium text-sm bg-[#444] px-4 py-1.5 rounded-md border border-white/50 shadow-md min-w-[3.5rem] text-center inline-block">3.2</span>
                            </div>
                            <input type="range" min="0" max="4" step="0.1" value="3.2" 
                                class="w-full h-1 bg-white/60 rounded-lg appearance-none cursor-pointer
                                [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:border-4 [&::-webkit-slider-thumb]:border-white/50 [&::-webkit-slider-thumb]:transition-all [&::-webkit-slider-thumb]:hover:scale-125
                                [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-4 [&::-moz-range-thumb]:border-white/50 [&::-moz-range-thumb]:transition-all [&::-moz-range-thumb]:hover:scale-125"
                                oninput="document.getElementById('val4').innerText = this.value">
                        </div>

                        <div class="mb-2">
                            <div class="flex justify-between mb-2">
                                <label class="text-white/60 text-base">Kemandirian</label>
                                <span id="val5" class="text-white font-medium text-sm bg-[#444] px-4 py-1.5 rounded-md border border-white/50 shadow-md min-w-[3.5rem] text-center inline-block">4.0</span>
                            </div>
                            <input type="range" min="0" max="4" step="0.1" value="4.0" 
                                class="w-full h-1 bg-white/60 rounded-lg appearance-none cursor-pointer
                                [&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:w-4 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:border-4 [&::-webkit-slider-thumb]:border-white/50 [&::-webkit-slider-thumb]:transition-all [&::-webkit-slider-thumb]:hover:scale-125
                                [&::-moz-range-thumb]:w-4 [&::-moz-range-thumb]:h-4 [&::-moz-range-thumb]:bg-white [&::-moz-range-thumb]:rounded-full [&::-moz-range-thumb]:border-4 [&::-moz-range-thumb]:border-white/50 [&::-moz-range-thumb]:transition-all [&::-moz-range-thumb]:hover:scale-125"
                                oninput="document.getElementById('val5').innerText = this.value">
                        </div>
                    </div>

                </div>

            </form>
        </div>

        {{-- TOMBOL ACTION --}}
        <div class="mt-8 flex gap-4">
            <a href="{{ url('/penilaian/detail') }}" class="bg-[#0055FF] hover:bg-[#0044CC] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors text-center w-[150px]">
                Simpan
            </a>
                    
            <a href="{{ url('/penilaian/detail') }}" class="bg-[#444] hover:bg-[#555] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors text-center w-[150px]">
                Batal
            </a>
        </div>

    </div>

@endsection