@extends('layout.mainlayout')
@section('title', 'Formation - Matériels')
@section('style', '')

@section('content')
<div class="container"><h1>Les différents équipements du soldat</h1></div><br>
<img src="/img/outils-nav.jpg" alt="" srcset="">

<div class="border"></div>

<section>
    <h2>À savoir</h2>
    <div>
        <ul>
            <li>Le silencieux réduit <b>la vélocité et donc les dégats des balles</b>, il ne s’utilise par conséquent <b>qu’en mode furtif</b></li>
            <li><b>Le GPS et les thermiques sont interdites</b> dans les missions du G.I.E (<i>sauf exception donnée par le MM</i>)</li>
            <li>Votre paquetage doit correspondre au stuff donnée sur le site en fonction de vos modules et composante</li>
        </ul>
    </div>
</section>

<section>
    <h2>Vous devrez savoir impérativement utiliser :</h2>
    <div>
        <ul>
            <li>La boussole <kbd>K</kbd></li>
            <li>La lampe fulton et ma carte (Interaction Ace : <kbd>Ctrl</kbd>+<kbd>Win</kbd> sur Carte)</li>
            <li>Les jumelles <kbd>B</kbd></li>
            <li>Le télémètre (<kbd>B</kbd> + <kbd>T</kbd> pour mesurer la distance)</li>
            <li>Un silencieux</li>
            <li>
                L'outils de tranchées (Interaction Ace : <kbd>Ctrl</kbd>+<kbd>Win</kbd>) 
                <small><i>Attention à ne pas blesser les personnes autour de vous !</i></small>
            </li>
            <li>Les fumigènes et grenades (raccourci <kbd>G</kbd> - lancé Ace <kbd>Ctrl</kbd> + <kbd>G</kbd>)</li>
            <li>Des serflex</li>
            <li>Les bouchons d'oreille (Interaction Ace : <kbd>Ctrl</kbd>+<kbd>Win</kbd>)</li>
        </ul>
    </div>
    <h2>Vous devrez également savoir changer : </h2>
    <div>
        <ul>
            <li>De viseur <kbd>Shift</kbd> + <kbd>Clic droit</kbd></li>
            <li>De viseur avec un magnifier <kbd>Ctrl</kbd> + <kbd>/ Num</kbd></li>
        </ul>
    </div>
</section>
@endsection