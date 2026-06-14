@extends('layout')

@section('content')

<section class="mx-auto w-[min(1100px,calc(100%-40px))] py-[82px]">
    <h1 class="mb-[22px] text-[34px] leading-[1.15] font-bold text-brand-800 min-[521px]:text-[44px]">Pricing & Packages</h1>
    <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">Professional accounting, tax, compliance, advisory, and exclusive virtual CFO support for individuals, start-ups, and growing Sri Lankan businesses.</p>

    <div class="mt-[34px] grid grid-cols-1 gap-6 min-[861px]:grid-cols-3">
        <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-[14px] border border-soft-border bg-brand-100 text-brand-700" aria-hidden="true">
                <svg viewBox="0 0 24 24" class="h-[25px] w-[25px] fill-current">
                    <path d="M5 20V6.8A2.8 2.8 0 0 1 7.8 4h8.4A2.8 2.8 0 0 1 19 6.8V20l-3.5-2-3.5 2-3.5-2L5 20Zm4-11h6V7H9v2Zm0 4h6v-2H9v2Z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-blue-900">Starter Package</h2>
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Starting from LKR 9,999<span class="mt-1 block text-base font-bold text-muted">/month</span></p>
            <p class="font-bold leading-[1.6] text-muted">For freelancers, small businesses, and start-ups.</p>
            <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
                <li>Bookkeeping up to around 150 transactions</li>
                <li>Monthly Profit & Loss</li>
                <li>Bank reconciliation for 1-2 accounts</li>
                <li>Basic tax tracking</li>
                <li>Simple payroll for 0-5 staff</li>
                <li>EPF/ETF/PAYE handling if applicable</li>
                <li>Free business consultation - 12 sessions per year</li>
            </ul>
            <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Contact Us</a>
        </div>

        <div class="relative flex flex-col gap-4 rounded-[14px] border border-brand-600 bg-white p-8 shadow-[0_18px_42px_rgba(7,94,184,0.2)] transition hover:-translate-y-1 hover:shadow-brand-lg">
            <div class="self-start rounded-full border border-soft-border bg-blue-300 px-3 py-1.5 text-[13px] font-extrabold text-brand-800">Recommended</div>
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-[14px] border border-soft-border bg-brand-100 text-brand-700" aria-hidden="true">
                <svg viewBox="0 0 24 24" class="h-[25px] w-[25px] fill-current">
                    <path d="M4 19h16v2H4v-2Zm1-2V9h4v8H5Zm5 0V4h4v13h-4Zm5 0v-6h4v6h-4Z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-blue-900">Growth Package</h2>
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">LKR 24,999 - 60,000<span class="mt-1 block text-base font-bold text-muted">/month</span></p>
            <p class="font-bold leading-[1.6] text-muted">For small to medium enterprises.</p>
            <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
                <li>Full bookkeeping system</li>
                <li>Monthly financial statements</li>
                <li>Cash flow tracking</li>
                <li>Bank reconciliations for multiple accounts</li>
                <li>Payroll</li>
                <li>VAT/PAYE/EPF/ETF compliance</li>
                <li>Monthly management report</li>
                <li>Basic financial insights</li>
                <li>Free business consultation - 12 sessions per year</li>
            </ul>
            <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">Contact Us</a>
        </div>

        <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <div class="inline-flex h-12 w-12 items-center justify-center rounded-[14px] border border-soft-border bg-brand-100 text-brand-700" aria-hidden="true">
                <svg viewBox="0 0 24 24" class="h-[25px] w-[25px] fill-current">
                    <path d="M12 2 4 6v6c0 5 3.4 9.7 8 10 4.6-.3 8-5 8-10V6l-8-4Zm1 13.6 3.8-3.8 1.4 1.4L12 19.4l-4.2-4.2 1.4-1.4 2.8 2.8Z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-blue-900">Advisory and CFO Package</h2>
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Starting from USD 185<span class="mt-1 block text-base font-bold text-muted">per month</span></p>
            <p class="font-bold leading-[1.6] text-muted">Exclusive virtual CFO services for growing SMEs and businesses with complex pricing, planning, or cash flow needs.</p>
           <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
                <li>Everything in Growth package</li>
                <li>Monthly financial review meeting</li>
                <li>Budgeting & forecasting</li>
                <li>Profitability analysis</li>
                <li>Pricing/margin analysis</li>
                <li>Strategic advisory</li>
                <li>KPI tracking dashboards</li>
                <li>Decision support reports</li>
                <li>Free business consultation</li>
            </ul>
            <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Contact Us</a>
        </div>
    </div>

    <section class="mt-[58px] py-[82px]">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">Tax Services</h2>
        <div class="grid grid-cols-1 items-stretch  gap-[18px] min-[861px]:grid-cols-2">
            <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-1  hover:shadow-brand-lg">
                <h2 class="text-2xl font-bold text-brand-800">Individual Tax Services</h2>
                <p class="text-[28px] leading-[1.2] font-extrabold text-ink">LKR 4,999 - 15,000</p>
                <h3 class="mt-1 text-lg font-bold text-brand-800">Services Include</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
                    <li>TIN Registration & Activation</li>
                    <li>Personal Income Tax Return Preparation & Filing</li>
                    <li>Tax Consultation & Compliance Guidance</li>
                    <li>Employment Income Tax Filing</li>
                    <li>Rental Income Tax Filing</li>
                    <li>Investment & Other Income Declaration Support</li>
                    <li>Tax Liability Calculation</li>
                    <li>IRD Portal Assistance</li>
                    <li>Support for Tax Notices & Clarifications</li>
                    <li>Annual Tax Compliance Assistance</li>
                </ul>
                <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Contact Us</a>
            </div>

            <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h2 class="text-2xl font-bold text-brand-800">Company Tax</h2>
                <div>
                    <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Quoted after review</p>
                    <p class="mt-2 text-[24px] leading-[1.25] font-extrabold text-ink">LKR 9,999 - 35,000</p>
                </div>
                <p class="font-bold leading-[1.6] text-muted">Corporate tax setup, filing, advisory, and ongoing compliance management.</p>
                <h3 class="mt-1 text-lg font-bold text-brand-800">Services Include</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
    <li>Corporate Income Tax Return Preparation & Filing</li>
    <li>Corporate TIN Registration & Tax Setup</li>
    <li>Tax Computation & Adjustments</li>
    <li>Quarterly Income Tax Estimate Preparation</li>
    <li>IRD Correspondence & Clarification Support</li>
    <li>Corporate Tax Planning Assistance</li>
</ul>
                <h3 class="mt-1 text-lg font-bold text-brand-800">Add-On Services</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-[#b9d8f4] [&>li]:before:bg-brand-100 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-brand-700 [&>li]:after:content-['']">
                    <li>VAT Handling - registration, filing, and compliance support</li>
                    <li>Support for Tax Audits & Queries</li>
                    <li>Tax Compliance & Advisory Support</li>
                </ul>
                
            </div>
        </div>
    </section>

    <section class="mt-[58px] overflow-hidden rounded-[18px] bg-[linear-gradient(135deg,#eef7ff_0%,#ffffff_48%,#ecfdf5_100%)] px-5 py-[72px] shadow-[0_18px_50px_rgba(15,65,120,0.12)] min-[861px]:px-10">
        <div class="mx-auto max-w-[980px] text-center">
            <span class="mb-3 inline-flex rounded-full border border-blue-200 bg-white px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-blue-700">Flexible support</span>
            <h2 class="mb-4 text-[34px] font-black leading-[1.12] text-[#0f3d68]">Customized Support</h2>
            <p class="mx-auto max-w-[700px] leading-[1.8] text-slate-600">Choose focused support for payroll, advisory sessions, company secretarial work, or accounting package setup based on your current business need.</p>
        </div>

        <div class="mt-10 grid grid-cols-1 gap-5 min-[861px]:grid-cols-2">
            <div class="relative overflow-hidden rounded-[14px] border border-blue-100 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 grid h-12 w-12 place-items-center rounded-lg bg-blue-700 text-sm font-black text-white">01</span>
                <span class="font-bold text-slate-500">Payroll Services</span>
                <strong class="mt-2 block text-[24px] leading-[1.2] text-[#0f3d68]">From LKR 6,999/month + per employee</strong>
                <p class="mt-3 leading-[1.7] text-slate-600">ETF, EPF, and payroll management.</p>
            </div>
            <div class="relative overflow-hidden rounded-[14px] border border-emerald-100 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 grid h-12 w-12 place-items-center rounded-lg bg-emerald-600 text-sm font-black text-white">02</span>
                <span class="font-bold text-slate-500">Business Consultancy</span>
                <strong class="mt-2 block text-[24px] leading-[1.2] text-[#0f3d68]">Quoted after review</strong>
                <p class="mt-3 leading-[1.7] text-slate-600">LKR 5,000 - 25,000 per session</p>
            </div>
            <div class="relative overflow-hidden rounded-[14px] border border-amber-100 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 grid h-12 w-12 place-items-center rounded-lg bg-amber-500 text-sm font-black text-white">03</span>
                <span class="font-bold text-slate-500">Company Secretarial</span>
                <strong class="mt-2 block text-[24px] leading-[1.2] text-[#0f3d68]">LKR 15,000 - 40,000/year</strong>
            </div>
            <div class="relative overflow-hidden rounded-[14px] border border-sky-100 bg-white p-7 shadow-[0_14px_32px_rgba(15,65,120,0.12)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                <span class="mb-5 grid h-12 w-12 place-items-center rounded-lg bg-sky-600 text-sm font-black text-white">04</span>
                <span class="font-bold text-slate-500">Accounting Package</span>
                <strong class="mt-2 block text-[24px] leading-[1.2] text-[#0f3d68]">Quoted after review</strong>
            </div>
        </div>

        <div class="mt-10 rounded-[14px] bg-[#0f3d68] p-6 text-center min-[861px]:flex min-[861px]:items-center min-[861px]:justify-between min-[861px]:gap-6 min-[861px]:text-left">
            <p class="font-bold leading-[1.7] text-white">Need a tailored mix of services? Send us your requirements and we will recommend the right support.</p>
            <a href="/contact" class="mt-5 inline-flex min-h-[46px] w-full items-center justify-center rounded-lg bg-white px-[26px] py-[13px] font-extrabold text-[#0f3d68] no-underline transition hover:-translate-y-0.5 hover:bg-blue-50 min-[521px]:w-auto min-[861px]:mt-0">Free Consultation</a>
        </div>
    </section>

</section>

<section class="mt-[58px] py-[82px] bg-blue-50">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">FAQ</h2>
        <div class="mx-auto grid max-w-[900px] gap-4">
            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Why don't you show fixed prices?</h3>
                <p class="leading-[1.7] text-muted">Every business is different &mdash; transaction volumes, staff counts, and reporting needs all vary. We price based on your actual workload to ensure you only pay for what you truly need, nothing more.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Is there a long-term contract?</h3>
                <p class="leading-[1.7] text-muted">No. We offer flexible monthly plans with no long-term commitment required. You can start, pause, or adjust your package as your business evolves.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Can prices increase?</h3>
                <p class="leading-[1.7] text-muted">Only if your business grows significantly &mdash; such as a major increase in transactions, staff, or reporting requirements. We will always discuss and notify you in advance before any pricing change is made.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">What happens if my transaction volume exceeds my package?</h3>
                <p class="leading-[1.7] text-muted">No problem &mdash; we'll simply discuss moving you to the next package that fits your needs. There are no sudden charges or surprises, just a transparent conversation.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Can I start with a lower package and upgrade later?</h3>
                <p class="leading-[1.7] text-muted">Absolutely. Many of our clients start with the Starter Package and upgrade as their business grows. We make the transition smooth and straightforward.</p>
            </div>
        </div>
    </section>

@endsection
