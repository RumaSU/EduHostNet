<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="icon" href="{{ asset('assets/img/icon/iconTIB.png') }}" type="image/x-icon">
    <title>EHN - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('css')
</head>
<body class="bg-slate-800">
    <div class="content flex flex-col xl:flex-row gap-2 min-h-[100vh]">
        <nav class="w-0 text-white bg-slate-950 flex-shrink-0 md:w-80">
            @include('layouts.dashboard.nav')
        </nav>
        <main class="flex-grow mt-36 xl:mt-0 xl:w-full min-h-[100%] bg-white p-2 md:p-8 overflow-hidden">
            @yield('content')
        </main>
    </div>
    <footer class="col-span-3 py-12 bg-black text-white z-50 w-full">
        @include('layouts.dashboard.footer')
    </footer>
    
    <script src="{{ asset('assets/js/activeLink.js') }}"></script>
    @yield('script')
</body>
</html>