<?php use Illuminate\Support\Facades\Request; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistem Informasi Koperasi') }}</title>

    <!-- Import CSS -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    @stack('css') <!-- Untuk custom CSS -->
</head>
<body class="hold-transition @if(Request::is('login')) login-page @else sidebar-mini @endif">
<div class="wrapper">

    @if(!Request::is('login')) <!-- Hanya tampilkan header, sidebar, dan footer jika bukan di halaman login -->
        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if(!Request::is('login'))
            <!-- Breadcrumb -->
            @include('layouts.breadcrumb')
        @endif

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content') <!-- Bagian yang akan diisi oleh konten halaman individual -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @if(!Request::is('login'))
        <!-- Footer -->
        @include('layouts.footer')
    @endif

</div>
<!-- ./wrapper -->

<!-- Import JavaScript -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

@stack('js') <!-- Untuk custom JS -->
</body>
</html>