<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DDS - Drone Delivery System </title>
            <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>
        <link href="{{('css/app.css') }}" rel="stylesheet"/>
        <link href="{{('css/components.css') }}" rel="stylesheet"/>
        <script src="{{('js/applet.js') }}" type="text/javascript"></script>

        <style>
            body {
                color: white;
                font-family: 'Nunito', sans-serif;
                background-color: #000000;
/*                background-image: url({{ asset('images/shape.svg') }});*/
                background-position: center;
                background-size: contain;
                background-attachment: fixed;
                overflow-x:hidden;
            }
        </style>
    </head>
    <body>
        <div>
            <img style="width: 100vw;top:-10px;position: relative;left: -10px;margin: 0;" src="{{asset('images/drone-banner.png')}}">
            <div class="dashboard-start">
                <h1 style="color:;">DOWNLOAD THE APP FROM <br/> Play Store</h1>
                <button>Download</button>
                <br/>
                <img src="https://uploads-ssl.webflow.com/61f902691cfa50f059fc090d/61f902691cfa50c189fc09a1_icon_googlePlay.svg" loading="lazy" alt="get it on google play" width="277">
            </div>
            <div class="dashboard-end">
                <h1 style="color:;"><br/> </h1>
                <button>Learn More</button>
                <br/>
            </div>

        </div>
        <x-navigator/>
        <div class="content-center">
            <img src="{{asset('images/g14.svg')}}" style="position: fixed;top: 150px; opacity: 0.5;z-index: -1;" /> 
        </div>
        <x-nav-container/>

        <footer>
            <div class="g14-footer">
                <div>
                    <h2>Follow Our Social Media</h2>
                    <p></p>
                </div>
                <div>
                    <h2>Our Team Members</h2>
                </div>
            </div>
        </footer>
    </body>
</html>
