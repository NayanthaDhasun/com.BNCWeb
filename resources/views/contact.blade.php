@extends('layout')

@section('content')

<section class="page contact-page">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>
            Talk to Blue Navigate Consulting about your business goals, challenges,
            or the support you need for your next stage of growth.
        </p>
    </div>

    <div class="contact-layout">
        <div class="contact-details">
            <div class="contact-card">
                <h2>Business Inquiries</h2>
                <p>Send us a message about strategy, finance, operations, or digital transformation support.</p>
                <a href="mailto:info@bluenavigateconsulting.com" class="text-link">info@bluenavigateconsulting.com</a>
            </div>

            <div class="contact-card">
                <h2>Consultation Hours</h2>
                <p>Available every day</p>
                <strong>24×7 Business Support</strong>
            </div>

            <div class="contact-card">
                <h2>What to Include</h2>
                <p>Briefly describe your business, your main challenge, and the outcome you want to achieve.</p>
            </div>
        </div>

        <form class="contact-form" action="#" method="POST">
            <div class="form-row">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your name">
            </div>

            <div class="form-row">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="you@example.com">
            </div>

            <div class="form-row">
                <label for="service">Service Interest</label>
                <select id="service" name="service">
                    <option>Business Strategy</option>
                    <option>Financial Consulting</option>
                    <option>Digital Transformation</option>
                    <option>Operational Improvement</option>
                    <option>Startup Advisory</option>
                </select>
            </div>

            <div class="form-row">
                <label for="phone">Contact Number (Optional)</label>
                <input type="tel" id="phone" name="phone" placeholder="Your contact number">
            </div>

            <div class="form-row">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Tell us what you need help with"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

@endsection
