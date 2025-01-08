<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS442</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white [&>*]:font-helvetica">
    <x-layouts.nav-bar></x-layouts.nav-bar>
    {{$slot}}
    <x-layouts.footer></x-layouts.footer>
</body>

</html>