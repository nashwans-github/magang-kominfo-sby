<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Dashboard Pembimbing')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Poppins', sans-serif !important; }
    </style>
</head>
<body class="bg-black text-white antialiased font-sans"> 
    
    <div class="flex h-screen overflow-hidden">

        @include('components.sidebar')

        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden ml-64">

            @include('components.admin-navbar')

            <main class="w-full flex-grow p-8 bg-black">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>