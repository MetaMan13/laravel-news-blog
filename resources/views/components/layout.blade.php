<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel blog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="h-screen w-full grid grid-cols-24 grid-rows-24 text-gray-600 bg-gray-100">
        {{ $slot }}
    </div>
    <script defer src="https://kit.fontawesome.com/3d582cbdd1.js" crossorigin="anonymous"></script>
</body>
</html>