<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{config('app.name', 'SprotClub')}}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

{{--<div class="form-group">

        <h1>@if($forum) Edit title of forum @else Create title of forum @endif</h1>

        <form action="{{$forum ? route('forums.update', $forum) : route('forums.store') }}" method="post">
            @csrf


            @if($forum)
                @method('put')
            @endif

            <div>
                <label>Title</label>
            </div>
            <div>
                <input value="{{ old('title', $forum->title ?? null) }}" type="text" name="title" id="title" required autofocus />
                @error('title')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="content">Description</label>
            </div>
            <div>
                <textarea name="description" id="description" required>{{ old('description', $forum->description ?? null) }}</textarea>
                @error('description')
                <span>{{$message}}</span>
                @enderror
            </div>



            <button>@if($forum) Edit post @else Create post @endif</button>

        </form>--}}


        <div class="container p-3">
            <div class="row justify-content-center">
                <div class="col-4">
                    {{--display-5--}}
                    <h1 class="h4 text-secondary mb-3 text-center"></h1>

                    <div class="card card-body">
                         @yield('content')
                    </div>
                </div>
            </div>
        </div>






</body>
</html>
