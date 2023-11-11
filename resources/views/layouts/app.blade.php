<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mathios - Laravel</title>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Header -->
    <x-header />

    <!-- Content -->
    <main class="container mx-auto flex-grow p-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>