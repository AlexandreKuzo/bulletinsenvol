@extends('layouts.app')

@section('content')


<!DOCTYPE html>

<html>
<head>
    <title>L'ENVOL - Saisis ton bulletin !</title>

</head>


<body>




<!--Annonce formulaire-->

    <section class="hero is-info">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Ton bulletin
                </h1>
            </div>
        </div>
    </section>

    <div class="columns is-marginless is-centered">
        <div class="column is-9">
            <div class="card">


                <header class="card-header">
                    <p class="card-header-title">Indique-nous pour quel trimestre tu entres les moyennes stp.</p>

                    <form class="login-form" method="POST" action="{{ url('lyceen') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                <section class="section is-small">
                        <div class="select is-rounded">
                        <select name="Trimestre">
                <option value="T1"> Premier trimestre </option>
                <option value="T2"> Deuxième Trimestre </option>
                <option value="T3"> Troisième trimestre </option>
                       </select>
                   </div>
                    </section>
                </header>

    <header class="card-header">
             <p class="card-header-title">En quelle classe es-tu ?</p>


         <section class="section is-small">
                <div class="select is-rounded">
             <select name="classe_niveau">
                <option value="2nde"> Seconde </option>
                <option value="1ère"> Première </option>
                <option value="Tle"> Terminale </option>

            </select>
        </div>
             </section>
                </header>



                <div class="card-content">



                <div class="card-control">

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Français</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="français" type="number" name="français"
                                               value="{{ old('français') }}" placeholder="Entre les moyennes sans les décimales" required>
                                    </p>

                                    @if ($errors->has('français'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Histoire-Géographie</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="histoiregeo" type="number" name="histoiregeo"
                                        value="{{ old('histoiregeo') }}" required>
                                    </p>

                                    @if ($errors->has('histoiregeo'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Maths ou ens. scientifique</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="sciences" type="number" name="sciences"
                                               value="{{ old('sciences') }}" required >
                                    </p>

                                    @if ($errors->has('sciences'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                         <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">EPS</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="EPS" type="number" name="EPS"
                                               value="{{ old('EPS') }}" required >
                                    </p>

                                    @if ($errors->has('EPS'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>


                         <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">LV1</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="LV1" type="number" name="LV1"
                                               value="{{ old('LV1') }}" required >
                                    </p>

                                    @if ($errors->has('LV1'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">LV2</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="LV2" type="number" name="LV2"
                                               value="{{ old('LV2') }}" required >
                                    </p>

                                    @if ($errors->has('LV2'))
                                        <p class="help is-danger">
                                            {{ $errors->first('digits') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

 <div class="field">
         <label class="label">Insère ton bulletin stp.</label>
                                    <div class="file is-info">
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


                    <p class="subtitle is-danger">Attention, le document ne doit pas excéder 4Mo!</p>


                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-info is-rounded">ENREGISTRER</button>
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



</body>
</html>