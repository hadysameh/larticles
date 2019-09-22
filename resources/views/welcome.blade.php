<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='csrf-token' content='{{csrf_token()}}'>
        <script>window.laravel ={csdrToken :'{{csrf_token()}}'}</script>
        <title>Larticles App</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style type="text/css">
        html {
            scroll-behavior: smooth;
        }
    </style>
        
    </head>
    <body>
        <div id="app">
                <navbar></navbar>
            <div class="container">
                <articles></articles>
            </div>   
        </div>
            <script src="{{ mix('/js/app.js') }}"></script>            
        </script>
    </body>
</html>
