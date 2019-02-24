<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Currency exchange web 💣</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-color: #d1eaf6;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                background-color: #d1eaf6;
            }

            .footer {
                /* align-items: center;
                display: flex;
                justify-content: center; */
                position: absolute;
                text-align: center;
                bottom: 40px;
                /* position: fixed; */
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Currency exchange web 💣
                </div>

                <div class="links">
                    <a href="http://cbr.ru/">CB of Russia</a>
                </div>

            </div>

            <div class="links footer">
                <a href="https://twitter.com/_kymuc">
                    <img src="https://userscontent2.emaze.com/images/fcb8e84d-d417-4c27-b8e0-dfc0ab0b0927/427469ce-ceb3-415d-8736-632456df4e36.png" style="margin-right:10px;align:bottom;width:2%;height:2%"/>
                    Tweet us!
                </a>
            </div>

        </div>



    </body>
</html>
