<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessLead;
use App\Models\Leads;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadsController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $leads = Leads::where('user_id',$userId)->get();

        return view('leads.index',['leads'=>$leads]);
    }

    public function show($id)
    {
        $lead = Leads::findOrFail($id);

        if($lead->user_id != auth()->user()->id)
            abort(403);


        return view('leads.show', ['lead' => $lead]);
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

            $data['user_id']=User::nextToGetLead()->id;

            Leads::create($data);
        } catch (\Throwable $th) {

            Log::error('lead creation: ' . json_encode($request->all()) . '\n' . $th);
        }
        return redirect('obrigado');
    }
}
