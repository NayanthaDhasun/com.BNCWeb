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
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Starting from LKR 10,000<span class="mt-1 block text-base font-bold text-muted">/month</span></p>
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
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">LKR 25,000 - 60,000<span class="mt-1 block text-base font-bold text-muted">/month</span></p>
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
            <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Starting from USD 185 / LKR 60,000<span class="mt-1 block text-base font-bold text-muted">per month</span></p>
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
                <li>Free business consultation - 12 sessions per year</li>
            </ul>
            <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Contact Us</a>
        </div>
    </div>

    <section class="mt-[58px] py-[82px]">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">Tax Services</h2>
        <div class="grid grid-cols-1 items-stretch  gap-[18px] min-[861px]:grid-cols-2">
            <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-1  hover:shadow-brand-lg">
                <h2 class="text-2xl font-bold text-brand-800">Individual Tax Services</h2>
                <p class="text-[28px] leading-[1.2] font-extrabold text-ink">LKR 6,000 - 35,000</p>
                <p class="font-bold leading-[1.6] text-muted">Personal tax filing, registration, and compliance support.</p>
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
                <h3 class="mt-1 text-lg font-bold text-brand-800">Add-On Services</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-[#b9d8f4] [&>li]:before:bg-brand-100 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-brand-700 [&>li]:after:content-['']">
                    <li>TIN Registration Only - LKR 2,000</li>
                    <li>Support for Tax Audits & Queries</li>
                </ul>
                <a href="/contact" class="mt-auto inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Contact Us</a>
            </div>

            <div class="relative flex flex-col gap-4 rounded-[14px] border border-soft-border bg-white p-8 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h2 class="text-2xl font-bold text-brand-800">Company Tax</h2>
                <p class="text-[28px] leading-[1.2] font-extrabold text-ink">Quoted after review</p>
                <p class="font-bold leading-[1.6] text-muted">Corporate tax setup, filing, advisory, and ongoing compliance management.</p>
                <h3 class="mt-1 text-lg font-bold text-brand-800">Services Include</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-emerald-200 [&>li]:before:bg-emerald-50 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-emerald-600 [&>li]:after:content-['']">
    <li>Corporate Income Tax Return Preparation & Filing</li>
    <li>Corporate TIN Registration & Tax Setup</li>
    <li>Tax Computation & Adjustments</li>
    <li>Quarterly Income Tax Estimate Preparation</li>
    <li>Tax Compliance & Advisory Support</li>
    <li>IRD Correspondence & Clarification Support</li>
    <li>Corporate Tax Planning Assistance</li>
    <li>Annual Tax Compliance Management</li>
</ul>
                <h3 class="mt-1 text-lg font-bold text-brand-800">Add-On Services</h3>
                <ul class="my-2 grid list-none gap-2.5 p-0 text-ink [&>li]:relative [&>li]:pl-[26px] [&>li]:leading-[1.5] [&>li]:before:absolute [&>li]:before:left-0 [&>li]:before:top-[3px] [&>li]:before:h-4 [&>li]:before:w-4 [&>li]:before:rounded-full [&>li]:before:border [&>li]:before:border-[#b9d8f4] [&>li]:before:bg-brand-100 [&>li]:before:content-[''] [&>li]:after:absolute [&>li]:after:left-[5px] [&>li]:after:top-2 [&>li]:after:h-1 [&>li]:after:w-[7px] [&>li]:after:-rotate-45 [&>li]:after:border-b-2 [&>li]:after:border-l-2 [&>li]:after:border-brand-700 [&>li]:after:content-['']">
                    <li>VAT Handling - registration, filing, and compliance support</li>
                    <li>Support for Tax Audits & Queries</li>
                </ul>
                
            </div>
        </div>
    </section>

    <section class="mt-[58px]  py-[82px]">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">Customized Support</h2>
        <div class="grid grid-cols-1 gap-[18px]  shadow-[0_14px_28px_rgba(7,94,184,0.25)] min-[861px]:grid-cols-3">
            <div class="grid gap-2 rounded-[14px] bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Advisory and CFO</span>
                <strong class="leading-[1.4] text-brand-800">Starting from USD 185 / LKR 60,000 per month</strong>
            </div>
            <div class="grid gap-2 rounded-[14px]  bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Exclusive Virtual Services</span>
                <strong class="leading-[1.4] text-brand-800">Virtual accounting, finance, compliance, and CFO support</strong>
            </div>
            <div class="grid gap-2 rounded-[14px]  bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Business Consultancy</span>
                <strong class="leading-[1.4] text-brand-800">LKR 5,000 - 25,000 per session</strong>
            </div>
            <div class="grid gap-2 rounded-[14px]  bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Payroll Services</span>
                <strong class="leading-[1.4] text-brand-800">From LKR 8,000/month + per employee</strong>
            </div>
            <div class="grid gap-2 rounded-[14px]  bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Company Secretarial</span>
                <strong class="leading-[1.4] text-brand-800">LKR 15,000 - 40,000/year</strong>
            </div>
            <div class="grid gap-2 rounded-[14px]  bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <span class="font-bold text-muted">Accounting Package Setup</span>
                <strong class="leading-[1.4] text-brand-800">Quoted after review</strong>
            </div>
        </div>
    </section>

</section>

<section class="mt-[58px] py-[82px] bg-blue-50">
        <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">Common Questions About Our Services</h2>
        <div class="mx-auto grid max-w-[900px] gap-4">
            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Why don't you show fixed prices?</h3>
                <p class="leading-[1.7] text-muted">Every business is different - we price based on workload to ensure fairness.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Is there a long-term contract?</h3>
                <p class="leading-[1.7] text-muted">No - flexible monthly plans are available.</p>
            </div>

            <div class="rounded-[14px] border border-soft-border bg-white p-6 shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
                <h3 class="mb-2 font-bold text-brand-800">Can prices increase?</h3>
                <p class="leading-[1.7] text-muted">Only if your business grows significantly. We will always inform you before any pricing change.</p>
            </div>
        </div>
    </section>

@endsection
