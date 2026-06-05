<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'service' => ['required', 'string', 'max:255'],
        'phone' => ['nullable', 'string', 'max:50'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    $emailBody = implode("\n", [
        'New contact message from Blue Navigate Consulting website',
        '',
        'Name: ' . $data['name'],
        'Email: ' . $data['email'],
        'Phone: ' . ($data['phone'] ?: 'Not provided'),
        'Service Interest: ' . $data['service'],
        '',
        'Message:',
        $data['message'],
    ]);

    try {
        Mail::raw($emailBody, function ($message) use ($data) {
            $message
                ->to('nayanthasr@gmail.com')
                ->replyTo($data['email'], $data['name'])
                ->subject('New website contact message');
        });
    } catch (\Throwable) {
        return back()
            ->withInput()
            ->withErrors(['email' => 'Your message could not be sent right now. Please try again later.']);
    }

    return back()->with('status', 'Your message has been sent.');
});
