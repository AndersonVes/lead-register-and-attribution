@extends('layouts.app')
@section('title', 'Lead')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lead #id</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col "><h5>Informações</h5></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Nome: </b></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Email: </b></div>
                                <div class="col "><b>Celular: </b></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col "><h5>Endereço</h5></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>CEP: </b></div>
                                <div class="col "><b>Cidade: </b>Cidade - UF</div>
                            </div>

                            <div class="row mt-1">
                                <div class="col "><b>Bairro: </b></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col"><b>Rua: </b></div>
                                <div class="col"><b>Número: </b></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col "><b>Complemento: </b></div>
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
    @endsection
