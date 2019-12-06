@extends('layouts.app')

@section('content')



<section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Saisie de tes bulletins
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
                            Ton compte - {{ Auth::user()->name }}
                        </p>
                    </header>

                    <div class="card-content has-text-centered">
                    <p class="subtitle is-4">Tu passes la bac "à l'ancienne" avec les séries. Choisis ton niveau ci-dessous.</p>



                    <div class="buttons">

                        <a class="button is-info" href="{{ route('bulletin') }}">3ème</a>

                        <a class="button is-info" href="{{ route('seconde') }}">2nde</a>



                        <a class="button is-info" href="{{ route('litteraire') }}">1ère ou Tle L</a>


                        <a class="button is-info" href="{{ route('scientifique') }}">1ère ou Tle S</a>


                        <a class="button is-info" href="{{ route('economique') }}">1ère ou Tle ES</a>


                        <a class="button is-info" href="{{ route('sciencegestion') }}">1ère ou Tle STMG</a>


                        <a class="button is-info" href="{{ route('sciencestechnique') }}">1ère ou Tle STI2D</a>


                    </div>


                    <div class="card-content has-text-centered">
                    <p class="subtitle is-4">Tu passes "le nouveau bac", ou tu es étudiant•e ? C'est ci-dessous.</p>



                    <div class="buttons">

                        <a class="button is-info" href="{{ route('lyceen') }}">Lycéens</a>
                        <a class="button is-info" href="{{ route('dossier') }}">Etudiants</a>

                    </div>
                </div>

            </div>
        </div>
    </div>


            </div>
@endsection
