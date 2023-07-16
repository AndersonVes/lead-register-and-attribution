<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quero Meu Imóvel</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body
    style="background-size: cover; background-attachment: fixed; background-position: fixed;background-image: url('img/happy-couple.jpg')">

    <div class="mx-auto col-10 col-md-8 col-lg-6 my-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-example bg-light rounded p-3" action="{{ route('new_lead') }}" method="post">
            @csrf
            <div class="p-3 mb-2 d-flex justify-content-center align-items-center flex-wrap">
                <div class="p1" style="width: 5em">
                    <img class="img-fluid" src="img/logo.webp" alt="" srcset="">
                </div>
                <h1 class="w-100 mt-3 text-center">HouseHunters</h1>
            </div>

            <p class="h5 mb-4">
                Em busca da <b>casa ideal</b>? Preencha o formulário e nosso corretor entrará em contato para
                <b>tornar seu sonho realidade</b>. Não perca tempo, <b>sua nova casa está esperando por
                    você</b>!
            </p>
            <div class="container ">
                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="nome">Nome</label>
                            <input required type="text" id="form-nome" name="name" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="email">Email</label>
                            <input required type="email" id="form-email" name="email" class="form-control" />

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="celular">Celular</label>
                            <input required pattern="^\(\d{2}\) \d{4,5}-\d{4}$" maxlength="15" type="text"
                                id="form-celular" name="phone" class="form-control mask-phone"
                                placeholder="(00) 00000-0000" />

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="text">CEP</label>
                            <input required pattern="^\d{5}-\d{3}$" placeholder="00000-000" id="form-cep"
                                name="cep" class="form-control viacep-cep mask-cep" type="text" />

                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-10 ">
                        <div class="form-group ">
                            <label class=" w-100" for="cidade">Cidade</label>
                            <input required type="text" id="form-cidade" name="city"
                                class="form-control viacep-localidade" />

                        </div>
                    </div>

                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="uf">UF</label>
                            <input required type="text" pattern="^[A-Za-z]{2}$" maxlength="2" id="form-uf"
                                name="state" class="form-control viacep-uf" />

                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="bairro">Bairro</label>
                            <input required type="text" id="form-bairro" name="neighborhood"
                                class="form-control viacep-bairro" />

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10">
                        <div class="form-group ">
                            <label class=" w-100" for="rua">Rua</label>
                            <input required type="text" id="form-rua" name="street"
                                class="form-control viacep-logradouro" />

                        </div>
                    </div>

                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="numero">Número</label>
                            <input required type="text" id="form-numero" name="house_number"
                                class="form-control" />

                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col ">
                        <div class="form-group ">
                            <label class=" w-100" for="complemento">Complemento</label>
                            <input type="text" id="form-complemento" name="complement"
                                class="form-control viacep-complemento" />

                        </div>
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">
                            Registre-se agora e encontre sua casa ideal!
                        </button>
                    </div>
                </div>

            </div>

        </form>
        <span class="text-xs text-gray-600"><a target="_blank"
                href="https://www.freepik.com/free-photo/happy-couple-with-keys-new-apartment_17293476.htm#query=real%20estate&position=7&from_view=search&track=ais">Image
                by gpointstudio</a> on Freepik</span>


    </div>

    <script src="{{url('/js/inputMasks.js')}}"></script>
    <script src="{{url('/js/viacep.js')}}"></script>
</body>

</html>
