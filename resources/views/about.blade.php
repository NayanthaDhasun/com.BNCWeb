@extends('layout')

@section('content')

<section class="relative overflow-hidden bg-[linear-gradient(135deg,#eef7ff_0%,#ffffff_52%,#f5fbf7_100%)] px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-24">
    <div class="mx-auto grid max-w-[1160px] items-center gap-12 min-[861px]:grid-cols-[1.05fr_0.95fr]">
        <div>
            <span class="mb-4 inline-flex rounded-full border border-blue-200 bg-white px-4 py-2 text-xs font-extrabold uppercase tracking-[0.18em] text-blue-700">About Us</span>
            <h1 class="mb-6 max-w-[760px] text-[38px] font-black leading-[1.05] text-[#0f3d68] min-[521px]:text-[54px]">Financial clarity for businesses built with ambition.</h1>
            <p class="max-w-[820px] text-base leading-[1.85] text-slate-600 min-[521px]:text-lg">
                Blue Navigate Consulting is a Sri Lanka-based accounting and advisory firm helping individuals, freelancers, startups, and SMEs take control of their finances and grow with confidence. Serving clients across Sri Lanka and globally, we combine local expertise with a global mindset.
            </p>

            <div class="mt-8 flex flex-col gap-3 min-[521px]:flex-row">
                <a href="/contact" class="inline-flex min-h-[48px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-[#0f3d68] min-[521px]:w-auto">Free Consultation</a>
                <a href="/services" class="inline-flex min-h-[48px] w-full items-center justify-center rounded-lg border border-blue-200 bg-white px-[26px] py-[13px] font-extrabold text-[#0f3d68] no-underline transition hover:-translate-y-0.5 hover:border-blue-400 hover:text-blue-700 min-[521px]:w-auto">Explore Services</a>
            </div>
        </div>

        <div class="relative">
            <div class="overflow-hidden rounded-lg border border-slate-200 bg-white shadow-[0_24px_60px_rgba(15,65,120,0.14)]">
                <img src="/images/contactImage.jpeg" alt="Blue Navigate Consulting team support" class="h-[260px] w-full object-cover min-[521px]:h-[360px]">
                <div class="grid grid-cols-3 divide-x divide-slate-200 bg-white text-center">
                    <div class="px-3 py-5">
                        <strong class="block text-xl text-[#0f3d68]">Global</strong>
                        <span class="mt-1 block text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Reach</span>
                    </div>
                    <div class="px-3 py-5">
                        <strong class="block text-xl text-[#0f3d68]">CA</strong>
                        <span class="mt-1 block text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Expertise</span>
                    </div>
                    <div class="px-3 py-5">
                        <strong class="block text-xl text-[#0f3d68]">SME</strong>
                        <span class="mt-1 block text-xs font-bold uppercase tracking-[0.12em] text-slate-500">Focused</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-20">
    <div class="mx-auto grid max-w-[1100px] gap-10 min-[861px]:grid-cols-[0.8fr_1.2fr]">
        <div>
            <span class="mb-3 block text-sm font-extrabold uppercase tracking-[0.18em] text-blue-700">Our Story</span>
            <h2 class="text-[30px] font-black leading-[1.12] text-[#0f3d68] min-[521px]:text-[38px]">Built to give growing businesses the support they were missing.</h2>
        </div>
        <div class="border-l-4 border-blue-600 pl-6">
            <p class="text-base leading-[1.85] text-slate-600 min-[521px]:text-lg">
                We started BNC because we saw too many small businesses and startups struggling with compliance, taxes, and financial decisions &mdash; not because they lacked ambition, but because they lacked the right support. We built BNC to change that.
            </p>
        </div>
    </div>
</section>

<section class="bg-blue-50 px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-20">
    <div class="mx-auto grid max-w-[1100px] gap-6 min-[861px]:grid-cols-2">
        <div class="rounded-lg border border-blue-100 bg-white p-8 shadow-[0_14px_32px_rgba(15,65,120,0.12)]">
            <span class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-blue-700 text-white" aria-hidden="true">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
            </span>
            <h2 class="mb-3 text-2xl font-bold text-[#0f3d68]">Vision</h2>
            <p class="leading-[1.8] text-slate-600">To be the most trusted financial partner for Sri Lankan businesses and beyond.</p>
        </div>

        <div class="rounded-lg border border-emerald-100 bg-white p-8 shadow-[0_14px_32px_rgba(15,65,120,0.12)]">
            <span class="mb-5 inline-flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-600 text-white" aria-hidden="true">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 21s7-4.5 7-11V5l-7-3-7 3v5c0 6.5 7 11 7 11Z" />
                    <path d="m9 12 2 2 4-5" />
                </svg>
            </span>
            <h2 class="mb-3 text-2xl font-bold text-[#0f3d68]">Mission</h2>
            <p class="leading-[1.8] text-slate-600">To make professional accounting and financial advisory accessible to every business, at every stage.</p>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-20">
    <div class="mx-auto max-w-[1100px]">
        <div class="mb-10 max-w-[720px]">
            <span class="mb-3 block text-sm font-extrabold uppercase tracking-[0.18em] text-blue-700">What Makes Us Different</span>
            <h2 class="text-[30px] font-black leading-[1.12] text-[#0f3d68] min-[521px]:text-[38px]">Practical advice, direct access, and service shaped around your business.</h2>
        </div>

        <div class="grid gap-6 min-[861px]:grid-cols-3">
            <div class="rounded-lg border border-slate-200 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 inline-flex h-11 w-11 items-center justify-center rounded-lg bg-blue-100 text-lg font-black text-blue-700">01</span>
                <h3 class="mb-3 text-lg font-bold text-[#0f3d68]">Qualified Professionals You Can Trust</h3>
                <p class="leading-[1.75] text-slate-600">Every engagement is handled by qualified accountants &mdash; CA, CMA not junior staff or outsourced teams. You get the expertise your business deserves.</p>
            </div>

            <div class="rounded-lg border border-slate-200 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 inline-flex h-11 w-11 items-center justify-center rounded-lg bg-emerald-100 text-lg font-black text-emerald-700">02</span>
                <h3 class="mb-3 text-lg font-bold text-[#0f3d68]">Direct Access to Your Accountant</h3>
                <p class="leading-[1.75] text-slate-600">No call centers, no middlemen. At BNC, you communicate directly with the professional handling your account &mdash; so you get faster answers and real relationships.</p>
            </div>

            <div class="rounded-lg border border-slate-200 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 inline-flex h-11 w-11 items-center justify-center rounded-lg bg-amber-100 text-lg font-black text-amber-700">03</span>
                <h3 class="mb-3 text-lg font-bold text-[#0f3d68]">Tailored to Your Business</h3>
                <p class="leading-[1.75] text-slate-600">We don't believe in one-size-fits-all. Whether you're a freelancer filing your first tax return or an SME scaling operations, we build a solution around your specific needs.</p>
            </div>
        </div>

        <div class="mt-10 rounded-lg bg-[#0f3d68] px-7 py-8 text-white min-[861px]:flex min-[861px]:items-center min-[861px]:justify-between min-[861px]:gap-8">
            <div>
                <h2 class="text-2xl font-black">Ready to make your finances easier to manage?</h2>
                <p class="mt-3 max-w-[680px] leading-[1.7] text-blue-50">Talk to BNC about accounting, tax, payroll, compliance, or advisory support matched to your stage of growth.</p>
            </div>
            <a href="/contact" class="mt-6 inline-flex min-h-[48px] w-full items-center justify-center rounded-lg bg-white px-[26px] py-[13px] font-extrabold text-[#0f3d68] no-underline transition hover:-translate-y-0.5 hover:bg-blue-50 min-[521px]:w-auto min-[861px]:mt-0">Free Consultation</a>
        </div>
    </div>
</section>

<section class="bg-blue-50 px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-20">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-[#0f3d68]">FAQ</h2>
        <div class="mx-auto grid max-w-[900px] gap-4">
            <div class="rounded-[14px] border border-slate-200 bg-white p-6 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <h3 class="mb-2 font-bold text-[#0f3d68]">What type of businesses do you support?</h3>
                <p class="leading-[1.7] text-slate-600">We support individuals, freelancers, startups, small businesses, and growing SMEs &mdash; based in Sri Lanka or operating globally &mdash; that need accounting, tax, payroll, and business advisory support.</p>
            </div>

            <div class="rounded-[14px] border border-slate-200 bg-white p-6 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <h3 class="mb-2 font-bold text-[#0f3d68]">Can you help with tax and compliance?</h3>
                <p class="leading-[1.7] text-slate-600">Yes. We help with VAT, PAYE, EPF, ETF, income tax, company tax calculations, and related compliance support &mdash; so you stay fully compliant without the stress.</p>
            </div>

            <div class="rounded-[14px] border border-slate-200 bg-white p-6 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <h3 class="mb-2 font-bold text-[#0f3d68]">Do you offer customized services?</h3>
                <p class="leading-[1.7] text-slate-600">Absolutely. Every business is different, so we tailor our support based on your transaction volume, team size, reporting needs, and stage of growth &mdash; you only pay for what you actually need.</p>
            </div>

            <div class="rounded-[14px] border border-slate-200 bg-white p-6 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <h3 class="mb-2 font-bold text-[#0f3d68]">Do I need to visit your office?</h3>
                <p class="leading-[1.7] text-slate-600">Not necessarily. We serve clients across Sri Lanka and globally, with remote support available for accounting, tax, payroll, and advisory needs.</p>
            </div>
        </div>
    </section>

@endsection
