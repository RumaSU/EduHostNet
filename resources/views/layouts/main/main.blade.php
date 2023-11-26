<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sebuah website pembelajaran Administrasi Jaringan Komputer. Hosting pertama dari Kelompok 1, D3TI-2B Jurusan Teknik Informatika Politeknik Negeri Indramayu.">
    <meta name="keywords" content="eduhostnet, hosting, kelompok 1, Administrasi Jaringan Komputer, D3TI-2B, Politeknik Negeri Indramayu">
    <meta name="author" content="Kelompok 1, D3TI-2B, Ryannanda Maulana Habibi">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="icon" href="{{ asset('assets/img/icon/iconTIB.png') }}" type="image/x-icon">
    <title>EHN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('stylesheet')
</head>

<body class="bg-slate-900">
    @include('layouts.main.nav')
    <main class="text-white min-h-[100vh]">
        @yield('content')
    </main>
    @include('layouts.main.footer')
    <script src="{{ asset('assets/js/nav.js') }}"></script>
    @yield('script')
</body>

</html>