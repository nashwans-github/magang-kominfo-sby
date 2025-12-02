<nav id="navbar" class="w-full fixed top-0 left-0 bg-white/50 shadow z-50 transition-all duration-300">
    <div id="navContainer" class="max-w-7xl mx-auto flex items-center justify-between py-5 px-6 transition-all duration-300">

        <div class="flex items-center space-x-3 cursor-pointer" onclick="location.href='#hero'">
            <img id="navLogo" src="/images/logo-pemkot.png" class="w-10 transition-all duration-300" alt="Logo">
            <span id="navText" class="font-bold text-[#031CFC] text-[16px] transition-all duration-300" style="font-family: 'Poppins', sans-serif;">
                PEMERINTAH KOTA SURABAYA
            </span>
        </div>

        <ul id="menuWrapper" class="transition-all duration-300 ease-in-out flex items-center space-x-10 mx-auto">
            <li><a href="#hero" class="nav-link text-[#0015FF] text-[18.5px] font-semibold hover:text-blue-800 transition-all duration-300">Beranda</a></li>
            <li><a href="#pemberitahuan" class="nav-link text-[#0015FF] text-[18.5px] font-semibold hover:text-blue-800 transition-all duration-300">Pemberitahuan</a></li>
            <li><a href="#informasi" class="nav-link text-[#0015FF] text-[18.5px] font-semibold hover:text-blue-800 transition-all duration-300">Informasi</a></li>
            <li><a href="#profileLogin" class="nav-link text-[#0015FF] text-[18.5px] font-semibold hover:text-blue-800 transition-all duration-300">Profile Login</a></li>
        </ul>

        <a href="javascript:void(0)" onclick="openExitModal()" id="navExitBtn"
            class="flex items-center justify-center rounded-full bg-[#C30000] w-[50px] h-[50px] transition-all duration-300 hover:bg-red-700 hover:scale-105 shadow-lg">
            <img id="navExitIcon" src="/images/icons/navbar-exit.svg" alt="Exit Icon" class="w-[30px] h-[30px] transition-all duration-300">
        </a>

    </div>
</nav>

{{-- =================================== --}}
{{-- MODAL POPUP EXIT (Awalnya Hidden)   --}}
{{-- =================================== --}}
<div id="exitModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm transition-opacity" onclick="closeExitModal()"></div>
    <div class="relative bg-black border-[3px] border-[#B8860B] w-[654px] h-[253px] rounded-[30px] p-10 text-center shadow-[0_0_50px_rgba(184,134,11,0.6)] animate-fade-in-up">
        <h3 class="text-[#B8860B] text-[24px] font-bold mb-4">Keluar dari Akun Utama?</h3>
        <p class="text-white text-[16px] mb-8 leading-relaxed px-4">
            Anda akan keluar dari akun utama portal magang.<br>
            Semua data dan progres Anda akan tetap tersimpan.
        </p>

        <div class="flex gap-4 justify-center">
            <button onclick="closeExitModal()" 
                class="w-[150px] py-3 rounded-xl bg-[#444] text-white font-semibold hover:bg-[#555] transition">
                Batal
            </button>
            
            <a href="{{ url('/exit') }}" 
                class="flex items-center justify-center w-[150px] py-3 rounded-xl bg-[#B8860B] text-white font-semibold hover:bg-[#cf980c] hover:shadow-[0_0_15px_#B8860B] transition">
                Keluar
            </a>
        </div>

    </div>
</div>

<style>
    html { scroll-behavior: smooth; }
    /* Animasi kecil agar munculnya cantik */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.3s ease-out forwards;
    }
</style>

<script>
    // === LOGIKA MODAL EXIT ===
    function openExitModal() {
        const modal = document.getElementById('exitModal');
        modal.classList.remove('hidden');
    }

    function closeExitModal() {
        const modal = document.getElementById('exitModal');
        modal.classList.add('hidden');
    }

    // === LOGIKA SCROLL NAVBAR (YANG LAMA TETAP ADA) ===
    window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar");
        const navContainer = document.getElementById("navContainer");
        const menuWrapper = document.getElementById("menuWrapper");
        
        const navLogo = document.getElementById("navLogo");
        const navText = document.getElementById("navText");
        const navLinks = document.querySelectorAll(".nav-link");
        const navExitBtn = document.getElementById("navExitBtn");
        const navExitIcon = document.getElementById("navExitIcon");

        if (window.scrollY > 0) {
            // MODE KECIL
            navbar.classList.remove("bg-white/50");
            navbar.classList.add("bg-black/85");
            navContainer.classList.remove("py-5");
            navContainer.classList.add("py-4");

            navLogo.classList.remove("w-10");
            navLogo.classList.add("w-8");
            
            navText.classList.remove("text-[16px]");
            navText.classList.add("text-[13px]");

            // Menu Geser Kanan
            menuWrapper.style.transform = "translateX(220px)"; 
            menuWrapper.classList.remove("space-x-10");
            menuWrapper.classList.add("space-x-5");

            navLinks.forEach(link => {
                link.classList.remove("text-[18.5px]");
                link.classList.add("text-[14px]");
            });

            navExitBtn.classList.remove("w-[50px]", "h-[50px]");
            navExitBtn.classList.add("w-[40px]", "h-[40px]");

            navExitIcon.classList.remove("w-[30px]", "h-[30px]");
            navExitIcon.classList.add("w-[20px]", "h-[20px]");

        } else {
            // MODE NORMAL
            navbar.classList.add("bg-white/50");
            navbar.classList.remove("bg-black/85");
            navContainer.classList.add("py-5");
            navContainer.classList.remove("py-4");

            navLogo.classList.add("w-10");
            navLogo.classList.remove("w-8");
            
            navText.classList.add("text-[16px]");
            navText.classList.remove("text-[13px]");

            // Reset Menu
            menuWrapper.style.transform = "translateX(0)"; 
            menuWrapper.classList.add("space-x-10");
            menuWrapper.classList.remove("space-x-5");

            navLinks.forEach(link => {
                link.classList.add("text-[18.5px]");
                link.classList.remove("text-[14px]");
            });

            navExitBtn.classList.add("w-[50px]", "h-[50px]");
            navExitBtn.classList.remove("w-[40px]", "h-[40px]");

            navExitIcon.classList.add("w-[30px]", "h-[30px]");
            navExitIcon.classList.remove("w-[20px]", "h-[20px]");
        }
    });
</script>