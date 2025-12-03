@extends('layouts.main')

@section('title', 'Detail Penilaian - Nashwan Bima Andika')

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

        {{-- 2. PENILAIAN KINERJA (CONTAINER BESAR) --}}
        <div class="bg-[#262626] p-8 rounded-xl shadow-lg border border-white/5">
            
            <h3 class="text-white px-2 text-xl font-bold mb-6">Penilaian Kinerja</h3>

            {{-- 2.A. TABEL DAFTAR NILAI (RECTANGLE KECIL 1) --}}
            <div class="bg-[#333] p-8 pb-12 rounded-xl mb-8 border border-white/5">
                <h4 class="text-white font-semibold mb-4 text-lg tracking-wide">Daftar Nilai</h4>
                
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white">
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[30%] text-center"></th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[45%] text-center">Aspek Nilai</th>
                            <th class="py-4 text-gray-300 font-bold text-center uppercase tracking-wider border-b border-white/20 w-[25%] text-center">Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="text-white text-base">
                        <tr class="border-b border-white-600/50 relative">
                            <td class="py-5 px-14 text-left font-bold text-white">Presensi</td>
                            <td class="py-5 px-14 text-left font-medium text-gray-300">Kehadiran</td>
                            <td class="py-5 px-14 text-center font-medium text-gray-300">3.2</td>
                        </tr>
                        <tr class="border-b border-white-600/50 relative">
                            <td class="py-5 px-14 text-left font-bold text-white"></td>
                            <td class="py-5 px-14 text-left font-medium text-gray-300">Ketepatan Waktu</td>
                            <td class="py-5 px-14 text-center font-medium text-gray-300">2.4</td>
                        </tr>
                        <tr class="border-b border-white-600/50 relative">
                            <td class="py-5 px-14 text-left font-bold text-white">Progres</td>
                            <td class="py-5 px-14 text-left font-medium text-gray-300">Tugas Selesai</td>
                            <td class="py-5 px-14 text-center font-medium text-gray-300">3.2</td>
                        </tr>
                        <tr class="border-b border-white-600/50 relative">
                            <td class="py-5 px-14 text-left font-bold text-white"></td>
                            <td class="py-5 px-14 text-left font-medium text-gray-300">Ketepatan Deadline</td>
                            <td class="py-5 px-14 text-center font-medium text-gray-300">3.2</td>
                        </tr>
                        <tr class="border-b border-white-600/50 relative">
                            <td class="py-5 px-14 text-left font-bold text-white"></td>
                            <td class="py-5 px-14 text-left font-medium text-gray-300">Kemandirian</td>
                            <td class="py-5 px-14 text-center font-medium text-gray-300">4.0</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- 2.B. STATISTIK NILAI (FIXED LAYOUT) --}}
            <div class="bg-[#333] p-8 pb-16 rounded-xl border border-white/5">
                <h4 class="text-white font-semibold mb-8 text-lg tracking-wide">Statistik Nilai</h4>

                <div class="flex h-[350px]">
                    
                    <div class="w-8 h-full flex items-center justify-center">
                        <span class="text-white text-base font-medium -rotate-90 whitespace-nowrap tracking-wider block">Nilai</span>
                    </div>

                    <div class="relative flex-1 h-full ml-10">
                        
                        <div class="absolute inset-0 flex flex-col justify-between pointer-events-none pb-10">
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">4</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">3.5</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">3</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">2.5</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">2</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">1.5</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">1</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">0.5</span>
                            </div>
                            <div class="border-b border-gray-500 w-full h-0 relative">
                                <span class="text-white text-sm font-medium -mt-2 absolute -left-8">0</span>
                            </div>
                        </div>

                        <div class="absolute inset-0 flex items-end justify-around pb-10 px-2">
                            
                            <div class="relative w-20 bg-[#60A5FA] hover:bg-[#3B82F6] transition-all rounded-t-sm group cursor-pointer" style="height: 80%">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-white text-sm font-medium">3.2</span>
                                <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white text-sm font-medium text-center w-36">Kehadiran</div>
                            </div>

                            <div class="relative w-20 bg-[#60A5FA] hover:bg-[#3B82F6] transition-all rounded-t-sm group cursor-pointer" style="height: 60%">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-white text-sm font-medium">2.4</span>
                                <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white text-sm font-medium text-center w-36 leading-tight">Ketepatan Waktu</div>
                            </div>

                            <div class="relative w-20 bg-[#60A5FA] hover:bg-[#3B82F6] transition-all rounded-t-sm group cursor-pointer" style="height: 80%">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-white text-sm font-medium">3.2</span>
                                <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white text-sm font-medium text-center w-36 leading-tight">Tugas Selesai</div>
                            </div>

                            <div class="relative w-20 bg-[#60A5FA] hover:bg-[#3B82F6] transition-all rounded-t-sm group cursor-pointer" style="height: 80%">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-white text-sm font-medium">3.2</span>
                                <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white text-sm font-medium text-center w-36 leading-tight">Ketepatan Deadline</div>
                            </div>

                            <div class="relative w-20 bg-[#60A5FA] hover:bg-[#3B82F6] transition-all rounded-t-sm group cursor-pointer" style="height: 100%">
                                <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-white text-sm font-medium">4</span>
                                <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white text-sm font-medium text-center w-24">Kemandirian</div>
                            </div>

                        </div>

                        <div class="absolute -bottom-8 w-full text-center">
                            <span class="text-white font-medium text-base tracking-wide">Aspek Penilaian</span>
                        </div>

                    </div>
                </div>

        </div>

    </div>

        {{-- 3. JUMLAH DAN RATA-RATA NILAI --}}
        <div class="bg-[#262626] p-8 rounded-xl shadow-lg border border-white/5">
            
            <h3 class="text-white px-2 text-xl font-bold mb-6">Jumlah dan Rata-Rata Nilai</h3>

            <div class="space-y-6">
                
                <div class="bg-[#333] p-6 rounded-xl border border-white/5">
                    <h4 class="text-white font-semibold mb-4 text-lg text-center tracking-wide">Presensi</h4>
                    
                    <div class="grid grid-cols-2 gap-6 pr-16 pl-16">
                        <div class="bg-black border-2 border-white/70 rounded-lg text-center h-[120px] flex flex-col justify-center items-center transition-all duration-300 hover:scale-105 hover:border-[#00B7FF] hover:shadow-[0_0_15px_rgba(0,183,255,0.3)]">
                            <p class="text-gray-400 text-sm mb-3">Total Nilai</p>
                            <p class="text-white text-4xl font-bold">5.6</p>
                        </div>
                        <div class="bg-black border-2 border-white/70 rounded-lg text-center h-[120px] flex flex-col justify-center items-center transition-all duration-300 hover:scale-105 hover:border-[#00B7FF] hover:shadow-[0_0_15px_rgba(0,183,255,0.3)]">
                            <p class="text-gray-400 text-sm mb-3">Rata - Rata</p>
                            <p class="text-[#00B7FF] text-4xl font-bold">2.8</p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#333] p-6 rounded-xl border border-white/5">
                    <h4 class="text-white font-semibold mb-4 text-lg text-center tracking-wide">Progres</h4>
                    
                    <div class="grid grid-cols-2 gap-6 pr-16 pl-16">
                        <div class="bg-black border-2 border-white/70 rounded-lg text-center h-[120px] flex flex-col justify-center items-center transition-all duration-300 hover:scale-105 hover:border-[#00B7FF] hover:shadow-[0_0_15px_rgba(0,183,255,0.3)]">
                            <p class="text-gray-400 text-sm mb-3">Total Nilai</p>
                            <p class="text-white text-4xl font-bold">10.4</p>
                        </div>
                        <div class="bg-black border-2 border-white/70 rounded-lg text-center h-[120px] flex flex-col justify-center items-center transition-all duration-300 hover:scale-105 hover:border-[#00B7FF] hover:shadow-[0_0_15px_rgba(0,183,255,0.3)]">
                            <p class="text-gray-400 text-sm mb-3">Rata - Rata</p>
                            <p class="text-[#00B7FF] text-4xl font-bold">3.4</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- TOMBOL EDIT (FLOATING DI BAWAH KIRI) --}}
        <div class="pb-8">
            <a href="{{ url('/penilaian/edit') }}" class="bg-[#0055FF] hover:bg-[#0044CC] text-white font-bold py-3 px-8 rounded-lg shadow-lg transition-colors text-lg w-[120px] h-[50px] inline-block text-center">
                Edit
            </a>
        </div>
@endsection