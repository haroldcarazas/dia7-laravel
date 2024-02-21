<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOGADOS SAC</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex">
        <x-sidebar />

        <main class="w-[85%]">
            <x-navbar />

            @yield('content')
        </main>
    </div>
</body>

</html>
