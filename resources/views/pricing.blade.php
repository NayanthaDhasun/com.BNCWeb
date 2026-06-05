@extends('layout')

@section('content')

<section class="page pricing-page">
    <h1>Pricing & Packages</h1>
    <p>Professional accounting, tax, compliance, advisory, and exclusive virtual CFO support for individuals, start-ups, and growing Sri Lankan businesses.</p>

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
                <li>Free business consultation - 12 sessions per year</li>
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
                <li>Free business consultation - 12 sessions per year</li>
            </ul>
            <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>

        <div class="pricing-box">
            <div class="package-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2 4 6v6c0 5 3.4 9.7 8 10 4.6-.3 8-5 8-10V6l-8-4Zm1 13.6 3.8-3.8 1.4 1.4L12 19.4l-4.2-4.2 1.4-1.4 2.8 2.8Z"/>
                </svg>
            </div>
            <h2>Advisory and CFO Package</h2>
            <p class="price">Starting from USD 185 / LKR 60,000<span>per month</span></p>
            <p class="target">Exclusive virtual CFO services for growing SMEs and businesses with complex pricing, planning, or cash flow needs.</p>
            <ul class="plan-services">
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
            <a href="/contact" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>

    <section class="pricing-section">
        <h2>Tax Services</h2>
        <div class="tax-pricing-grid">
            <div class="pricing-box tax-box">
                <h2>Individual Tax Services</h2>
                <p class="price">LKR 6,000 - 35,000</p>
                <p class="target">Personal tax filing, registration, and compliance support.</p>
                <h3>Services Include</h3>
                <ul class="plan-services">
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
                <h3>Add-On Services</h3>
                <ul class="plan-services">
                    <li>TIN Registration Only - LKR 2,000</li>
                    <li>Support for Tax Audits & Queries</li>
                </ul>
                <a href="/contact" class="btn btn-secondary">Contact Us</a>
            </div>

            <div class="pricing-box tax-box">
                <h2>Company Tax</h2>
                <p class="price">Quoted after review</p>
                <p class="target">Corporate tax setup, filing, advisory, and ongoing compliance management.</p>
                <h3>Services Include</h3>
                <ul class="plan-services">
                    <li>Corporate Income Tax Return Preparation & Filing</li>
                    <li>Corporate TIN Registration & Tax Setup</li>
                    <li>Tax Computation & Adjustments</li>
                    <li>Quarterly Income Tax Estimate Preparation</li>
                    <li>Tax Compliance & Advisory Support</li>
                    <li>IRD Correspondence & Clarification Support</li>
                    <li>Corporate Tax Planning Assistance</li>
                    <li>Annual Tax Compliance Management</li>
                </ul>
                <h3>Add-On Services</h3>
                <ul class="plan-services">
                    <li>VAT Handling - registration, filing, and compliance support</li>
                    <li>Support for Tax Audits & Queries</li>
                </ul>
                <a href="/contact" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <h2>Customized Support</h2>
        <div class="support-grid">
            <div class="support-item">
                <span>Advisory and CFO</span>
                <strong>Starting from USD 185 / LKR 60,000 per month</strong>
            </div>
            <div class="support-item">
                <span>Exclusive Virtual Services</span>
                <strong>Virtual accounting, finance, compliance, and CFO support</strong>
            </div>
            <div class="support-item">
                <span>Business Consultancy</span>
                <strong>LKR 5,000 - 25,000 per session</strong>
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

    <section class="pricing-section">
        <h2>Common Questions About Our Services</h2>
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

</section>

@endsection
