<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Magang Surabaya')</title>
    
    {{-- 1. LOAD TAILWIND VIA CDN (Agar langsung jalan tanpa npm run dev) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- 2. LOAD FONT POPPINS (Wajib karena desainmu pakai font ini) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    {{-- 3. KONFIGURASI DEFAULT --}}
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #000; /* Background hitam sesuai tema */
            color: white; 
        }
        /* Tambahan agar scroll halus */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-black text-white antialiased">

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- KONTEN DINAMIS --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.footer')

</body>
</html>