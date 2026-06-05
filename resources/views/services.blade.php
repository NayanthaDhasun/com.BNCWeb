@extends('layout')

@section('content')

<section class="mx-auto w-[min(1100px,calc(100%-40px))] py-[82px]">
    <h1 class="mb-[22px] text-[34px] leading-[1.15] font-bold text-brand-800 min-[521px]:text-[44px]">Our Services</h1>
    <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">
        Comprehensive Accounting, Tax & Advisory Solutions for Growing Businesses
    </p>
    <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">
        We provide end-to-end financial, compliance, and advisory services designed to help businesses operate efficiently, stay compliant, and achieve sustainable growth.
    </p>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Core Accounting Services</h2>
        <div class="mt-[34px] mx-auto grid max-w-[1100px] grid-cols-1 gap-[30px] min-[861px]:grid-cols-3">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Bookkeeping & Financial Record Management</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Accurate and timely recording of all business transactions, ensuring your financial records remain organized and up-to-date.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View pricing</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Financial Reporting</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Preparation of reliable financial statements including income statements, balance sheets, and cash flow reports to support informed decision-making and statutory compliance.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View pricing</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Management Accounting & Reporting</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Monthly management reports with KPIs, cost analysis, and profitability insights to improve financial control and support strategic business decisions.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View pricing</a>
            </div>
        </div>
    </div>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Taxation & Compliance Services</h2>
        <div class="mt-[34px] mx-auto grid max-w-[1100px] grid-cols-1 gap-[30px] min-[861px]:grid-cols-2">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Corporate & Personal Tax Services</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Comprehensive tax compliance and advisory services for both businesses and individuals, including tax planning, preparation, and filing in line with Sri Lankan tax regulations.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View tax pricing</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">VAT & Statutory Compliance</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Support with VAT registration, monthly filings, and other indirect tax compliance requirements where applicable.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View pricing</a>
            </div>
        </div>
    </div>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Audit & Assurance</h2>
        <div class="mt-[34px] grid max-w-[760px] grid-cols-1 gap-[30px]">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Auditing Services</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Independent audit support and financial reviews ensuring accuracy, transparency, and compliance with applicable accounting and auditing standards.</p>
                <a href="/contact" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">Discuss audit support</a>
            </div>
        </div>
    </div>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Corporate Secretarial Services</h2>
        <div class="mt-[34px] grid max-w-[760px] grid-cols-1 gap-[30px]">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Company Incorporation & Secretarial Services</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">End-to-end company registration and incorporation services, along with ongoing secretarial support including statutory filings, ROC compliance, and corporate governance requirements.</p>
                <a href="/contact" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">Discuss registration</a>
            </div>
        </div>
    </div>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Strategic & Advisory Services</h2>
        <div class="mt-[34px] mx-auto grid max-w-[1100px] grid-cols-1 gap-[30px] min-[861px]:grid-cols-3">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Financial Planning & Analysis (FP&A)</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Budgeting, forecasting, and performance analysis to improve financial control, optimize costs, and support long-term business growth.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View advisory pricing</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Business Advisory & Startup Support</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Strategic guidance for business growth, including startup setup support, business structuring, financial planning, cash flow management, and operational guidance to help new businesses establish a strong foundation.</p>
                <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">View pricing</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Banking & Funding Support</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Preparation of financial projections and documentation required for bank loans, funding applications, and investor readiness.</p>
                <a href="/contact" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">Discuss funding support</a>
            </div>
        </div>
    </div>

    <div class="mt-[42px] py-[34px]">
        <h2 class="mb-[22px] text-center text-[28px] font-bold text-brand-800 min-[861px]:text-left">Accounting Systems & Digital Solutions</h2>
        <div class="mt-[34px] grid max-w-[760px] grid-cols-1 gap-[30px]">
            <div class="rounded-lg border border-soft-border bg-white px-7 py-[34px] text-left shadow-brand">
                <h3 class="mb-[15px] text-lg font-bold text-brand-800">Accounting Software Setup & Automation</h3>
                <p class="mb-[22px] leading-[1.6] text-muted">Implementation and optimization of cloud accounting systems such as Xero or QuickBooks, including chart of accounts setup, process automation, and digital transformation support.</p>
                <a href="/contact" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">Discuss setup</a>
            </div>
        </div>
    </div>
</section>

@endsection
