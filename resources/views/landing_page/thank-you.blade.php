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

        <div class="form-example bg-light rounded p-3 pb-4 text-center ">
            <div class="p-3 mb-2 d-flex justify-content-center align-items-center flex-wrap">
                <div class="p1" style="width: 5em">
                    <img class="img-fluid" src="img/logo.webp" alt="" srcset="">
                </div>
                <h1 class="w-100 mt-3 text-center">HouseHunters</h1>
            </div>

            <h3>Obrigado por nos escolher!</h3>
            <p class="h5 mb-4">
                Em breve entraremos em contato para tornar seu sonho de encontrar a casa ideal uma realidade.
            </p>
            

        </div>
        <span class="text-xs text-gray-600"><a target="_blank"
                href="https://www.freepik.com/free-photo/happy-couple-with-keys-new-apartment_17293476.htm#query=real%20estate&position=7&from_view=search&track=ais">Image
                by gpointstudio</a> on Freepik</span>

    </div>
</body>

</html>
