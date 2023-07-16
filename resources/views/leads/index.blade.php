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
                            <th scope="col" style="text-align: center">Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($leads as $lead)
                            <tr>
                                <td>{{$lead->name}}</td>
                                <td>{{$lead->email}}</td>
                                <td class="mask-static-phone">{{$lead->phone}}</td>
                                <td>{{$lead->city}} - {{$lead->state}}</td>
                                <td><i>cadastrado na landing page</i></td>
                                <td class="d-flex justify-content-center"><a href="{{ route('show', $lead->id) }}"
                                        style="color: blue"><i class="bi bi-info-circle" style="font-size: 1.2rem;"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{url('/js/staticMasks.js')}}"></script>
@endsection
