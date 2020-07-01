@extends('layout.mainlayout')
@section('title', 'Formations')
@section('style', '')

@section('content')
<div class="container"><h1>Nos formations</h1></div><br>
<img src="/img/self-rappel.jpg" alt="" srcset="">
<div class="border"></div>

<section>
    <div>
        Différentes fiches de formation sont disponibles afin de vous préparer à la pratique in-game (durée de 1h approximativement).
        <br>
        Elles vous permettrons de vous familliariser avec notre façon de jouer. 
    </div>

    <div class="tabler">
        <ul>
            <li><a href="formations/materiels">Les différents équipements du soldat</a></li>
            <li><a href="formations/charlie">Charlie, la composante de base</a></li>
            <li><a href="formations/deplacements">Les déplacements</a></li>
            <li><a href="formations/navigation">La navigation</a></li>
            <li><a href="formations/leader">Leader, être chef d'un groupe</a></li>
            <li><a href="formations/radio">Radio, les différents protocoles</a></li>
            <li><a href="#">Médicale, soigner ses gars</a></li>
            <li><a href="#">Saut HALO, comment ça marche ?</a></li>
            <li><a href="#">La communication dans une escouade</a></li>
            <li><a href="#">Véhicule, le rôle du conducteur</a></li>
            <li><a href="#">Le combat</a></li>
        </ul>
    </div>

    <small>Merci à <a target="-blank" href="#" class="didi-staff">@Pippermint</a> pour ces fiches.</small>
</section>
@endsection