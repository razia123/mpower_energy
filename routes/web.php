<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/download-brochure', function () {

    $file = public_path('brochures/mpower-energy-brochure.pdf');

    if (!file_exists($file)) {
        abort(404, 'Brochure not found');
    }

    return response()->download(
        $file,
        'MPower-Energy-Brochure.pdf'
    );

})->name('brochure.download');
