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

                    <div class="card-content">
                    Tu peux saisir tes moyennes. Choisis ton niveau ci-dessous.
                    </div>



     <nav class="level">
                    <p class="level-item ">
                        <a class="link is-info" href="{{ route('bulletin') }}">3ème</a>
                            </p>
                            <p class="level-item ">
                        <a class="link is-info" href="{{ route('seconde') }}">2nde</a>
                            </p>
                        </nav>

        <nav class="level">

                <p class="level-item has-text-centered">
                        <a class="link is-info" href="{{ route('litteraire') }}">1ère ou Tle L</a>
                            </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info" href="{{ route('scientifique') }}">1ère ou Tle S</a>
                            </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info" href="{{ route('economique') }}">1ère ou Tle ES</a>
                            </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info" href="{{ route('sciencegestion') }}">1ère ou Tle STMG</a>
                            </p>
                    <p class="level-item has-text-centered">
                        <a class="link is-info" href="{{ route('sciencestechnique') }}">1ère ou Tle STI2D</a>
                            </p>


                </nav>


            </div>
        </div>
    </div>


            </div>
@endsection