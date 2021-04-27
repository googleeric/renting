<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
        <title>Rentatainment - Rent Your Entertainment</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

        
    </head>
    <body>
        <v-app id="app">
            <app/>
        </v-app>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    </body>
</html>
