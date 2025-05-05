<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>UTS PWEB 1072</title>
    <body class="bg-gray-100 min-h-screen flex flex-col">

        {{-- navbar --}}
        <x-navbar />

        {{-- Konten utama --}}
        <main class="flex-grow container mx-auto px-4 py-8">
            @yield('content')
        </main>

        {{-- Footer --}}
        <x-footer />
</body>
</html>
