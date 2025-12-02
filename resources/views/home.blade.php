@extends('main')

@section('title', 'Beranda - Portal Magang Surabaya')

@section('content')

    {{-- HERO SECTION --}}
    <section id="hero">
        @include('components.hero')
    </section>

    {{-- WRAPPER KONTEN (Penting: overflow-hidden agar animasi dari samping tidak bikin scroll horizontal) --}}
    <div class="relative w-full overflow-hidden pb-20">
        
        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <section id="pemberitahuan" class="scroll-mt-24 reveal-element from-left"> 
            @include('sections.pemberitahuan')
        </section>

        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <section id="informasi" class="scroll-mt-24 reveal-element from-bottom">
            @include('sections.informasi')
        </section>

        <div class="h-[4px] max-w-[600px] mx-auto my-[40px] bg-gradient-to-r from-transparent via-[#4169E1] to-transparent"></div>

        <section id="profileLogin" class="scroll-mt-24 reveal-element from-right">
            @include('sections.profileLogin')
        </section>
        
    </div>

    {{-- === STYLE & SCRIPT ANIMASI === --}}
    
    <style>
        /* 1. STATE AWAL (SEBELUM MUNCUL) */
        .reveal-element {
            opacity: 0;
            transition: all 1.5s ease-out;
        }

        /* Posisi awal: Dari Kiri */
        .reveal-element.from-left {
            transform: translateX(-100px); 
        }

        /* Posisi awal: Dari Kanan */
        .reveal-element.from-right {
            transform: translateX(100px); 
        }

        .reveal-element.from-bottom {
            transform: translateY(80px);
        }

        /* 2. STATE AKHIR (SETELAH MUNCUL) */
        /* Class ini akan ditambahkan oleh Javascript saat user scroll */
        .reveal-element.active {
            opacity: 1;             /* Muncul */
            transform: translate(0, 0); /* Kembali ke posisi normal */
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua elemen yang mau dianimasikan
            const reveals = document.querySelectorAll(".reveal-element");

            // Buat Observer (Mata-mata Scroll)
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    // Jika elemen masuk ke layar
                    if (entry.isIntersecting) {
                        // Tambahkan class 'active' agar animasi jalan
                        entry.target.classList.add("active");
                        
                        // (Opsional) Hentikan pengamatan agar animasi cuma jalan sekali
                        // observer.unobserve(entry.target); 
                    }
                });
            }, {
                threshold: 0.15 // Animasi jalan ketika 15% elemen sudah terlihat
            });

            // Pasang mata-mata ke setiap elemen
            reveals.forEach((element) => {
                observer.observe(element);
            });
        });
    </script>

@endsection