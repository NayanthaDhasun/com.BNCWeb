<?php

use Illuminate\Http\Request;
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

    $whatsappMessage = implode("\n", [
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

    return redirect()->away('https://wa.me/94717092958?text=' . rawurlencode($whatsappMessage));
});
