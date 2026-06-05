@extends('layout')

@section('content')

<section class="page contact-page">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>
            Talk to Blue Navigate Consulting about accounting, tax, compliance,
            company secretarial, advisory, or virtual CFO support.
        </p>
    </div>

    <div class="contact-layout">
        <div class="contact-details">
            <div class="contact-card">
                <h2>Business Inquiries</h2>
                <p>Send us a message about accounting, tax, advisory, company secretarial, or virtual CFO services.</p>
                <a href="mailto:nayanthasr@gmail.com" class="text-link">nayanthasr@gmail.com</a>
            </div>

            <div class="contact-card">
                <h2>Consultation Hours</h2>
                <p>Available every day</p>
                <strong>24×7 Business Support</strong>
            </div>

            <div class="contact-card">
                <h2>Branches</h2>
                <p>Serving clients through our Kandy and Colombo branches.</p>
                <strong>Kandy and Colombo</strong>
            </div>

            <div class="contact-card">
                <h2>What to Include</h2>
                <p>Briefly describe your business, the service you need, and whether you require monthly support, tax filing, registration, or advisory services.</p>
            </div>
        </div>

        <form class="contact-form" action="/contact" method="POST">
            @csrf

            @if (session('status'))
                <p class="form-status">{{ session('status') }}</p>
            @endif

            @if ($errors->any())
                <div class="form-errors">
                    <p>Please check the form and try again.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-row">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your name" value="{{ old('name') }}" required>
            </div>

            <div class="form-row">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
            </div>

            <div class="form-row">
                <label for="service">Service Interest</label>
                <select id="service" name="service" required>
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

            <div class="form-row">
                <label for="phone">Contact Number (Optional)</label>
                <input type="tel" id="phone" name="phone" placeholder="Your contact number" value="{{ old('phone') }}">
            </div>

            <div class="form-row">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Tell us what you need help with" required>{{ old('message') }}</textarea>
            </div>

            <div class="contact-actions">
                <button type="submit" class="btn btn-primary">Send Message</button>
                <button type="submit" class="btn btn-secondary">Send Email</button>
            </div>
        </form>
    </div>
</section>

@endsection
