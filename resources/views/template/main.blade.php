<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css','resources/js/app.jss'])

    <title>Libreria da Aterg</title>
</head>
<body class="background-body img-fluid" >

    <x-navbar/> 
  

{{$slot}}

</body>
</html>
