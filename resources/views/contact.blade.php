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
            <div class="rounded-lg  border border-soft-border bg-white p-6  shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Business Inquiries</h2>
                <p class="mb-3 leading-[1.7] text-muted">Send us a message about accounting, tax, advisory, company secretarial, or virtual CFO services.</p>
                <a href="mailto:info@bncpartner.com" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">info@bncpartner.com</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">WhatsApp</h2>
                <p class="mb-3 leading-[1.7] text-muted">Message us directly for accounting, tax, payroll, or advisory inquiries.</p>
                <a href="https://wa.me/94717092958" class="font-extrabold text-brand-700 no-underline hover:text-brand-900">+94 71 709 2958</a>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Consultation Hours</h2>
                <p class="mb-3 leading-[1.7] text-muted">Available every day</p>
                <strong class="text-ink">We respond within 24 hours</strong>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Service Area</h2>
                <p class="mb-3 leading-[1.7] text-muted">Serving clients across Sri Lanka and globally.</p>
                <strong class="text-ink">Sri Lanka and global clients</strong>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">Social Media</h2>
                <p class="mb-4 leading-[1.7] text-muted">Connect with Blue Navigate Consulting online.</p>
                <div class="grid grid-cols-2 gap-3 min-[521px]:grid-cols-4">
                    <a href="https://www.facebook.com/share/17nT5URZXM/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="group grid min-h-[86px] place-items-center rounded-lg border border-blue-100 bg-blue-50 p-3 text-center no-underline transition hover:-translate-y-0.5 hover:bg-blue-100">
                        <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#1877F2] text-xl font-black text-white">f</span>
                        <span class="mt-2 text-xs font-extrabold text-blue-800">Facebook</span>
                    </a>
                    <a href="https://www.linkedin.com/company/blue-navigate-consulting/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="group grid min-h-[86px] place-items-center rounded-lg border border-sky-100 bg-sky-50 p-3 text-center no-underline transition hover:-translate-y-0.5 hover:bg-sky-100">
                        <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#0A66C2] text-sm font-black text-white">in</span>
                        <span class="mt-2 text-xs font-extrabold text-sky-800">LinkedIn</span>
                    </a>
                    <a href="#" aria-label="Instagram" class="group grid min-h-[86px] place-items-center rounded-lg border border-pink-100 bg-pink-50 p-3 text-center no-underline transition hover:-translate-y-0.5 hover:bg-pink-100">
                        <span class="grid h-10 w-10 place-items-center rounded-lg bg-[linear-gradient(135deg,#f58529,#dd2a7b,#8134af,#515bd4)] text-base font-black text-white">◎</span>
                        <span class="mt-2 text-xs font-extrabold text-pink-800">Instagram</span>
                    </a>
                    <a href="https://wa.me/94717092958" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="group grid min-h-[86px] place-items-center rounded-lg border border-green-100 bg-green-50 p-3 text-center no-underline transition hover:-translate-y-0.5 hover:bg-green-100">
                        <span class="grid h-10 w-10 place-items-center rounded-lg bg-[#25D366] text-sm font-black text-white">WA</span>
                        <span class="mt-2 text-xs font-extrabold text-green-800">WhatsApp</span>
                    </a>
                </div>
            </div>

            <div class="rounded-lg border border-soft-border bg-white p-6 shadow-[0_10px_22px_rgba(7,94,184,0.22)]">
                <h2 class="mb-2.5 text-[22px] font-bold text-brand-800">What to Include</h2>
                <p class="mb-3 leading-[1.7] text-muted">Briefly describe your business, the service you need, and whether you require monthly support, tax filing, registration, or advisory services.</p>
            </div>
        </div>

        <form id="contact-form" class="grid gap-[18px] rounded-lg border border-soft-border bg-white p-[30px] shadow-[0_10px_22px_rgba(7,94,184,0.22)]" action="/contact" method="POST">
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
                <label for="remote_support" class="font-extrabold text-brand-800">Remote/Online Accounting Support</label>
                <select id="remote_support" name="remote_support" required class="w-full rounded-lg border border-soft-border bg-white px-3.5 py-[13px] font-[inherit] text-ink outline-none transition focus:border-brand-600 focus:shadow-[0_0_0_4px_rgba(11,115,217,0.12)]">
                    <option value="" disabled @selected(old('remote_support') === null)>Select an option</option>
                    <option @selected(old('remote_support') === 'Yes, I need remote/online support')>Yes, I need remote/online support</option>
                    <option @selected(old('remote_support') === 'No, I prefer in-person support')>No, I prefer in-person support</option>
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
                <button type="submit" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-brand-700 px-[26px] py-[13px] font-extrabold text-white bg-blue-700 no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">Send Message</button>



                
            </div>
        </form>
    </div>
</section>

<script>
    document.getElementById('contact-form')?.addEventListener('submit', function (event) {
        event.preventDefault();

        if (!this.reportValidity()) {
            return;
        }

        const formData = new FormData(this);
        const message = [
            'New contact message from Blue Navigate Consulting website',
            '',
            `Name: ${formData.get('name')}`,
            `Email: ${formData.get('email')}`,
            `Phone: ${formData.get('phone') || 'Not provided'}`,
            `Service Interest: ${formData.get('service')}`,
            `Remote/Online Accounting Support: ${formData.get('remote_support')}`,
            '',
            'Message:',
            formData.get('message'),
        ].join('\n');

        window.open(`https://wa.me/94717092958?text=${encodeURIComponent(message)}`, '_blank', 'noopener');
    });
</script>

@endsection
