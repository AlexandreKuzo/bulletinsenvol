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
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Ton compte -  {{ Auth::user()->name }}
                        </p>
                    </header>

                    <div class="card-content">
                        <p>Ton compte a bien été créé ! Tu peux aller saisir tes résultats !</p>
                        <a class="button is-link is-rounded" href="{{ route('home') }}">SAISIE</a>
                    </div>

                </nav>
            </div>
        </div>
    </div>
@endsection