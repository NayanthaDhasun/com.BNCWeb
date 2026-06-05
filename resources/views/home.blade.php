@extends('layout')

@section('content')

<section class="hero">
    <div class="hero-content">
        <h1>Navigate Your Business to Success</h1>
        <p>End-to-end accounting and advisory solutions - including bookkeeping, financial reporting, taxation, auditing, FP&A, company secretarial services, and virtual CFO support - designed to help your business grow with confidence.</p>
        <div class="hero-actions">
            <a href="/services" class="btn btn-primary">Explore Services</a>
            <a href="/contact" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>
</section>

<section class="services">
    <h2>Our Services</h2>
    <p class="section-intro">Accounting, tax, compliance, and advisory services designed to help your business operate with clarity and confidence.</p>

    <div class="cards">
        <div class="card">
            <h3>Bookkeeping Services</h3>
            <p>Accurate and timely maintenance of your financial records, ensuring all transactions are properly recorded and your books remain fully up to date.</p>
            <a href="/services" class="text-link">View services</a>
        </div>

        <div class="card">
            <h3>Financial Reporting</h3>
            <p>Preparation of reliable financial statements, including income statements, balance sheets, and cash flow reports to support informed business decisions and regulatory compliance.</p>
            <a href="/services" class="text-link">View services</a>
        </div>

        <div class="card">
            <h3>Financial Planning & Analysis (FP&A)</h3>
            <p>Structured budgeting, forecasting, and performance analysis to help businesses improve financial control, manage costs, and support sustainable growth.</p>
            <a href="/services" class="text-link">View services</a>
        </div>

        <div class="card">
            <h3>Taxation Services</h3>
            <p>Comprehensive tax compliance and advisory services for corporate and personal income tax, including tax planning, preparation, and filing in line with Sri Lankan tax regulations.</p>
            <a href="/pricing" class="text-link">View tax pricing</a>
        </div>

        <div class="card">
            <h3>Auditing Services</h3>
            <p>Independent audit support and financial reviews to ensure accuracy, transparency, and compliance with applicable accounting and auditing standards.</p>
            <a href="/services" class="text-link">View services</a>
        </div>

        <div class="card">
            <h3>Company Secretarial & Registration Services</h3>
            <p>End-to-end support for company incorporation and registration, with statutory compliance, ROC filings, and regulatory obligations to keep your business fully compliant.</p>
            <a href="/services" class="text-link">View services</a>
        </div>
    </div>

    <a href="/services" class="btn btn-primary services-button">View All Services</a>
</section>

<section class="home-why">
    <h2>Why Choose Us</h2>
    <div class="why-grid detailed-why-grid">
        <div>
            <strong>Transparent Pricing - No Hidden Fees</strong>
            <p>We believe in honest and transparent pricing, giving our clients complete clarity with no unexpected costs or hidden charges.</p>
        </div>
        <div>
            <strong>Solutions Tailored to Your Business Needs</strong>
            <p>We take the time to deeply understand your business, challenges, and goals to provide practical and effective financial solutions - not simply sell services.</p>
        </div>
        <div>
            <strong>Experienced Professionals</strong>
            <p>Backed by strong experience in accounting, taxation, and financial management across diverse industries.</p>
        </div>
        <div>
            <strong>Qualified Accountants</strong>
            <p>Work handled by professionally qualified accounting and finance experts, ensuring accuracy, compliance, and reliability.</p>
        </div>
        <div>
            <strong>Client-Focused Approach</strong>
            <p>Responsive, practical, and personalized support designed to help your business operate with confidence and efficiency.</p>
        </div>
        <div>
            <strong>End-to-End Business Support</strong>
            <p>From bookkeeping and compliance to strategic advisory and business support, we assist your business at every stage of growth.</p>
        </div>
    </div>
</section>

<section class="home-faq">
    <h2>FAQ</h2>
    <div class="faq-list">
        <div class="faq-item">
            <h3>Why don't you show fixed prices?</h3>
            <p>Every business is different - we price based on workload to ensure fairness.</p>
        </div>

        <div class="faq-item">
            <h3>Is there a long-term contract?</h3>
            <p>No - flexible monthly plans are available.</p>
        </div>

        <div class="faq-item">
            <h3>Can prices increase?</h3>
            <p>Only if your business grows significantly. We will always inform you before any pricing change.</p>
        </div>
    </div>
</section>

<section class="home-contact">
    <h2>Contact Details</h2>
    <div class="contact-summary-grid">
        <div class="contact-summary-card">
            <span>Business Inquiries</span>
            <a href="mailto:nayanthasr@gmail.com" class="text-link">nayanthasr@gmail.com</a>
        </div>

        <div class="contact-summary-card">
            <span>Consultation Hours</span>
            <strong>Available every day</strong>
        </div>

        <div class="contact-summary-card">
            <span>Branches</span>
            <strong>Kandy and Colombo</strong>
        </div>
    </div>

    <a href="/contact" class="btn btn-primary services-button">Contact Us</a>
</section>

@endsection
