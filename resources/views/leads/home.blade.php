@extends('layouts.app')
@section('title', 'Meus Leads')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2>Meus leads</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Etapa do Funil</th>
                            <th scope="col">Informações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>teste@</td>
                            <td>(11)111</td>
                            <td>sao paulo - sp</td>
                            <td><i>cadastrado na landing page</i></td>
                            <td><a href="{{route('show',3)}}" style="color: blue"><i class="bi bi-info-circle" style="font-size: 1.2rem;"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
