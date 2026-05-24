@extends('layout')

@section('content')

<section class="page services-page">
    <h1>Business Consulting Services</h1>
    <p>
        Practical consulting services designed to help businesses plan clearly,
        improve performance, and build stronger operations.
    </p>

    <div class="cards services-list">
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

        <div class="card">
            <h3>Operational Improvement</h3>
            <p>Workflow reviews, productivity planning, and practical changes that reduce delays and waste.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>

        <div class="card">
            <h3>Marketing & Sales Planning</h3>
            <p>Customer targeting, sales process improvement, and growth campaigns built around measurable goals.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>

        <div class="card">
            <h3>Startup Advisory</h3>
            <p>Business model planning, launch strategy, funding preparation, and early-stage growth guidance.</p>
            <a href="/pricing" class="text-link">View plans</a>
        </div>
    </div>
</section>

@endsection
