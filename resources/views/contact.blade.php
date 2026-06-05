@extends('layout')

@section('content')

<section class="mx-auto w-[min(1180px,calc(100%-40px))] py-[82px]">
    <div class="mb-9 max-w-[780px]">
        <h1 class="mb-[22px] text-[34px] leading-[1.15] font-bold text-brand-800 min-[521px]:text-[44px]">Contact Us</h1>
        <p class="mb-5 max-w-[760px] text-base leading-[1.8] text-muted min-[521px]:text-lg">
            Talk to Blue Navigate Consulting about accounting, tax, compliance,
            company secretarial, advisory, or virtual CFO support.
        </p>
    </div>

    <div class="grid grid-cols-1 items-start gap-7 min-[861px]:grid-cols-[0.85fr_1.15fr]">
        <div class="grid gap-[18px]">
            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-brand">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Business Inquiries</h2>
                <p class="mb-3 leading-[1.7] text-muted">Send us a message about accounting, tax, advisory, company secretarial, or virtual CFO services.</p>
                <a href="mailto:nayanthasr@gmail.com" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">nayanthasr@gmail.com</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-brand">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Consultation Hours</h2>
                <p class="mb-3 leading-[1.7] text-muted">Available every day</p>
                <strong class="text-ink">24×7 Business Support</strong>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-brand">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Branches</h2>
                <p class="mb-3 leading-[1.7] text-muted">Serving clients through our Kandy and Colombo branches.</p>
                <strong class="text-ink">Kandy and Colombo</strong>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-brand">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">What to Include</h2>
                <p class="mb-3 leading-[1.7] text-muted">Briefly describe your business, the service you need, and whether you require monthly support, tax filing, registration, or advisory services.</p>
            </div>
        </div>

        <form class="grid gap-[18px] rounded-lg border border-soft-border bg-white p-[30px] shadow-brand" action="/contact" method="POST">
            @csrf

            @if (session('status'))
                <p class="rounded-lg border border-[#9ed8b2] bg-[#e9f8ef] px-4 py-3.5 font-extrabold leading-[1.6] text-[#14532d]">{{ session('status') }}</p>
            @endif

            @if ($errors->any())
                <div class="rounded-lg border border-[#fecdd3] bg-[#fff1f2] px-4 py-3.5 leading-[1.6] text-[#9f1239]">
                    <p class="mb-2 font-extrabold">Please check the form and try again.</p>
                    <ul class="pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid gap-2">
                <label for="name" class="font-extrabold text-brand-800">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your name" value="{{ old('name') }}" required class="w-full rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">
            </div>

            <div class="grid gap-2">
                <label for="email" class="font-extrabold text-brand-800">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required class="w-full rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">
            </div>

            <div class="grid gap-2">
                <label for="service" class="font-extrabold text-brand-800">Service Interest</label>
                <select id="service" name="service" required class="w-full rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">
                    <option @selected(old('service') === 'Bookkeeping Services')>Bookkeeping Services</option>
                    <option @selected(old('service') === 'Financial Reporting')>Financial Reporting</option>
                    <option @selected(old('service') === 'Taxation Services')>Taxation Services</option>
                    <option @selected(old('service') === 'Individual Tax Services')>Individual Tax Services</option>
                    <option @selected(old('service') === 'Company Tax')>Company Tax</option>
                    <option @selected(old('service') === 'Auditing Services')>Auditing Services</option>
                    <option @selected(old('service') === 'Company Secretarial & Registration')>Company Secretarial & Registration</option>
                    <option @selected(old('service') === 'Advisory and CFO')>Advisory and CFO</option>
                    <option @selected(old('service') === 'Exclusive Virtual Services')>Exclusive Virtual Services</option>
                    <option @selected(old('service') === 'Accounting Software Setup')>Accounting Software Setup</option>
                </select>
            </div>

            <div class="grid gap-2">
                <label for="phone" class="font-extrabold text-brand-800">Contact Number (Optional)</label>
                <input type="tel" id="phone" name="phone" placeholder="Your contact number" value="{{ old('phone') }}" class="w-full rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">
            </div>

            <div class="grid gap-2">
                <label for="message" class="font-extrabold text-brand-800">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Tell us what you need help with" required class="w-full resize-y rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">{{ old('message') }}</textarea>
            </div>

            <div class="flex flex-wrap gap-3">
                <button type="submit" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-brand-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-brand-800 min-[521px]:w-auto">Send Message</button>
                <button type="submit" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-soft-border bg-white px-[26px] py-[13px] font-extrabold text-brand-700 no-underline transition hover:-translate-y-0.5 hover:border-[#b9d8f4] hover:bg-brand-100 min-[521px]:w-auto">Send Email</button>
            </div>
        </form>
    </div>
</section>

@endsection
