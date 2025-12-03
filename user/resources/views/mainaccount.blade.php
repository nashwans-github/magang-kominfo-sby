<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Magang Surabaya</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white pt-[50px] font-[Poppins]">

    @include('navbar')
    @include('hero')

    <div class="max-w-[1400px] mx-auto px-5">

        <!-- Divider -->
        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <!-- Pemberitahuan Section -->
        <div class="bg-black p-[60px] border-[3px] border-[#B8860B] rounded-[30px] my-[80px] relative max-w-[1200px] mx-auto shadow-[0_0_40px_rgba(184,134,11,0.3)]">

            <h2 class="flex items-center gap-4 mb-[30px] text-[28px] font-semibold">
                <img src="/images/icons/akunutama-towa.png" class="w-[40px] h-[40px]" alt="">
                Pemberitahuan
                <span class="text-[16px] text-gray-400 font-normal">Whats New</span>
            </h2>

            <div class="bg-[#3a3a3a] rounded-[20px] h-[400px] flex items-center justify-center text-[#666] text-[18px] overflow-hidden">
                Ini nanti PDF Pemberitahuan bakal muncul disini
            </div>

            <div class="text-center mt-[25px]">
                <span class="inline-block w-[14px] h-[14px] bg-[#888] rounded-full mx-1"></span>
                <span class="inline-block w-[14px] h-[14px] bg-[#555] rounded-full mx-1"></span>
                <span class="inline-block w-[14px] h-[14px] bg-[#555] rounded-full mx-1"></span>
            </div>
        </div>

        <!-- Divider -->
        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <!-- Informasi Magang Section -->
        <div class="py-[80px]">
            <h2 class="text-center text-[32px] font-bold mb-[50px]">Informasi Magang</h2>

            <div class="flex flex-wrap justify-center gap-6 max-w-[1300px] mx-auto">

                <!-- Periode -->
                <div class="w-[250px] h-[250px] bg-[rgba(255,0,0,0.3)] border-2 border-red-600 rounded-[25px] p-[40px] flex flex-col items-center text-center shadow-[0_8px_20px_rgba(184,134,11,0.4),0_12px_30px_rgba(184,134,11,0.3)] hover:-translate-y-2 transition-all">
                    <img src="/images/icons/akunutama-periode.png" class="w-[90px] h-[90px] mb-2">
                    <h3 class="text-[20px] font-semibold mb-2 tracking-wide">PERIODE</h3>
                    <p class="text-[14px] font-medium">18 Agustus - 19 Desember</p>
                </div>

                <!-- Asal Instansi -->
                <div class="w-[250px] h-[250px] bg-[rgba(255,234,0,0.3)] border-2 border-yellow-400 rounded-[25px] p-[40px] flex flex-col items-center text-center shadow-[0_8px_20px_rgba(184,134,11,0.4),0_12px_30px_rgba(184,134,11,0.3)] hover:-translate-y-2 transition-all">
                    <img src="/images/icons/akunutama-asalinstansi.png" class="w-[90px] h-[90px] mb-2">
                    <h3 class="text-[20px] font-semibold mb-2 tracking-wide">ASAL INSTANSI</h3>
                    <p class="text-[14px] font-medium">Universitas Negeri Surabaya</p>
                </div>

                <!-- Dinas -->
                <div class="w-[250px] h-[250px] bg-[rgba(0,255,38,0.3)] border-2 border-[#00FF26] rounded-[25px] p-[40px] flex flex-col items-center text-center shadow-[0_8px_20px_rgba(184,134,11,0.4),0_12px_30px_rgba(184,134,11,0.3)] hover:-translate-y-2 transition-all">
                    <img src="/images/icons/akunutama-dinas.png" class="w-[90px] h-[90px] mb-2">
                    <h3 class="text-[20px] font-semibold mb-2 tracking-wide">DINAS</h3>
                    <p class="text-[14px] font-medium">Dinas Komunikasi dan Informatika</p>
                </div>

                <!-- Status -->
                <div class="w-[250px] h-[250px] bg-[rgba(13,0,255,0.3)] border-2 border-blue-700 rounded-[25px] p-[40px] flex flex-col items-center text-center shadow-[0_8px_20px_rgba(184,134,11,0.4),0_12px_30px_rgba(184,134,11,0.3)] hover:-translate-y-2 transition-all">
                    <img src="/images/icons/akunutama-statuss.png" class="w-[90px] h-[90px] mb-2">
                    <h3 class="text-[20px] font-semibold mb-2 tracking-wide">STATUS</h3>
                    <span class="mt-auto bg-white/40 px-5 py-2 rounded-full text-green-400 font-bold text-[16px]">Aktif</span>
                </div>

            </div>
        </div>

        <!-- Divider -->
        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <!-- Profile Login Section -->
        <div class="bg-black p-[60px] border-[3px] border-[#B8860B] rounded-[30px] my-[80px] max-w-[1200px] mx-auto shadow-[0_0_40px_rgba(184,134,11,0.3)]">

            <h2 class="text-center text-[32px] font-bold mb-[50px]">Profile Login</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-[40px] max-w-[900px] mx-auto">

                <!-- Card 1 -->
                <div class="bg-gradient-to-br from-gray-600 to-gray-800 rounded-[25px] p-[45px] border-2 border-[#B8860B] text-center shadow-[0_0_30px_rgba(184,134,11,0.2)] hover:-translate-y-2 hover:shadow-[0_0_50px_rgba(184,134,11,0.4)] transition-all">
                    <div class="w-[100px] h-[100px] bg-gradient-to-br from-blue-600 to-blue-800 rounded-full mx-auto flex items-center justify-center mb-[25px] text-[50px]">👤</div>
                    <h3 class="text-[20px] font-semibold">Nashwan Bima Andika</h3>
                    <p class="text-[16px] text-white mb-[30px] font-semibold">peserta01@gmail.com</p>
                    <button class="bg-gradient-to-br from-blue-600 to-blue-900 text-white px-10 py-3 rounded-[25px] font-semibold text-[14px] uppercase tracking-wide hover:scale-105 transition">WEBSITE</button>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-br from-gray-600 to-gray-800 rounded-[25px] p-[45px] border-2 border-[#B8860B] text-center shadow-[0_0_30px_rgba(184,134,11,0.2)] hover:-translate-y-2 hover:shadow-[0_0_50px_rgba(184,134,11,0.4)] transition-all">
                    <div class="w-[100px] h-[100px] bg-gradient-to-br from-red-600 to-red-500 rounded-full mx-auto flex items-center justify-center mb-[25px] text-[50px]">👤</div>
                    <h3 class="text-[20px] font-semibold">Vanezza Brilliance</h3>
                    <p class="text-[16px] text-white mb-[30px] font-semibold">peserta02@gmail.com</p>
                    <button class="bg-gradient-to-br from-blue-600 to-blue-900 text-white px-10 py-3 rounded-[25px] font-semibold text-[14px] uppercase tracking-wide hover:scale-105 transition">MEDIA SOSIAL</button>
                </div>

            </div>
        </div>

    </div>

    @include('footer')
</body>
</html>