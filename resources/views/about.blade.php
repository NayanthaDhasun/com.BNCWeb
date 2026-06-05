@extends('layout')

@section('content')

<section class="mx-auto w-[min(1100px,calc(100%-40px))] py-[82px]">
    <h1 class="mb-[22px] text-[34px] leading-[1.15] font-bold text-brand-800 min-[521px]:text-[44px]">About Us</h1>
    <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">
        Blue Navigate Consulting is a professional business consulting company.
        We help businesses improve operations, increase profit, and achieve long-term growth.
    </p>

    <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">
        Our mission is to guide companies with clear strategies, financial advice,
        and digital business solutions.
    </p>

    <a href="/pricing" class="mt-3.5 inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-brand-800 min-[521px]:w-auto">View Consulting Plans</a>  
</section>

<section class="mt-[58px] bg-blue-50 py-[82px]">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">FAQ</h2>
        <div class="mx-auto grid max-w-[900px] gap-4">
            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">What type of businesses do you support?</h3>
                <p class="leading-[1.7] text-muted">We support freelancers, start-ups, small businesses, and growing SMEs that need accounting, tax, payroll, and business advisory support.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Can you help with tax and compliance?</h3>
                <p class="leading-[1.7] text-muted">Yes. We help with VAT, PAYE, EPF, ETF, income tax, company tax calculations, and related compliance support.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Do you offer customized services?</h3>
                <p class="leading-[1.7] text-muted">Yes. We can customize support based on your transaction volume, staff count, reporting needs, and business stage.</p>
            </div>
        </div>
    </section>

@endsection
