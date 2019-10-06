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
                        <h1><a href="https://html5up.net/"><strong>Multiverse</strong> by HTML5 UP</a></h1>
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
                                    <h2>Magna feugiat sed adipiscing</h2>
                                    <p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum.</p>
                                </section>
                                <section>
                                    <h2>Follow me on ...</h2>
                                    <ul class="icons">
                                        <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                                        <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                        <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                                    </ul>
                                </section>
                                <p class="copyright">
                                    &copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
                                </p>
                            </div>
                            <div>
                                <section>
                                    <h2>Get in touch</h2>
                                    <form method="post" action="#">
                                        <div class="fields">
                                            <div class="field half">
                                                <input type="text" name="name" id="name" placeholder="Name" />
                                            </div>
                                            <div class="field half">
                                                <input type="text" name="email" id="email" placeholder="Email" />
                                            </div>
                                            <div class="field">
                                                <textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <ul class="actions">
                                            <li><input type="submit" value="Send" class="primary" /></li>
                                            <li><input type="reset" value="Reset" /></li>
                                        </ul>
                                    </form>
                                </section>
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
