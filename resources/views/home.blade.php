<?php $page = 1 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Accueil')
<!-- on définit le contenu de la page -->
@section('content')
    <section>
        <div class="container bg-dark text-light">
            <h1 style="font-size: 60px;">Bienvenue sur le site du <b>GIE</b> !</h1><br>
            <div style="font-size: 20px;">
                <p>Bienvenue sur le nouveau site du <b>GIE</b>. Il est en cours de construction mais il sera bientôt disponible. 
                    Cependant si vous souhaitez accéder à l'ancienne version je vous invite à cliquer <b><a href="https://gie.polygames.net/">ici</a></b>.</p>
            </div>
        </div>
    </section>
@endsection