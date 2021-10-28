{{--<x-layouts.base :title="$title" {{ $attributes }}>--}}
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{config('app.name', 'SportClub')}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>


<div class="container-fluid navbar-base">
    <div class="row navbar-container" style="text-align: center">

        <div class="col-md-4 d-flex justify-content-center">
            <button class="navbar-button"><h4>Sport Club</h4></button>
        </div>

        <div class="col-md-1 d-flex justify-content-center">
            <button class="navbar-button">
                Тренера
            </button>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
            <button class="navbar-button">
                Игроки
            </button>
        </div>

{{--        @auth--}}
            <div class="col-md-auto d-flex justify-content-center">
                <button class="navbar-button-img">
                    Записаться
                </button>
            </div>
{{--        @else--}}
{{--            <div class="col-md-3">--}}
{{--                <div></div>--}}
{{--            </div>--}}
            <div class="col-md-1 d-flex justify-content-center">
                <button class="navbar-button">
                    FAQ
                </button>
            </div>

            <div class="col-md-1 d-flex justify-content-center">
                <button class="navbar-button">
                    Войти
                </button>
            </div>
{{--        @endauth--}}
    </div>
</div>

{{ $slot }}

</body>
</html>

{{--</x-layouts.base>--}}
