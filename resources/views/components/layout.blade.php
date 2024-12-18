<!DOCTYPE html>
<html lang="en" data-theme="garden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TicketWorld</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <x-navbar></x-navbar>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px- lg:px-8 drop-shadow-lg border-red ">
            <x-header></x-header>

            {{ $slot }}

        </div>
    </main>
</body>

</html>