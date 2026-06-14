@extends('layout')

@section('content')

<section class="bg-[linear-gradient(135deg,#eef7ff_0%,#ffffff_52%,#ecfdf5_100%)] px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-24">
    <div class="mx-auto grid max-w-[1160px] items-center gap-10 min-[861px]:grid-cols-[1.05fr_0.95fr]">
        <div>
            <span class="mb-4 inline-flex rounded-full border border-blue-200 bg-white px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-blue-700">Our Services</span>
            <h1 class="mb-6 max-w-[780px] text-[38px] font-black leading-[1.05] text-[#0f3d68] min-[521px]:text-[54px]">Accounting, tax, and advisory support built around your next move.</h1>
            <p class="max-w-[780px] text-base leading-[1.85] text-slate-600 min-[521px]:text-lg">We provide end-to-end financial, compliance, and advisory services designed to help businesses operate efficiently, stay compliant, and achieve sustainable growth.</p>
            <div class="mt-8 flex flex-col gap-3 min-[521px]:flex-row">
                <a href="/contact" class="inline-flex min-h-[48px] w-full items-center justify-center rounded-lg bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-[#0f3d68] min-[521px]:w-auto">Book a Service</a>
                <a href="/pricing" class="inline-flex min-h-[48px] w-full items-center justify-center rounded-lg border border-blue-200 bg-white px-[26px] py-[13px] font-extrabold text-[#0f3d68] no-underline transition hover:-translate-y-0.5 hover:border-blue-400 hover:text-blue-700 min-[521px]:w-auto">View Pricing</a>
            </div>
        </div>

        <div class="rounded-[18px] border border-blue-100 bg-white p-6 shadow-[0_24px_60px_rgba(15,65,120,0.14)]">
            <div class="grid gap-4">
                <div class="rounded-lg bg-blue-50 p-5">
                    <span class="text-sm font-extrabold uppercase tracking-[0.14em] text-blue-700">Core focus</span>
                    <p class="mt-2 text-2xl font-black leading-[1.2] text-[#0f3d68]">Clarity, compliance, and controlled growth.</p>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="rounded-lg border border-slate-200 p-4">
                        <strong class="block text-xl text-[#0f3d68]">Tax</strong>
                        <span class="mt-1 block text-sm font-bold text-slate-500">filing and planning</span>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-4">
                        <strong class="block text-xl text-[#0f3d68]">Payroll</strong>
                        <span class="mt-1 block text-sm font-bold text-slate-500">EPF, ETF, PAYE</span>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-4">
                        <strong class="block text-xl text-[#0f3d68]">Reports</strong>
                        <span class="mt-1 block text-sm font-bold text-slate-500">monthly insights</span>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-4">
                        <strong class="block text-xl text-[#0f3d68]">Advisory</strong>
                        <span class="mt-1 block text-sm font-bold text-slate-500">growth decisions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@php
    $serviceGroups = [
        [
            'label' => 'Core Accounting',
            'title' => 'Daily records, monthly clarity, and decisions backed by numbers.',
            'accent' => 'blue',
            'services' => [
                ['icon' => '01', 'title' => 'Bookkeeping & Financial Record Management', 'body' => 'Accurate and timely recording of all business transactions, ensuring your financial records remain organized and up-to-date.', 'link' => '/pricing', 'linkText' => 'View pricing'],
                ['icon' => '02', 'title' => 'Financial Reporting', 'body' => 'Preparation of reliable financial statements including income statements, balance sheets, and cash flow reports to support informed decision-making and statutory compliance.', 'link' => '/pricing', 'linkText' => 'View pricing'],
                ['icon' => '03', 'title' => 'Management Accounting & Reporting', 'body' => 'Monthly management reports with KPIs, cost analysis, and profitability insights to improve financial control and support strategic business decisions.', 'link' => '/pricing', 'linkText' => 'View pricing'],
            ],
        ],
        [
            'label' => 'Taxation & Compliance',
            'title' => 'Stay compliant without letting tax work slow the business down.',
            'accent' => 'emerald',
            'services' => [
                ['icon' => '04', 'title' => 'Corporate & Personal Tax Services', 'body' => 'Comprehensive tax compliance and advisory services for both businesses and individuals, including tax planning, preparation, and filing in line with Sri Lankan tax regulations.', 'link' => '/pricing', 'linkText' => 'View tax pricing'],
                ['icon' => '05', 'title' => 'VAT & Statutory Compliance', 'body' => 'Support with VAT registration, monthly filings, and other indirect tax compliance requirements where applicable.', 'link' => '/pricing', 'linkText' => 'View pricing'],
            ],
        ],
        [
            'label' => 'Assurance & Secretarial',
            'title' => 'Governance, registration, and audit support handled with care.',
            'accent' => 'amber',
            'services' => [
                ['icon' => '06', 'title' => 'Auditing Services', 'body' => 'Independent audit support and financial reviews ensuring accuracy, transparency, and compliance with applicable accounting and auditing standards.', 'link' => '/contact', 'linkText' => 'Discuss audit support'],
                ['icon' => '07', 'title' => 'Company Incorporation & Secretarial Services', 'body' => 'End-to-end company registration and incorporation services, along with ongoing secretarial support including statutory filings, ROC compliance, and corporate governance requirements.', 'link' => '/contact', 'linkText' => 'Discuss registration'],
            ],
        ],
        [
            'label' => 'Strategic & Digital',
            'title' => 'Systems, forecasts, and practical advisory for the next stage.',
            'accent' => 'sky',
            'services' => [
                ['icon' => '08', 'title' => 'Financial Planning & Analysis (FP&A)', 'body' => 'Budgeting, forecasting, and performance analysis to improve financial control, optimize costs, and support long-term business growth.', 'link' => '/pricing', 'linkText' => 'View advisory pricing'],
                ['icon' => '09', 'title' => 'Business Advisory & Startup Support', 'body' => 'Strategic guidance for business growth, including startup setup support, business structuring, financial planning, cash flow management, and operational guidance to help new businesses establish a strong foundation.', 'link' => '/pricing', 'linkText' => 'View pricing'],
                ['icon' => '10', 'title' => 'Banking & Funding Support', 'body' => 'Preparation of financial projections and documentation required for bank loans, funding applications, and investor readiness.', 'link' => '/contact', 'linkText' => 'Discuss funding support'],
                ['icon' => '11', 'title' => 'Accounting Software Setup & Automation', 'body' => 'Implementation and optimization of cloud accounting systems such as Xero or QuickBooks, including chart of accounts setup, process automation, and digital transformation support.', 'link' => '/contact', 'linkText' => 'Discuss setup'],
            ],
        ],
    ];
@endphp

<section class="bg-white px-6 py-16 min-[861px]:px-[70px] min-[861px]:py-20">
    <div class="mx-auto grid max-w-[1160px] gap-12">
        @foreach ($serviceGroups as $group)
            @php
                $accentClasses = [
                    'blue' => ['badge' => 'bg-blue-700', 'soft' => 'bg-blue-50 border-blue-100 text-blue-700', 'link' => 'text-blue-700 hover:text-blue-900'],
                    'emerald' => ['badge' => 'bg-emerald-600', 'soft' => 'bg-emerald-50 border-emerald-100 text-emerald-700', 'link' => 'text-emerald-700 hover:text-emerald-900'],
                    'amber' => ['badge' => 'bg-amber-500', 'soft' => 'bg-amber-50 border-amber-100 text-amber-700', 'link' => 'text-amber-700 hover:text-amber-900'],
                    'sky' => ['badge' => 'bg-sky-600', 'soft' => 'bg-sky-50 border-sky-100 text-sky-700', 'link' => 'text-sky-700 hover:text-sky-900'],
                ][$group['accent']];
            @endphp

            <div class="grid gap-6 min-[861px]:grid-cols-[0.78fr_1.22fr]">
                <div class="rounded-[14px] border {{ $accentClasses['soft'] }} p-6">
                    <span class="text-sm font-extrabold uppercase tracking-[0.16em]">{{ $group['label'] }}</span>
                    <h2 class="mt-4 text-[28px] font-black leading-[1.12] text-[#0f3d68]">{{ $group['title'] }}</h2>
                </div>

                <div class="grid gap-5 {{ count($group['services']) > 2 ? 'min-[861px]:grid-cols-2' : '' }}">
                    @foreach ($group['services'] as $service)
                        <div class="group flex min-h-[260px] flex-col rounded-[14px] border border-slate-200 bg-white p-6 shadow-[0_14px_32px_rgba(15,65,120,0.10)] transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(15,65,120,0.16)]">
                            <span class="mb-5 grid h-12 w-12 place-items-center rounded-lg {{ $accentClasses['badge'] }} text-sm font-black text-white">{{ $service['icon'] }}</span>
                            <h3 class="mb-3 text-lg font-bold leading-tight text-[#0f3d68]">{{ $service['title'] }}</h3>
                            <p class="mb-5 leading-[1.7] text-slate-600">{{ $service['body'] }}</p>
                            <a href="{{ $service['link'] }}" class="mt-auto font-extrabold no-underline {{ $accentClasses['link'] }}">{{ $service['linkText'] }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="bg-[#0f3d68] px-6 py-14 text-white min-[861px]:px-[70px]">
    <div class="mx-auto max-w-[1100px] min-[861px]:flex min-[861px]:items-center min-[861px]:justify-between min-[861px]:gap-8">
        <div>
            <h2 class="text-[30px] font-black leading-[1.15]">Not sure which service fits?</h2>
            <p class="mt-3 max-w-[680px] leading-[1.8] text-blue-50">Tell us about your business, transaction volume, team size, and compliance needs. We will help you choose the right support package.</p>
        </div>
        <a href="/contact" class="mt-6 inline-flex min-h-[48px] w-full items-center justify-center rounded-lg bg-white px-[26px] py-[13px] font-extrabold text-[#0f3d68] no-underline transition hover:-translate-y-0.5 hover:bg-blue-50 min-[521px]:w-auto min-[861px]:mt-0">Free Consultation</a>
    </div>
</section>

@endsection
