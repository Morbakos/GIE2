<?php $page = 0 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Tutoriel 1')
@section('style', 'tutos.css')


@section('content')
    <section class="tuto">
        <h1>Nom du tutoriel</h1>
        <div>
            <!-- contenu du tuto -->
            pour faire un lien HTML :
            <code>
                &lt;a href="/home"&gt; lien HTML &lt;/a&gt;
            </code>
            on peut aussi faire ce qu'on veut comme le nom d'un fichier :
            <code>
                mission.sqm
            </code>
            <!-- fin -->
        </div>
        
        <a href="/tutos" class="btn">Retour</a>
    </section>
@endsection
