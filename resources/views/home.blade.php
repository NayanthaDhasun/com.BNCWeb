@extends('layout')

@section('content')

<section class="flex min-h-[500px] items-center justify-start bg-[linear-gradient(90deg,rgba(5,22,48,0.9)_0%,rgba(11,45,92,0.78)_43%,rgba(7,94,184,0.34)_100%),linear-gradient(180deg,rgba(4,18,39,0.38),rgba(4,18,39,0.52)),url('/images/ChatGPT%20Image%20Jun%2014,%202026,%2007_13_14%20PM.png')] bg-cover bg-center px-5 py-16 text-left text-white min-[521px]:min-h-[560px] min-[521px]:px-[70px] min-[521px]:py-20">
    <div class="max-w-[880px] [text-shadow:0_3px_18px_rgba(0,0,0,0.28)]">
        <h1 class="mb-5 text-[34px] leading-[1.08] font-bold min-[521px]:text-[56px] max-[860px]:min-[521px]:text-[42px]">Navigate Your Business to Success</h1>
        <p class="mb-[35px] max-w-[760px] text-base leading-[1.6] text-[#dcecff] min-[521px]:text-[22px]">Blue Navigate Consulting is a trusted accounting, tax, and business advisory firm providing
end-to-end financial solutions for SMEs, startups, and individuals across Sri Lanka and globally.
Our expertise spans bookkeeping, financial reporting, taxation, auditing, FP&A, company
secretarial services, and virtual CFO support — delivering strategic financial guidance tailored to
your business needs.
With a commitment to accuracy, integrity, and long-term value, we help businesses strengthen
financial performance, maintain compliance, and achieve sustainable growth with confidence.</p>
        <div class="flex flex-wrap gap-3.5">
            <a href="/services" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">View All Services</a>
            <a href="/contact" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline transition hover:-translate-y-0.5  hover:bg-blue-800 min-[521px]:w-auto">Free Consultation</a>
        </div>
    </div>
</section>

<section class="bg-brand-50 px-6 py-16 text-center min-[861px]:px-[70px] min-[861px]:py-20">
    <h2 class="mb-3.5 text-[38px] font-bold text-brand-800">Our Services</h2>
    <p class="mx-auto mb-10 max-w-[720px] text-lg leading-[1.7] text-muted">Accounting, tax, compliance, and advisory services designed to help your business operate with clarity and confidence.</p>

    <div class="mx-auto grid max-w-[1120px] grid-cols-1 gap-5 min-[721px]:grid-cols-2 min-[1100px]:grid-cols-5">
        <div class="group relative overflow-hidden rounded-lg border border-blue-100 bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100 text-xl font-extrabold text-blue-700">01</span>
            <h3 class="mb-3 text-lg font-bold leading-tight text-brand-800">Bookkeeping and Management Accounting Service</h3>
            <div class="pointer-events-none absolute -bottom-10 -right-8 h-24 w-24 rounded-full bg-blue-100/70 transition group-hover:scale-125"></div>
        </div>

        <div class="group relative overflow-hidden rounded-lg border border-emerald-100 bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-100 text-xl font-extrabold text-emerald-700">02</span>
            <h3 class="mb-3 text-lg font-bold leading-tight text-brand-800">Financial Reporting</h3>
            <div class="pointer-events-none absolute -bottom-10 -right-8 h-24 w-24 rounded-full bg-emerald-100/70 transition group-hover:scale-125"></div>
        </div>

        <div class="group relative overflow-hidden rounded-lg border border-sky-100 bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-sky-100 text-xl font-extrabold text-sky-700">03</span>
            <h3 class="mb-3 text-lg font-bold leading-tight text-brand-800">Taxation Service</h3>
            <div class="pointer-events-none absolute -bottom-10 -right-8 h-24 w-24 rounded-full bg-sky-100/70 transition group-hover:scale-125"></div>
        </div>

        <div class="group relative overflow-hidden rounded-lg border border-violet-100 bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-violet-100 text-xl font-extrabold text-violet-700">04</span>
            <h3 class="mb-3 text-lg font-bold leading-tight text-brand-800">Company Secretarial & Registration Service</h3>
            <div class="pointer-events-none absolute -bottom-10 -right-8 h-24 w-24 rounded-full bg-violet-100/70 transition group-hover:scale-125"></div>
        </div>

        <div class="group relative overflow-hidden rounded-lg border border-amber-100 bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <span class="mb-6 flex h-12 w-12 items-center justify-center rounded-lg bg-amber-100 text-xl font-extrabold text-amber-700">05</span>
            <h3 class="mb-3 text-lg font-bold leading-tight text-brand-800">Auditing Services</h3>
            <div class="pointer-events-none absolute -bottom-10 -right-8 h-24 w-24 rounded-full bg-amber-100/70 transition group-hover:scale-125"></div>
        </div>
    </div>

    <a href="/services" class="mt-9 inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:text-white hover:bg-blue-800 min-[521px]:w-auto">View All Services</a>
</section>

<section class="bg-white px-6 py-16 text-center min-[861px]:px-[70px] min-[861px]:py-20">
    <h2 class="mb-3.5 text-[38px] font-bold text-brand-800">How It Works</h2>
    <p class="mx-auto mb-10 max-w-[720px] text-lg leading-[1.7] text-muted">A simple process from first message to ongoing support.</p>

    <div class="relative mx-auto grid max-w-[1100px] gap-7 text-left before:absolute before:left-[31px] before:top-8 before:hidden before:h-[calc(100%-64px)] before:w-px before:bg-soft-border min-[721px]:before:block">
        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xl font-extrabold text-blue-700">1</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">Reach out to us</h3>
                <p class="text-lg leading-[1.55] text-muted">Send us a message via email, WhatsApp, or our contact form. Tell us a little about your business.</p>
            </div>
        </div>

        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-xl font-extrabold text-emerald-700">2</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">Free consultation</h3>
                <p class="text-lg leading-[1.55] text-muted">We have a quick chat to understand what you need - no obligation, no jargon.</p>
            </div>
        </div>

        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-teal-100 text-xl font-extrabold text-teal-700">3</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">We send you a proposal</h3>
                <p class="text-lg leading-[1.55] text-muted">You get a clear, tailored package with transparent pricing - no hidden fees.</p>
            </div>
        </div>

        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-violet-100 text-xl font-extrabold text-violet-700">4</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">We get you set up</h3>
                <p class="text-lg leading-[1.55] text-muted">Sign the agreement and share access. We handle the rest - quick and smooth.</p>
            </div>
        </div>

        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-xl font-extrabold text-indigo-700">5</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">Your work gets done</h3>
                <p class="text-lg leading-[1.55] text-muted">Our qualified team manages your accounts, tax, and compliance accurately and on time.</p>
            </div>
        </div>

        <div class="relative flex gap-5 rounded-lg border border-soft-border bg-white p-6 shadow-brand">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-amber-100 text-xl font-extrabold text-amber-700">6</span>
            <div>
                <h3 class="mb-2 text-xl font-bold text-ink">Ongoing support</h3>
                <p class="text-lg leading-[1.55] text-muted">Regular reports, compliance updates, and advisory - we stay by your side as you grow.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white px-6 py-16  text-center min-[861px]:px-[70px] min-[861px]:py-20">
    <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">Why Choose Us</h2>
    <div class="grid grid-cols-1 gap-[18px]    min-[861px]:grid-cols-3">
        <div class="rounded-[14px] border border-soft-border bg-blue-100 p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">Transparent Pricing - No Hidden Fees</strong>
            <p class="font-normal leading-[1.65] text-muted">We believe in honest and transparent pricing, giving our clients complete clarity with no unexpected costs or hidden charges.</p>
        </div>
        <div class="rounded-[14px]  bg-white p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">Solutions Tailored to Your Business Needs</strong>
            <p class="font-normal leading-[1.65] text-muted">We take the time to deeply understand your business, challenges, and goals to provide practical and effective financial solutions - not simply sell services.</p>
        </div>
        <div class="rounded-[14px] border border-soft-border bg-blue-100 p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">Experienced Professionals</strong>
            <p class="font-normal leading-[1.65] text-muted">Backed by strong experience in accounting, taxation, and financial management across diverse industries.</p>
        </div>
        <div class="rounded-[14px]  bg-white p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">Qualified Accountants</strong>
            <p class="font-normal leading-[1.65] text-muted">Work handled by professionally qualified accounting and finance experts, ensuring accuracy, compliance, and reliability.</p>
        </div>
        <div class="rounded-[14px] border border-soft-border bg-blue-100 p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">Client-Focused Approach</strong>
            <p class="font-normal leading-[1.65] text-muted">Responsive, practical, and personalized support designed to help your business operate with confidence and efficiency.</p>
        </div>
        <div class="rounded-[14px]  bg-white p-[18px] text-left font-extrabold text-brand-800 shadow-brand">
            <strong class="mb-2.5 block">End-to-End Business Support</strong>
            <p class="font-normal leading-[1.65] text-muted">From bookkeeping and compliance to strategic advisory and business support, we assist your business at every stage of growth.</p>
        </div>
    </div>
</section>

<section class="bg-blue-50 px-6 py-16 text-center min-[861px]:px-[70px] min-[861px]:py-20">
    <h2 class="mb-[22px] text-center text-[34px] font-bold text-brand-800">FAQ</h2>
    <div class="mx-auto grid max-w-[900px] gap-4">
        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">What type of businesses do you support?</h3>
            <p class="leading-[1.7] text-muted">We support individuals, freelancers, startups, small businesses, and growing SMEs &mdash; based in Sri Lanka or operating globally &mdash; that need accounting, tax, payroll, and business advisory support.</p>
        </div>

        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">Can you help with tax and compliance?</h3>
            <p class="leading-[1.7] text-muted">Yes. We help with VAT, PAYE, EPF, ETF, income tax, company tax calculations, and related compliance support &mdash; so you stay fully compliant without the stress.</p>
        </div>

        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">Do you offer customized services?</h3>
            <p class="leading-[1.7] text-muted">Absolutely. Every business is different, so we tailor our support based on your transaction volume, team size, reporting needs, and stage of growth &mdash; you only pay for what you actually need.</p>
        </div>

        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">Do I need to visit your office?</h3>
            <p class="leading-[1.7] text-muted">Not necessarily. We serve clients across Sri Lanka and globally, with remote support available for accounting, tax, payroll, and advisory needs.</p>
        </div>
    </div>
</section>

<section class="bg-brand-50 px-6 py-16 text-center min-[861px]:px-[70px] min-[861px]:py-20">
  <div class="mx-auto grid max-w-[1100px] grid-cols-1 gap-8 items-center text-left min-[861px]:grid-cols-2">
    
    <div class="w-full h-full flex justify-center items-center">
      <img src="/images/contactImage.jpeg" alt="Contact Us" class="max-w-full h-auto rounded-[14px] object-cover" />
    </div>

    <div>
      <h2 class="mb-[22px] text-left text-[34px] font-bold text-brand-800">Contact Details</h2>
      
      <div class="grid grid-cols-1 gap-[18px]">
        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Business Inquiries</span>
          <a href="mailto:info@bncpartner.com" class="font-extrabold text-gray-500 no-underline text-blue">info@bncpartner.com</a>
        </div>

        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">WhatsApp</span>
          <a href="https://wa.me/94717092958" class="font-extrabold leading-[1.4] text-gray-500 no-underline hover:text-blue-700">+94 71 709 2958</a>
        </div>

        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Consultation Hours</span>
          <strong class="leading-[1.4] text-gray-500">Available every day — we respond within 24 hours</strong>
        </div>

        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Service Area</span>
          <strong class="leading-[1.4] text-gray-500">Serving clients across Sri Lanka and globally</strong>
        </div>

        <div class="grid gap-3 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Social Media</span>
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
      </div>

      <div class="text-left mt-9">
        <a href="/contact" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">Contact Us</a>
      </div>
    </div>

  </div>
</section>

@endsection
