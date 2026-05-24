@extends('layout')

@section('content')

<section class="page pricing-page">
    <h1>Pricing & Packages</h1>
    <p>Professional accounting, tax, payroll, and advisory support for freelancers, start-ups, and growing Sri Lankan SMEs.</p>

    <div class="pricing-grid">
        <div class="pricing-box">
            <div class="package-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M5 20V6.8A2.8 2.8 0 0 1 7.8 4h8.4A2.8 2.8 0 0 1 19 6.8V20l-3.5-2-3.5 2-3.5-2L5 20Zm4-11h6V7H9v2Zm0 4h6v-2H9v2Z"/>
                </svg>
            </div>
            <h2>Starter Package</h2>
            <p class="price">Starting from LKR 10,000<span>/month</span></p>
            <p class="target">For freelancers, small businesses, and start-ups.</p>
            <ul class="plan-services">
                <li>Bookkeeping up to around 150 transactions</li>
                <li>Monthly Profit & Loss</li>
                <li>Bank reconciliation for 1-2 accounts</li>
                <li>Basic tax tracking</li>
                <li>Simple payroll for 0-5 staff</li>
                <li>EPF/ETF/PAYE handling if applicable</li>
                <li>Free Business Consultation</li>
            </ul>
            <a href="/contact" class="btn btn-secondary">Contact Us</a>
        </div>

        <div class="pricing-box featured">
            <div class="badge">Recommended</div>
            <div class="package-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M4 19h16v2H4v-2Zm1-2V9h4v8H5Zm5 0V4h4v13h-4Zm5 0v-6h4v6h-4Z"/>
                </svg>
            </div>
            <h2>Growth Package</h2>
            <p class="price">LKR 25,000 - 60,000<span>/month</span></p>
            <p class="target">For small to medium enterprises.</p>
            <ul class="plan-services">
                <li>Full bookkeeping system</li>
                <li>Monthly financial statements</li>
                <li>Cash flow tracking</li>
                <li>Bank reconciliations for multiple accounts</li>
                <li>Payroll</li>
                <li>VAT/PAYE/EPF/ETF compliance</li>
                <li>Monthly management report</li>
                <li>Basic financial insights</li>
                <li>Free Business Consultation</li>
            </ul>
            <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>

        <div class="pricing-box">
            <div class="package-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2 4 6v6c0 5 3.4 9.7 8 10 4.6-.3 8-5 8-10V6l-8-4Zm1 13.6 3.8-3.8 1.4 1.4L12 19.4l-4.2-4.2 1.4-1.4 2.8 2.8Z"/>
                </svg>
            </div>
            <h2>Advisory / CFO Package</h2>
            <p class="price">LKR 60,000 - 120,000+<span>/month</span></p>
            <p class="target">For growing SMEs and businesses with complex pricing or cash flow.</p>
            <ul class="plan-services">
                <li>Everything in Growth package</li>
                <li>Monthly financial review meeting</li>
                <li>Budgeting & forecasting</li>
                <li>Profitability analysis</li>
                <li>Pricing/margin analysis</li>
                <li>Strategic advisory</li>
                <li>KPI tracking dashboards</li>
                <li>Decision support reports</li>
            </ul>
            <a href="/contact" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>

    <section class="pricing-section">
        <h2>Customized Support</h2>
        <div class="support-grid">
            <div class="support-item">
                <span>Company Tax Calculation</span>
                <strong>LKR 15,000 - 35,000</strong>
            </div>
            <div class="support-item">
                <span>Business Consultancy</span>
                <strong>LKR 5,000 - 25,000 per session</strong>
            </div>
            <div class="support-item">
                <span>Income Tax Filing for Individuals</span>
                <strong>LKR 6,000 - 15,000</strong>
            </div>
            <div class="support-item">
                <span>Payroll Services</span>
                <strong>From LKR 8,000/month + per employee</strong>
            </div>
            <div class="support-item">
                <span>Company Secretarial</span>
                <strong>LKR 15,000 - 40,000/year</strong>
            </div>
            <div class="support-item">
                <span>Accounting Package Setup</span>
                <strong>Quoted after review</strong>
            </div>
        </div>
    </section>

</section>

@endsection
