<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Navigate Consulting</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-linear-to-b from-white to-brand-50 font-sans text-ink">

<nav class="sticky top-0 z-10 flex flex-col items-start gap-4 border-b border-soft-border bg-white/95 px-6 py-4 shadow-[0_8px_30px_rgba(15,65,120,0.08)] min-[861px]:flex-row min-[861px]:items-center min-[861px]:justify-between min-[861px]:gap-0 min-[861px]:px-[70px] min-[861px]:py-[18px]">
    <a href="/" class="inline-flex h-24 w-[165px] items-center justify-center overflow-hidden no-underline leading-none min-[521px]:h-[114px] min-[521px]:w-[195px]" aria-label="Blue Navigate Consulting home">
        <img src="{{ asset('images/logo.png') }}" alt="Blue Navigate Consulting" class="block h-auto w-[165px] max-w-none scale-[1.12] object-contain min-[521px]:w-[195px]">
    </a>
    <div class="flex w-full flex-wrap items-center gap-3 min-[861px]:w-auto">
        <a href="/" class="flex-auto rounded-lg px-3.5 py-2.5 text-center font-bold text-ink no-underline transition hover:bg-brand-100 hover:text-brand-700 min-[521px]:flex-none">Home</a>
        <a href="/about" class="flex-auto rounded-lg px-3.5 py-2.5 text-center font-bold text-ink no-underline transition hover:bg-brand-100 hover:text-brand-700 min-[521px]:flex-none">About Us</a>
        <a href="/services" class="flex-auto rounded-lg px-3.5 py-2.5 text-center font-bold text-ink no-underline transition hover:bg-brand-100 hover:text-brand-700 min-[521px]:flex-none">Services</a>
        <a href="/contact" class="flex-auto rounded-lg px-3.5 py-2.5 text-center font-bold text-ink no-underline transition hover:bg-brand-100 hover:text-brand-700 min-[521px]:flex-none">Contact Us</a>
        <a href="/pricing" class="flex-auto rounded-lg bg-brand-700 px-3.5 py-2.5 text-center font-bold text-white no-underline shadow-[0_10px_22px_rgba(7,94,184,0.22)] transition hover:-translate-y-px hover:bg-brand-800 hover:text-white min-[521px]:flex-none">Pricing</a>
    </div>
</nav>

<main class="min-h-[calc(100vh-137px)]">
    @yield('content')
</main>

<footer class="bg-brand-900 px-5 py-6 text-center text-white">
    <p class="text-[#dcecff]">© 2026 Blue Navigate Consulting. All Rights Reserved.</p>
</footer>

</body>
</html>
