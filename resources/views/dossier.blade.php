@extends('layouts.app')

@section('content')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Insère une copie du document !
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">{{ Auth::user()->name }}</p>
                    <p class="card-content">Nous avons maintenant besoin d'une copie de ton bulletin stp.</p>
                </header>

                <div class="card-content">
                    <form class="login-form" method="POST" action="{{ url('dossier') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}



                                <div class="field">
                                    <div class="file is-primary">
                                        <label class="file-label">
                                            <div class="control">
                                <input class="file-input" type="file" name="dossier" id="dossier" required>
                                    </div>
                        <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                     </span>

                                <span class="file-label" id="filename">
                                    Télécharger le document (pdf, jpg, png, bmp)
                                </span>
                                    </span>

                                        </label>
                                    @if ($errors->has('dossier'))
                                        <p class="help is-danger">
                                            {{ $errors->first('dossier') }}
                                        </p>
                                    @endif

                        <script>
                            var file = document.getElementById("dossier");
                                file.onchange = function(){
                                    if(file.files.length > 0)
                                    {

                     document.getElementById('filename').innerHTML =file.files[0].name;

                                    }
                                };
                                    </script>
                                            </div>
                                        </div>


                    <p class="subtitle">Attention, le document ne doit pas excéder 4Mo!</p>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-info is-rounded">ENVOYER</button>
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