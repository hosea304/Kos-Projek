<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @yield('navbar')
    <div class="container mx-auto mt-24 ">
        <div class=" pl-10 py-10 bg-slate-600 w-vw my-10">
            @yield('welcome')
        </div>

        <div class="mb-10 py-7">
            @yield('statusKepergian')
        </div>

        <div class="mb-10 py-7">
            @yield('riwayatTransaksi')
        </div>

        <div class="mb-10 bg-slate-400 w-min-vw min-h-40 py-7 ps-5">
            @yield('peraturan')
        </div>
    </div>
</body>

</html>
