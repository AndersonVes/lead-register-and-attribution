<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage()
    {
        return view('landing_page.landing-page');
    }

    public function thankYou()
    {
        return view('landing_page.thank-you');
    }
}
