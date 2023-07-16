<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function listByUser()
    {
        
    }

    public function show($id)
    {
        $user = $id;
        return view('leads.show',['user'=>$user]);
    }

    
}
