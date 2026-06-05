@extends('layout')

@section('content')

<section class="flex min-h-[500px] items-center justify-start bg-[linear-gradient(90deg,rgba(5,22,48,0.9)_0%,rgba(11,45,92,0.78)_43%,rgba(7,94,184,0.34)_100%),linear-gradient(180deg,rgba(4,18,39,0.38),rgba(4,18,39,0.52)),url('/images/hero-background.png')] bg-cover bg-center px-5 py-16 text-left text-white min-[521px]:min-h-[560px] min-[521px]:px-[70px] min-[521px]:py-20">
    <div class="max-w-[880px] [text-shadow:0_3px_18px_rgba(0,0,0,0.28)]">
        <h1 class="mb-5 text-[34px] leading-[1.08] font-bold min-[521px]:text-[56px] max-[860px]:min-[521px]:text-[42px]">Navigate Your Business to Success</h1>
        <p class="mb-[35px] max-w-[760px] text-base leading-[1.6] text-[#dcecff] min-[521px]:text-[22px]">End-to-end accounting and advisory solutions - including bookkeeping, financial reporting, taxation, auditing, FP&A, company secretarial services, and virtual CFO support - designed to help your business grow with confidence.</p>
        <div class="flex flex-wrap gap-3.5">
            <a href="/services" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">View All Services</a>
            <a href="/contact" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline transition hover:-translate-y-0.5  hover:bg-blue-800 min-[521px]:w-auto">Contact Us</a>
        </div>
    </div>
</section>

<section class="bg-brand-50 px-6 py-16 text-center min-[861px]:px-[70px] min-[861px]:py-20">
    <h2 class="mb-3.5 text-[38px] font-bold text-brand-800">Our Services</h2>
    <p class="mx-auto mb-10 max-w-[720px] text-lg leading-[1.7] text-muted">Accounting, tax, compliance, and advisory services designed to help your business operate with clarity and confidence.</p>

    <div class="mx-auto grid max-w-[1100px] grid-cols-1 gap-[30px] min-[861px]:grid-cols-3">
        <div class="rounded-lg border border-soft-border bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Bookkeeping Services</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">Accurate and timely maintenance of your financial records, ensuring all transactions are properly recorded and your books remain fully up to date.</p>
            <a href="/services" class="font-extrabold text-brand-700 no-underline hover:text-blue-500">View services</a>
        </div>

        <div class="rounded-lg border border-soft-border  bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Financial Reporting</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">Preparation of reliable financial statements, including income statements, balance sheets, and cash flow reports to support informed business decisions and regulatory compliance.</p>
            <a href="/services" class="font-extrabold text-brand-700 no-underline hover:text-blue-500">View services</a>
        </div>

        <div class="rounded-lg border border-soft-border  bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Financial Planning & Analysis (FP&A)</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">Structured budgeting, forecasting, and performance analysis to help businesses improve financial control, manage costs, and support sustainable growth.</p>
            <a href="/services" class="font-extrabold text-brand-700 no-underline hover:text-blue-500">View services</a>
        </div>

        <div class="rounded-lg border border-soft-border  bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Taxation Services</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">Comprehensive tax compliance and advisory services for corporate and personal income tax, including tax planning, preparation, and filing in line with Sri Lankan tax regulations.</p>
            <a href="/pricing" class="font-extrabold text-brand-700 no-underline hover:text-blue-500 ">View tax pricing</a>
        </div>

        <div class="rounded-lg border border-soft-border  bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Auditing Services</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">Independent audit support and financial reviews to ensure accuracy, transparency, and compliance with applicable accounting and auditing standards.</p>
            <a href="/services" class="font-extrabold text-brand-700 no-underline hover:text-blue-500 ">View services</a>
        </div>

        <div class="rounded-lg border border-soft-border  bg-blue-50 px-7 py-[34px] text-left shadow-brand">
            <h3 class="mb-[15px] text-lg font-bold text-brand-800">Company Secretarial & Registration Services</h3>
            <p class="mb-[22px] leading-[1.6] text-muted">End-to-end support for company incorporation and registration, with statutory compliance, ROC filings, and regulatory obligations to keep your business fully compliant.</p>
            <a href="/services" class="font-extrabold hover:text-blue-500 no-underline hover:text-brand-900">View services</a>
        </div>
    </div>

    <a href="/services" class="mt-9 inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:text-white hover:bg-blue-800 min-[521px]:w-auto">View All Services</a>
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
            <h3 class="mb-2 font-bold text-brand-800">Why don't you show fixed prices?</h3>
            <p class="leading-[1.7] text-muted">Every business is different - we price based on workload to ensure fairness.</p>
        </div>

        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">Is there a long-term contract?</h3>
            <p class="leading-[1.7] text-muted">No - flexible monthly plans are available.</p>
        </div>

        <div class="rounded-[14px] border border-soft-border bg-white p-6 text-left shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
            <h3 class="mb-2 font-bold text-brand-800">Can prices increase?</h3>
            <p class="leading-[1.7] text-muted">Only if your business grows significantly. We will always inform you before any pricing change.</p>
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
          <a href="mailto:nayanthasr@gmail.com" class="font-extrabold text-gray-500 no-underline text-blue">nayanthasr@gmail.com</a>
        </div>

        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Consultation Hours</span>
          <strong class="leading-[1.4] text-gray-500">Available every day</strong>
        </div>

        <div class="grid gap-2 rounded-[14px] border border-soft-border bg-white p-[22px] shadow-brand transition hover:-translate-y-1 hover:shadow-brand-lg">
          <span class="text-muted">Branches</span>
          <strong class="leading-[1.4] text-gray-500">Kandy and Colombo</strong>
        </div>
      </div>

      <div class="text-left mt-9">
        <a href="/contact" class="inline-flex min-h-[46px] w-full items-center justify-center rounded-lg border border-transparent bg-blue-700 px-[26px] py-[13px] font-extrabold text-white no-underline shadow-[0_14px_28px_rgba(7,94,184,0.25)] transition hover:-translate-y-0.5 hover:bg-blue-800 min-[521px]:w-auto">Contact Us</a>
      </div>
    </div>

  </div>
</section>

@endsection
