<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css"/>

   <body>


<!-- Hero content: will be in the middle -->

<header class="hero is-medium is-info is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
       Indique nous tes résultats !
      </h1>
     <h2 class="subtitle">Ton bulletin est demandé par L'Envol à chaque trimestre.</h2>
      <h3>Tu peux télécharger au lien ci-dessous le guide administratif pour savoir à quel moment tu dois nous renvoyer les différents documents de ton dossier.</h3>
          <div class="control has-text-centered">
            <button class="button is-link" href="#">TELECHARGER</button>
               </div>

    </div>
  </div>

</header>


 @yield('contenu')


<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Formulaire des bulletins</strong> : une application réalisée par L'Envol</a>
      <br>Design :<a href="http://opensource.org/licenses/mit-license.php"> Bulma (sous licence MIT)</a>.
    </p>

    <p><a href="#">Mentions légales</a></p>
  </div>
</footer>


    </body>



   </html>