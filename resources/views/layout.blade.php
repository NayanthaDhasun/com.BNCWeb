<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Navigate Consulting</title>
    @vite(['resources/css/style.css'])
</head>
<body>

<nav class="navbar">
    <a href="/" class="logo" aria-label="Blue Navigate Consulting home">
        <img src="{{ asset('images/logo.png') }}" alt="Blue Navigate Consulting">
    </a>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact Us</a>
        <a href="/pricing" class="nav-button">Pricing</a>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>© 2026 Blue Navigate Consulting. All Rights Reserved.</p>
</footer>

</body>
</html>
