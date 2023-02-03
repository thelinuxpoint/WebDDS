<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>G14 Technologies - Log IN</title>
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>
        <link href="{{asset('css/app.css') }}" rel="stylesheet"/>
        <link href="{{asset('css/components.css') }}" rel="stylesheet"/>

        <!-- Styles -->
        <style>
            body {
                color: white;
                font-family: 'Nunito', sans-serif;
                background-color: #151f32;
                background-image: url({{ asset('images/shape.svg') }});
                background-position: center;
                background-size: contain;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
        <div class="g14-sidebar">
            <div>
                <img src="{{asset('images/g14.svg')}}" style="width: 200px;,position: fixed;z-index: -1;" /> 
            </div>
        </div>
        <div class="g14-login-content">

        </div>
    </body>
</html>
