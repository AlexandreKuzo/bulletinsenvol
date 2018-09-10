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

                    <form class="login-form" method="POST" action="{{ url('economique') }}">
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
                                <label class="label">Histoire-Géographie</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="histoiregeo" type="number" name="histoiregeo"
                                        value="{{ old('histoiregeo') }}" placeholder="Entre les moyennes sans les décimales" required>
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
                                <label class="label">Mathématiques</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="maths" type="number" name="maths"
                                               value="{{ old('maths') }}" required >
                                    </p>

                                    @if ($errors->has('maths'))
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
                                <label class="label">SES</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="SES" type="number" name="SES"
                                               value="{{ old('SES') }}" required >
                                    </p>

                                    @if ($errors->has('SES'))
                                        <p class="help is-danger">
                                            {{ $errors->first('number') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

 <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Confirme ton adresse mail stp</label>
                            </div>
                                <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" id="brevet" type="email" name="email"
                                               value="{{ old('email') }}" required >
                                    </p>

                                    @if ($errors->has('email'))
                                        <p class="help is-danger">
                                            {{ $errors->first('email') }}
                                        </p>
                                    @endif
                                    <a class="link is-info" href="" onclick="" id="verifmail">Pourquoi ?</a>

                                        <script>
                        var verifMail = document.getElementById("verifmail");
                        verifmail.onclick = function(){
                            alert("Nous avons juste besoin de vérifier que tu n'es pas un robot...");
                            return false;
                        }
                    </script>

                </div>
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