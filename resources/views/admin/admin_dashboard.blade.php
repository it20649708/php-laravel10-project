<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-sans text-white">

      <div class="main-wrapper">
        @include('admin.body.header')


        <div class="page-wrapper bg-white">
        @include('admin.body.sidebar')
        @yield('admin')
        @include('admin.body.footer')
        </div>
    </div>
    </body>
</html>

