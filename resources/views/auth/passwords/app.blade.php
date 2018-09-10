<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>L'ENVOL - Vos bulletins</title>

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" rel="stylesheet">
    </head>
    <body>


                    <div class="navbar-menu" id="navMenu">
                        <div class="navbar-start">
                            <figure class="image is-3by1">
                                <img src="https://bulma.io/images/placeholders/256x256.png">
                                    </figure>
                        </div>

                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Connexion</a>
                                <a class="navbar-item " href="{{ route('register') }}">Inscription</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
        <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Formulaire des bulletins</strong> : une application réalisée par L'Envol</a>
      <br>Design :<a href="http://opensource.org/licenses/mit-license.php"> Bulma (sous licence MIT)</a>.
    </p>

    <p><a href="#">Mentions légales</a></p>
  </div>
</footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>