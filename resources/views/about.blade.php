@extends('layout')

@section('content')

<section class="page">
    <h1>About Us</h1>
    <p>
        Blue Navigate Consulting is a professional business consulting company.
        We help businesses improve operations, increase profit, and achieve long-term growth.
    </p>

    <p>
        Our mission is to guide companies with clear strategies, financial advice,
        and digital business solutions.
    </p>

    <a href="/pricing" class="btn btn-primary">View Consulting Plans</a>

    <section class="pricing-section about-faq">
        <h2>FAQ</h2>
        <div class="faq-list">
            <div class="faq-item">
                <h3>What type of businesses do you support?</h3>
                <p>We support freelancers, start-ups, small businesses, and growing SMEs that need accounting, tax, payroll, and business advisory support.</p>
            </div>

            <div class="faq-item">
                <h3>Can you help with tax and compliance?</h3>
                <p>Yes. We help with VAT, PAYE, EPF, ETF, income tax, company tax calculations, and related compliance support.</p>
            </div>

            <div class="faq-item">
                <h3>Do you offer customized services?</h3>
                <p>Yes. We can customize support based on your transaction volume, staff count, reporting needs, and business stage.</p>
            </div>
        </div>
    </section>
</section>

@endsection
