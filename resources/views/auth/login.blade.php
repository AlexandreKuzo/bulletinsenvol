
@extends('layouts.app')

@section('content')

    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Bulletins L'ENVOL - Connexion
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-10">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Tu as un compte ? Connecte-toi ! Sinon dirige-toi vers "Inscription" pour le créer (en haut à droite)</p>
                </header>

                <div class="card-content">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Adresse mail</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="email" type="email" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                    </p>

                                    @if ($errors->has('email'))
                                        <p class="help is-danger">
                                            {{ $errors->first('email') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Mot de passe</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="password" type="password" name="password" required>
                                    </p>

                                    @if ($errors->has('password'))
                                        <p class="help is-danger">
                                            {{ $errors->first('password') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <label class="checkbox">
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Se rappeler de moi
                                        </label>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-info is-rounded">CONNEXION</button>

                                    <div class="field is-horizontal" id="lostpassword">
                                        <a class="link is-info" href="" onclick="">Mot de passe oublié ?</a>

                                        <script>
                        var lostPassword = document.getElementById("lostpassword");
                        lostpassword.onclick = function(){
                            alert("Contacte L'Envol à mathilde.remignon@article-1.eu ou alexandre.kuzo@article-1.eu ; nous réinitialiserons ton mot de passe ensuite.");
                            return false;
                        }
                    </script>
                </div>
                                    </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection