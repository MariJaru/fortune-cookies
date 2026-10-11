<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutUsController extends Controller
{
    public function index(): View
    {
        $company = 'Tasty Fortune';
        $description = 'We make delicious treats for every occasion.';

        return view('about-us', [
            'company' => $company,
            'description' => $description,
        ]);
    }
}
