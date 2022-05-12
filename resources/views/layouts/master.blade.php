<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://kit.fontawesome.com/ed9936a549.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>
        @yield('title')
    </title>
</head>
<body class="bg-gradient-to-r from-cyan-400 to bg-cyan-600 w-screen min-h-screen overflow-x-hidden flex flex-col items-center gap-y-3">
    @include('layouts.navbar')
    @yield('content')
    <script>
        const navmenu = document.getElementById('navmenu');
        const formtanggal = document.getElementById('formtanggal');
        const formjam = document.getElementById('formjam');
        const formsuhu = document.getElementById('formsuhu');
        const lokasi = document.getElementById("lokasi");
        const tanggal = document.getElementById("tanggal");
        const jam = document.getElementById("jam");
        const suhu = document.getElementById("suhu");
        lokasi.style.display = "none";
        jam.style.display = "none";
        suhu.style.display = "none";
        navmenu.style.display = 'none';
        formtanggal.style.display = 'none';
        formjam.style.display = 'none';
        formsuhu.style.display = 'none';
        function showmenu() {
            navmenu.style.display = 'flex';
            formtanggal.style.display = 'none';  
            formjam.style.display = 'none';  
            formsuhu.style.display = 'none'; 
        }
        function hidemenu() {
            navmenu.style.display = 'none';  
        }
        function showtanggal() {
            formtanggal.style.display = 'flex';  
            formjam.style.display = 'none';  
            formsuhu.style.display = 'none';  
        }
        function showjam() {
            formtanggal.style.display = 'none';  
            formjam.style.display = 'flex';  
            formsuhu.style.display = 'none';  
        }
        function showsuhu() {
            formtanggal.style.display = 'none';  
            formjam.style.display = 'none';  
            formsuhu.style.display = 'flex';  
        }
        function select(that) {
            if(that.value === "tanggal") {
                tanggal.style.display = "block";
                lokasi.style.display = "none";
                jam.style.display = "none";
                suhu.style.display = "none";   
            }
            else if(that.value === "jam") {
                jam.style.display = "block";
                lokasi.style.display = "none";
                tanggal.style.display = "none";
                suhu.style.display = "none";  
            }
            else if(that.value === "suhu") {
                suhu.style.display = "block";
                lokasi.style.display = "none";
                tanggal.style.display = "none";
                jam.style.display = "none";  
            }
            else {
                lokasi.style.display = "block";
                tanggal.style.display = "none";
                jam.style.display = "none";
                suhu.style.display = "none";  
            }
        }
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
</body>
</html>