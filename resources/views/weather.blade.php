<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Weather Project Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/noscript.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">
                <!-- Header -->
                    <header id="header">
                        <h1><a href="https://www.linkedin.com/in/ray-tsou-5066b1179/"><strong>Powered</strong> by スウメイケン</a></h1>
                        <nav>
                            <ul>
                                <li><a href="#footer" class="icon solid fa-info-circle">About</a></li>
                            </ul>
                        </nav>
                    </header>
                    <!-- Main -->
                    <div id="main">
                        <div class="title-part">
                            <h1>Travel Weather Information</h1>
                        </div>
                        @foreach($weathers as $city => $weather)
                        <article class="thumb">
                            <a href="images/fulls/{{$city}}.jpg" class="image"><img src="images/thumbs/{{$city}}.jpg" alt="" /></a>
                            <h2>{{ $city  }} / humidity : {{ $weather["main"]["humidity"] }}% / {{ $weather["main"]["temp"] }} °F <br> {{ $weather['weather'][0]['description'] }}</h2>
                            <p>Photo by {{ $weather["author"] }} on Unsplash</p>
                            <table border="1">
                                <tr>
                                    <td>Date</td>
                                    <td>Temperature</td>
                                </tr>
                                @foreach(array_slice($weather["forecast"]["list"], 0, 6) as $forecast_item)
                                <tr>
                                    <td>{{ $forecast_item["dt_txt"] }}</td>
                                    <td>{{ $forecast_item["main"]["temp"] }}</td>
                                </tr>
                                @endforeach
                                <tr>
                            </table>
                        </article>
                        @endforeach
                    </div>

                <!-- Footer -->
                    <footer id="footer" class="panel">
                        <div class="inner split">
                            <div>
                                <section>
                                    <h2>Reference</h2>
                                    <p>Responsive Web Design Template : HTML5 UP</p>
                                    <p>Weather Information : OpenWeather</p>
                                    <p>City Pictures : Unsplash</p>
                                </section>
                                <section>
                                    <h2>Follow me on ...</h2>
                                    <ul class="icons">
                                        <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                                        <li><a href="https://www.linkedin.com/in/ray-tsou-5066b1179/" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                                    </ul>
                                </section>
                                <p class="copyright">
                                    &copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
                                </p>
                            </div>
                        </div>
                    </footer>
            </div>
        <!-- Scripts -->
        <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('assets/js/jquery.poptrox.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('assets/js/browser.min.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('assets/js/breakpoints.min.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('assets/js/util.js') }}"></script>
        <script type="text/javascript"  src="{{ URL::asset('assets/js/main.js') }}"></script>
    </body>
</html>
