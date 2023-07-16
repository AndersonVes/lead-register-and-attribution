<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadsController extends Controller
{
    public function listByUser()
    {
    }

    public function show($id)
    {
        $user = $id;
        return view('leads.show', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc',
            'phone' => 'required',
            'cep' => 'required',
            'city' => 'required',
            'state' => 'required|max:2',
            'neighborhood' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'complement' => 'required',
        ]);

        

        try {
            $data = $request->all();
            $data['phone'] = preg_replace('/[^0-9]/', '', $data['phone']);
            $data['cep'] = preg_replace('/[^0-9]/', '', $data['cep']);
            unset($data['_token']);
            $data['user_id'] = 1;
            Leads::create($data);
        } catch (\Throwable $th) {

            Log::error('lead creation: ' . json_encode($request->all()) . '\n' . $th);
        }
        return redirect('obrigado');
    }
}
