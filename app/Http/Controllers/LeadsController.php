<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function listByUser()
    {
        
    }

    public function landingPage()
    {
        return view('leads.landing-page');
    }
}
