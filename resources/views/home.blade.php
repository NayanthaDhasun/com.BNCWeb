@extends('layout')

@section('content')

<section class="hero">
    <div class="hero-content">
        <h1>Navigate Your Business to Success</h1>
        <p>Professional consulting services for strategy, finance, and digital transformation.</p>
        <div class="hero-actions">
            <a href="/pricing" class="btn btn-primary">Explore Plans</a>
            <a href="/about" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
</section>

<section class="services">
    <h2>Our Services</h2>
    <p class="section-intro">Focused consulting support for planning, performance, operations, and growth.</p>

    <div class="cards">
        <div class="card">
            <h3>Business Strategy</h3>
            <p>Clear growth plans, market positioning, and practical roadmaps to improve business performance.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>

        <div class="card">
            <h3>Financial Consulting</h3>
            <p>Budgeting, forecasting, cost control, and financial guidance for better decision making.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>

        <div class="card">
            <h3>Digital Transformation</h3>
            <p>Modern digital tools, automation, and process improvements to make operations more efficient.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>
    </div>

    <a href="/services" class="btn btn-primary services-button">View All Services</a>
</section>

<section class="home-why">
    <h2>Why Choose Us?</h2>
    <div class="why-grid">
        <div>No hidden fees</div>
        <div>Dedicated accountant</div>
        <div>Fast response time</div>
        <div>Tax & compliance support</div>
        <div>Experience with Sri Lankan SMEs</div>
        <div>Customized monthly support</div>
    </div>
</section>

<section class="home-pricing">
    <h2>Pricing Packages</h2>
    <p class="section-intro">Accounting, tax, payroll, and advisory packages designed for Sri Lankan businesses.</p>

    <div class="pricing-preview-grid">
        <div class="pricing-preview-card">
            <span class="preview-label">Starter Package</span>
            <strong>Starting from LKR 10,000/month</strong>
            <p>For freelancers, small businesses, and start-ups.</p>
            <a href="/pricing" class="text-link">View details</a>
        </div>

        <div class="pricing-preview-card featured-preview">
            <span class="preview-label">Growth Package</span>
            <strong>LKR 25,000 - 60,000/month</strong>
            <p>For small to medium enterprises.</p>
            <a href="/pricing" class="text-link">View details</a>
        </div>

        <div class="pricing-preview-card">
            <span class="preview-label">Advisory / CFO Package</span>
            <strong>LKR 60,000 - 120,000+/month</strong>
            <p>For growing SMEs with complex pricing or cash flow.</p>
            <a href="/pricing" class="text-link">View details</a>
        </div>
    </div>

    <a href="/pricing" class="btn btn-primary services-button">View All Packages</a>
</section>

@endsection
