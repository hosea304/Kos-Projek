<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar Kos</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @yield('navbar')
    <div class="container mx-auto mt-24">
        <div class="my-10 flex justify-center">
            @yield('stepBar')
        </div>

        <div class="my-10 flex justify-center">
            @yield('containerPayment')
        </div>
    </div>
</body>

</html>
