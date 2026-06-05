<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Navigate Consulting</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-linear-to-b from-white to-brand-50 font-sans text-ink">

<nav class="sticky top-0 z-10 flex flex-col items-center gap-4 border-b border-soft-border bg-white/95 px-6 py-4 shadow-[0_8px_30px_rgba(15,65,120,0.08)] min-[861px]:flex-row min-[861px]:justify-between min-[861px]:gap-0 min-[861px]:px-[70px] min-[861px]:py-2">
    <!-- Logo Wrapper - Mobile alignment and scaling fixed -->
    <a href="/" class="inline-flex h-14 w-auto items-center justify-center no-underline leading-none min-[521px]:h-20" aria-label="Blue Navigate Consulting home">
        <img src="{{ asset('images/logo4.png') }}" 
             alt="Blue Navigate Consulting" 
             class="h-full w-auto object-contain"
             width="137"
             height="80">
    </a>
    
    <!-- Navigation Links - Centered and padded perfectly for small screens -->
    <div class="flex w-full flex-wrap items-center justify-center gap-2 min-[521px]:gap-3 min-[861px]:w-auto">
        <a href="/" class="flex-auto rounded-lg px-3 py-2 text-center text-sm font-bold text-ink no-underline transition hover:bg-blue-100 hover:text-brand-700 min-[521px]:flex-none min-[521px]:text-base">Home</a>
        <a href="/about" class="flex-auto rounded-lg px-3 py-2 text-center text-sm font-bold text-ink no-underline transition hover:bg-blue-100 hover:text-brand-700 min-[521px]:flex-none min-[521px]:text-base">About Us</a>
        <a href="/services" class="flex-auto rounded-lg px-3 py-2 text-center text-sm font-bold text-ink no-underline transition hover:bg-blue-100 hover:text-brand-700 min-[521px]:flex-none min-[521px]:text-base">Services</a>
        <a href="/contact" class="flex-auto rounded-lg px-3 py-2 text-center text-sm font-bold text-ink no-underline transition hover:bg-blue-100 hover:text-brand-700 min-[521px]:flex-none min-[521px]:text-base">Contact Us</a>
        <a href="/pricing" class="flex-auto rounded-lg bg-blue-700 px-4 py-2 text-center text-sm font-bold text-white no-underline shadow-[0_10px_22px_rgba(7,94,184,0.22)] transition hover:-translate-y-px hover:bg-brand-800 hover:text-white min-[521px]:flex-none min-[521px]:text-base">Pricing</a>
    </div>
</nav>

<main class="min-h-[calc(100vh-137px)]">
    @yield('content')
</main>

<footer class="bg-brand-900 px-5 py-6 text-center text-white">
    <p class="text-black">© 2026 Blue Navigate Consulting. All Rights Reserved.</p>
</footer>

</body>
</html>
