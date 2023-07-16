@extends('layouts.app')
@section('title', 'Lead')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lead</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col ">
                                    <h5>Informações</h5>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Nome: </b>{{ $lead->name }}</div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Email: </b>{{ $lead->email }}</div>
                                <div class="col "><b>Celular: </b>
                                    <span class="mask-static-phone">{{ $lead->phone }}</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ">
                                    <h5>Endereço</h5>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>CEP: </b>{{ $lead->cep }}</div>
                                <div class="col "><b>Cidade: </b>{{ $lead->city }} - {{ $lead->state }}</div>
                            </div>

                            <div class="row mt-1">
                                <div class="col "><b>Bairro: </b>{{ $lead->neighborhood }}</div>
                            </div>
                            <div class="row mt-1">
                                <div class="col"><b>Rua: </b>{{ $lead->street }}</div>
                                <div class="col"><b>Número: </b>{{ $lead->house_number }}</div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Complemento: </b>{{ $lead->complement }}</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col ">
                                    <h5>Funil</h5>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Etapa do funil: </b>cadastrado na landing page </b></div>
                            </div>
                            <div class="row mt-3 ">
                                <div class="col-4">
                                    <button class="btn btn-outline-success w-100">
                                        Enviar para próxima etapa
                                        <i class="bi bi-funnel-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ url('/js/staticMasks.js') }}"></script>

    @endsection
