<?php $page = 1 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Accueil')
<!-- on définit le contenu de la page -->
@section('content')
<section>    
    <h1 class="text-center"><i class="fas fa-2x fa-cogs"></i></h1>
    <h1 class="text-center">Site en version d'essai.</h1>

    <img src="/img/home/info.jpg" alt="" srcset="">
    
    <div>Bienvenue sur le nouveau site du GIE. Il est en cours de 
        construction donc certaines parties sont encore indisponible.
    </div>
    <div>
        Pour nous aider, vous pouvez nous faire remonter 
        votre feedback sur notre <a href="https://discord.gg/AmWBzqV" class="didi">Discord</a>.
    </div>
    <div>
        Pour accéder à l'ancienne version c'est par là :
        <a href="https://gie.polygames.net/">gie.polygames.net</a>
    </div>
</section>
@endsection