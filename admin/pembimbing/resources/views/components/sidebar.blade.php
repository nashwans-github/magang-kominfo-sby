<aside class="w-64 h-screen bg-[#1A1A1A] flex flex-col fixed left-0 top-0 z-50 overflow-y-auto font-sans">
    
    <div class="px-6 pt-8 pb-4 flex items-center gap-3">
        <img src="{{ asset('images/logo-pemkot.png') }}" alt="Logo" class="w-12 h-12 object-contain">
        <h1 class="text-xl font-bold text-[#0066FF] tracking-wide">
            Pembimbing
        </h1>
    </div>

    <div class="mx-6 border-b border-white mb-4"></div>

    <div class="px-4">
        @php
            $isActive = request()->is('/') || request()->is('dashboard'); 
            $activeClass = 'bg-[#2C2C2C] text-white shadow-lg';
            $inactiveClass = 'text-[#0066FF] hover:bg-[#2C2C2C] hover:text-[#0066FF]';
        @endphp

        <a href="{{ url('/') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 group {{ $isActive ? $activeClass : $inactiveClass }}">
            
            <img src="{{ asset('images/icons/icons_sidebar/pembimbing-dashboard_' . ($isActive ? 'aktif' : 'nonaktif') . '.svg') }}" 
                 alt="Dashboard" 
                 class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110">
            
            <span class="font-bold text-lg">Dasboard</span>
        </a>
    </div>

    <div class="px-8 mt-2 mb-2">
        <span class="text-[#0066FF] text-xs font-bold uppercase tracking-wider">
            MASTER
        </span>
    </div>

    <nav class="flex-1 px-4 space-y-2">

        @php 
            $isActive = request()->is('peserta*'); 
        @endphp
        <a href="{{ url('/peserta') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 group {{ $isActive ? $activeClass : $inactiveClass }}">
            
            <img src="{{ asset('images/icons/icons_sidebar/pembimbing-daftarpeserta_' . ($isActive ? 'aktif' : 'nonaktif') . '.svg') }}" 
                 alt="Peserta" 
                 class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110">
                 
            <span class="font-bold text-base">Daftar Peserta</span>
        </a>

        @php 
            $isActive = request()->is('presensi*'); 
        @endphp
        <a href="{{ url('/presensi') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 group {{ $isActive ? $activeClass : $inactiveClass }}">
            
            <img src="{{ asset('images/icons/icons_sidebar/pembimbing-presensi_' . ($isActive ? 'aktif' : 'nonaktif') . '.svg') }}" 
                 alt="Presensi" 
                 class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110">
                 
            <span class="font-bold text-base">Presensi</span>
        </a>

        @php 
            $isActive = request()->is('progres*'); 
        @endphp
        <a href="{{ url('/progres') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 group {{ $isActive ? $activeClass : $inactiveClass }}">
            
            <img src="{{ asset('images/icons/icons_sidebar/pembimbing-progres_' . ($isActive ? 'aktif' : 'nonaktif') . '.svg') }}" 
                 alt="Progres" 
                 class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110">
                 
            <span class="font-bold text-base">Progres</span>
        </a>

        @php 
            $isActive = request()->is('penilaian*'); 
        @endphp
        <a href="{{ url('/penilaian') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-300 group {{ $isActive ? $activeClass : $inactiveClass }}">
            
            <img src="{{ asset('images/icons/icons_sidebar/pembimbing-penilaiyan_' . ($isActive ? 'aktif' : 'nonaktif') . '.svg') }}" 
                 alt="Penilaian" 
                 class="w-6 h-6 mr-3 transition-transform duration-300 group-hover:scale-110">
                 
            <span class="font-bold text-base">Penilaian</span>
        </a>

    </nav>
</aside>