@extends('layout.mainlayout')
@section('title', 'Formation - La navigation')
@section('style', 'deplacement.css')

@section('content')
<div class="container"><h1>La navigation</h1></div><br>
<img src="/img/outils-nav.jpg" alt="" srcset="">

<section class="mobile">
    <div>
        <h4>Sommaire</h4>
        <small>
            <ul>
                <li><a href="#latitude">Latitude - Longitude - Altitude</a></li>
                <li><a href="#coordonnees">Les coordonnées à chiffres</a></li>
                <li><a href="#outils-nav">Les outils de navigation</a></li>
                <li><a href="#boussole">Boussole - Azimut - Cadran horaire</a></li>
                <li><a href="#distances">Évaluer des distances</a></li>
            </ul>
        </small>
    </div>
</section>

<div class="border"></div>

<section>
    <h2>À savoir</h2>

    <div>
        <mark>
            On annonce un azimut qu'au pax proche de soit (< 10 mètres). L'azimut est différente pour tout le monde puisqu'il 
            situe l'axe des points cardinaux par rapport à soi. Donc rien ne sert d'annoncer un azimut en radio, ça n'a aucun sens !
        </mark>
    </div>
</section>

<section>
    <h2>Vous devrez impérativement connaître :</h2>

    <div>
        <ul>
            <li>Lire des coordonnées à 6 chiffres sur une carte</li>
            <li>Lire des coordonnées à 8 chiffres sur une carte</li>
            <li>Utiliser les directions, azimut, cadran horaire, pavé numérique</li>
            <li>Donner une distance approximative d'un objet, d'un bâtiment</li>
            <li>Se repérer sur une carte et donner mes coordonnées sans GPS</li>
            <li>Utiliser ses outils de navigations [Interaction Ace <kbd>Ctrl</kbd> + <kbd>Win</kbd> sur carte]</li>
        </ul>
    </div>
</section>

<section id="latitude">
    <h2>Latitude - Longitude - Altitude</h2>

    <div>
        <b>Latitude</b> : [Nord - Sud] Ligne verticale à l'équateur (cercle imaginaire autour de la terre situé 
        à égale distance des deux pôles). 
        <br><br>
        <b>Longitude</b> : [Est - Ouest] Ligne horizontale parallèle aux méridiens (demis-cercles qui joignent les deux pôles).
        <br><br>
        <b>Altitude</b> : Élévation du niveau de la terre par rapport au niveau moyen de la mer.
    </div>    
</section>

<section id="coordonnees">
    <h2>Les coordonnées à chiffres</h2>

    <div>
        <b>Les coordonnées à 6 chiffres</b> : <br><br>
        <p>
            Les 3 premiers correspondent à la longitude [Est - Ouest], les 3 derniers à la latitude [Nord, Sud], 
            sur une précision de 100 mètres (soit un carré sur carte).
        </p>
        <br><br>
        <b>Les coordonnées à 8 chiffres</b> : <br><br>
        <p>
            Ils utilisent le même système pour une précision à 10 mètres 
            (sur carte, la grille à 10 chiffres donne une précision de 1 mètre).
        </p>
    </div>
</section>

<section id="outils-nav">
    <h2>Les outils de navigation</h2>
    
    <div>
        Sur votre carte faire intéraction Ace [<kbd>Ctrl</kbd> + <kbd>Win</kbd>] puis sélectionner 
        <i>"Montrer les outils de navigation"</i>.
        <br>
        Choisir alors <i>"petit outil"</i> pour les courtes distances ou <i>"moyen outil"</i> pour 
        les longues distances.
        <br><br>
        Avec Ace, vous pouvez aligner vos outils par rapport à votre boussole. Les outils vont alors 
        s'orienter vers la direction que vous regardez.
    </div>
</section>

<section id="boussole">
    <h2>Boussole - Azimut - Cadran horaire</h2>

    <div>
        Sur le terrain, et selon la situation vous serez amené à donner une direction. 
        Pour cela vous devrez choisir le système le plus approprié. 
    </div>

    <div>
        On parlera d'une heure pour indiquer son axe de surveillance par rapport au groupe. 
        <br><br>
        <i>Exemple : Quand une personne dit « Je prends les "6" » cela signifie qu'elle surveille l'arrière du groupe.</i> 
    </div>

    <div>
        On utilisera souvent un point cardinal pour  désigner une direction. 
        <br>
        Pour décrire un ennemi à un allié proche on utilisera un azimut.
    </div>

    <div>
        <mark>
            Attention ! L'azimut ne fonctionne que pour une personne au même endroit physique que vous (10 mètres max) !
            On ne l'utilise sous aucun prétexte en radio !!
        </mark>
        
    </div>
</section>

<section id="distances">
    <h2>Évaluer des distances</h2>

    <div>
        Évaluer les distances est qu'une question d'habitude. Alors entrainez-vous in-game avec un télémètre. 
        Il est important d'être capable d'annoncer un contact ou objet à :

        <ul>
            <li>- de 50 mètres</li>
            <li>de 50 à 100 mètres</li>
            <li>+ de 100 mètres</li>
            <li>+ de 500 mètres</li>
            <li>+ de 800 mètres</li>
        </ul>
    </div>
</section>
@endsection