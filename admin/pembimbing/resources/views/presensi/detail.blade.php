@extends('layouts.main')

@section('title', 'Presensi Peserta - Nashwan Bima Andika')

@section('content')

    {{-- HEADER JUDUL --}}
    <div class="mb-8">
        <h1 class="text-[#0066FF] text-3xl font-bold tracking-wide">
            Presensi Peserta Magang
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

{{-- 2. TABEL LOG PRESENSI HARIAN --}}
        <div class="bg-[#262626] p-8 rounded-xl shadow-lg border border-white/5 relative overflow-hidden">
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[10%] text-center">Hari Ke-</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[20%] text-left pl-8">Tanggal</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[15%] text-center">Jam Masuk</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[20%] text-center">Status</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[15%] text-center">Bukti Hadir</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[20%] text-center">Keterangan</th>
                        </tr>
                    </thead>

                    <tbody class="text-white text-sm">
                        
                        <tr class="group hover:bg-white/5 transition-colors border-b border-white/5">
                            <td class="py-5 text-center font-bold text-white">1</td>
                            <td class="py-5 text-center pl-8 text-gray-300">18 Agustus</td>
                            <td class="py-5 text-center text-gray-300">08.10</td>
                            <td class="py-5 text-center text-[#22C55E]">Hadir - Tepat Waktu</td>
                            <td class="py-5 text-center">
                                <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-3 py-1.5 rounded text-[10px] font-bold flex items-center gap-1 mx-auto transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Lihat Bukti
                                </button>
                            </td>
                            <td class="py-5 text-center text-gray-500">-</td>
                        </tr>

                        <tr class="group hover:bg-white/5 transition-colors border-b border-white/5">
                            <td class="py-5 text-center font-bold text-white">2</td>
                            <td class="py-5 text-center pl-8 text-gray-300">19 Agustus</td>
                            <td class="py-5 text-center text-gray-300">08.07</td>
                            <td class="py-5 text-center text-[#22C55E]">Hadir - Tepat Waktu</td>
                            <td class="py-5 text-center">
                                <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-3 py-1.5 rounded text-[10px] font-bold flex items-center gap-1 mx-auto transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Lihat Bukti
                                </button>
                            </td>
                            <td class="py-5 text-center text-gray-500">-</td>
                        </tr>

                        <tr class="group hover:bg-white/5 transition-colors border-b border-white/5">
                            <td class="py-5 text-center font-bold text-white">3</td>
                            <td class="py-5 text-center pl-8 text-gray-300">20 Agustus</td>
                            <td class="py-5 text-center text-gray-300">08.45</td>
                            <td class="py-5 text-center text-[#F97316]">Hadir - Terlambat</td>
                            <td class="py-5 text-center">
                                <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-3 py-1.5 rounded text-[10px] font-bold flex items-center gap-1 mx-auto transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Lihat Bukti
                                </button>
                            </td>
                            <td class="py-5 text-center text-gray-300 text-xs">Terjebak macet</td>
                        </tr>

                        <tr class="group hover:bg-white/5 transition-colors border-b border-white/5">
                            <td class="py-5 text-center font-bold text-white">4</td>
                            <td class="py-5 text-center pl-8 text-gray-300">21 Agustus</td>
                            <td class="py-5 text-center text-gray-300">-</td>
                            <td class="py-5 text-center text-[#FF0000]">Tidak Hadir</td>
                            <td class="py-5 text-center">
                                <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-3 py-1.5 rounded text-[10px] font-bold flex items-center gap-1 mx-auto transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Lihat Bukti
                                </button>
                            </td>
                            <td class="py-5 text-center text-gray-300 text-xs">-</td>
                        </tr>

                        <tr class="group hover:bg-white/5 transition-colors border-b border-white/5">
                            <td class="py-5 text-center font-bold text-white">5</td>
                            <td class="py-5 text-center pl-8 text-gray-300">22 Agustus</td>
                            <td class="py-5 text-center text-gray-300">-</td>
                            <td class="py-5 text-center text-gray-300">Izin</td>
                            <td class="py-5 text-center">
                                <button class="bg-[#0066FF] hover:bg-blue-600 text-white px-3 py-1.5 rounded text-[10px] font-bold flex items-center gap-1 mx-auto transition-colors">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Lihat Bukti
                                </button>
                            </td>
                            <td class="py-5 text-center text-gray-300 text-xs">Acara keluarga</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div> @endsection