@extends('layout')

@section('content')

<section class="page services-page">
    <h1>Our Services</h1>
    <p>
        Comprehensive Accounting, Tax & Advisory Solutions for Growing Businesses
    </p>
    <p>
        We provide end-to-end financial, compliance, and advisory services designed to help businesses operate efficiently, stay compliant, and achieve sustainable growth.
    </p>

    <div class="service-category">
        <h2>Core Accounting Services</h2>
        <div class="cards services-list">
            <div class="card">
                <h3>Bookkeeping & Financial Record Management</h3>
                <p>Accurate and timely recording of all business transactions, ensuring your financial records remain organized and up-to-date.</p>
                <a href="/pricing" class="text-link">View pricing</a>
            </div>

            <div class="card">
                <h3>Financial Reporting</h3>
                <p>Preparation of reliable financial statements including income statements, balance sheets, and cash flow reports to support informed decision-making and statutory compliance.</p>
                <a href="/pricing" class="text-link">View pricing</a>
            </div>

            <div class="card">
                <h3>Management Accounting & Reporting</h3>
                <p>Monthly management reports with KPIs, cost analysis, and profitability insights to improve financial control and support strategic business decisions.</p>
                <a href="/pricing" class="text-link">View pricing</a>
            </div>
        </div>
    </div>

    <div class="service-category">
        <h2>Taxation & Compliance Services</h2>
        <div class="cards services-list two-card-grid">
            <div class="card">
                <h3>Corporate & Personal Tax Services</h3>
                <p>Comprehensive tax compliance and advisory services for both businesses and individuals, including tax planning, preparation, and filing in line with Sri Lankan tax regulations.</p>
                <a href="/pricing" class="text-link">View tax pricing</a>
            </div>

            <div class="card">
                <h3>VAT & Statutory Compliance</h3>
                <p>Support with VAT registration, monthly filings, and other indirect tax compliance requirements where applicable.</p>
                <a href="/pricing" class="text-link">View pricing</a>
            </div>
        </div>
    </div>

    <div class="service-category">
        <h2>Audit & Assurance</h2>
        <div class="cards services-list one-card-grid">
            <div class="card">
                <h3>Auditing Services</h3>
                <p>Independent audit support and financial reviews ensuring accuracy, transparency, and compliance with applicable accounting and auditing standards.</p>
                <a href="/contact" class="text-link">Discuss audit support</a>
            </div>
        </div>
    </div>

    <div class="service-category">
        <h2>Corporate Secretarial Services</h2>
        <div class="cards services-list one-card-grid">
            <div class="card">
                <h3>Company Incorporation & Secretarial Services</h3>
                <p>End-to-end company registration and incorporation services, along with ongoing secretarial support including statutory filings, ROC compliance, and corporate governance requirements.</p>
                <a href="/contact" class="text-link">Discuss registration</a>
            </div>
        </div>
    </div>

    <div class="service-category">
        <h2>Strategic & Advisory Services</h2>
        <div class="cards services-list">
            <div class="card">
                <h3>Financial Planning & Analysis (FP&A)</h3>
                <p>Budgeting, forecasting, and performance analysis to improve financial control, optimize costs, and support long-term business growth.</p>
                <a href="/pricing" class="text-link">View advisory pricing</a>
            </div>

            <div class="card">
                <h3>Business Advisory & Startup Support</h3>
                <p>Strategic guidance for business growth, including startup setup support, business structuring, financial planning, cash flow management, and operational guidance to help new businesses establish a strong foundation.</p>
                <a href="/pricing" class="text-link">View pricing</a>
            </div>

            <div class="card">
                <h3>Banking & Funding Support</h3>
                <p>Preparation of financial projections and documentation required for bank loans, funding applications, and investor readiness.</p>
                <a href="/contact" class="text-link">Discuss funding support</a>
            </div>
        </div>
    </div>

    <div class="service-category">
        <h2>Accounting Systems & Digital Solutions</h2>
        <div class="cards services-list one-card-grid">
            <div class="card">
                <h3>Accounting Software Setup & Automation</h3>
                <p>Implementation and optimization of cloud accounting systems such as Xero or QuickBooks, including chart of accounts setup, process automation, and digital transformation support.</p>
                <a href="/contact" class="text-link">Discuss setup</a>
            </div>
        </div>
    </div>
</section>

@endsection
