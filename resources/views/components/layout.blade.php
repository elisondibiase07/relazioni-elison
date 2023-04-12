<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>Relazioni</title>
</head>
<body>
    <x-navbar/>

    @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
    @endif

    <div class="min-vh-100">
        {{$slot}}
    </div>

</body>
</html>