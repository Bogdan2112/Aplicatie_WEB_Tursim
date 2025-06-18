<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #f6f6f6; min-height: 100vh; display: flex; flex-direction: column;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Home</a>
            <a class="nav-link" href="{{ route('cards.index') }}">Cards</a>
        </div>
    </nav>
    <main class="flex-grow-1">
        @yield('content')
    </main>
    <footer class="text-center py-3 bg-light mt-auto">
        <small>&copy; {{ date('Y') }} Your App</small>
    </footer>
</body>
</html> 