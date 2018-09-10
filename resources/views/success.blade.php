@extends('layouts.app')

@section('content')



<section class="hero is-success">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Saisie terminée !
                </h1>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-10">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Ton compte -  {{ Auth::user()->name }}
                        </p>
                    </header>

                    <div class="card-content">
                        <p>Merci d'avoir saisi tes résultats. Rendez-vous au prochain trimestre ! Contacte ta chargée de suivi en cas de besoin. </p><br>


                    <a class="button is-link is-rounded has-text-centered" href="{{ route('home') }}">SAISIE</a>
                    <p>D'autres bulletins à saisir ? C'est ci-dessus ?<br>Et pour te déconnecter, c'est en haut à droite :-)
                        <br><p>Tu souhaites demander du <strong>tutorat</strong> ? Accède au formulaire à ce <a href="https://docs.google.com/forms/d/e/1FAIpQLSfWVZZELTzAw5F6qbxLbd8DFG1wmbN4BJ1WWfC3QYrt2-y-Jw/viewform?usp=sf_link" target="blank">lien</a>.</p>
                        <br><strong>A bientôt !</strong></p>
                    </div>

                </nav>
            </div>
        </div>
    </div>
@endsection