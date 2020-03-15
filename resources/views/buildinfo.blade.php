<?php $page = 1 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Accueil')
<!-- on définit le contenu de la page -->
@section('content')
<!--
    <section>
        <div class="container bg-dark text-light text-center">
            <h1><i class="fas fa-4x fa-cogs"></i></h1><br><br>
            <h1 style="font-size: 60px;">Bienvenue sur le site du <b>GIE</b> !</h1><br>
            <div style="font-size: 20px;">
                <p>Bienvenue sur le nouveau site du <b>GIE</b>. Il est en cours de construction mais il sera bientôt disponible. 
                    Cependant si vous souhaitez accéder à l'ancienne version je vous invite à cliquer <b><a href="https://gie.polygames.net/">ici</a></b>.</p>
            </div>
        </div>
    </section>
-->

<section>
    <h1 class="text-center"><i class="fas fa-2x fa-cogs"></i></h1>
    <h1 class="text-center">Site en version d'essai.</h1>
    <div>Bienvenue sur le nouveau site du GIE. Il est en cours de 
        construction donc certaines parties sont encore indisponible.
    </div>
    <div>
        Pour nous aider, vous pouvez nous faire remonter 
        votre feedback <a href="#">ici</a>.
    </div>
    <div>
        Pour accéder à l'ancienne version c'est par là :
        <a href="https://gie.polygames.net/">gie.polygames.net</a>
    </div>
</section>
@endsection