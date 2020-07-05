@extends('layout.mainlayout')
@section('title', 'Formation - Leader')
@section('style', 'deplacement.css')

@section('content')
<div class="container"><h1>Leader, être chef d'un groupe</h1></div><br>
<img src="/img/breif-lead.jpg" alt="" srcset="">

<section class="mobile">
    <div>
        <h4>Sommaire</h4>
        <small>
            <ul>
                <li><a href="#METT">METTT</a></li>
                <li><a href="#preparer-mission">Préparer une mission</a></li>
                <li><a href="#DPIF">DPIF</a></li>
                <li><a href="#breif-depart">Le briefing de départ</a></li>
                <li><a href="#terrain">Sur le terrain</a></li>
            </ul>
        </small>
    </div>
</section>

<div class="border"></div>

<section>
    <div>
        <small>
            Les informations ci-dessous sont purement théoriques. 
            Chaque leader ayant ses propres méthodes et habitudes, elles ne sont là que pour mettre le pied 
            à l'étriller pour quelqu'un souhaitant s'essayer au rôle de leader.
        </small>
    </div>
    <div>
        <b>
            La chose la plus importante à garder à l'esprit en tant que leader (tant SL que TL), 
            c'est que vous êtes le pilier du groupe. Évitez un maximum de vous engager personnellement dans le 
            combat afin de garder une vue globale !
        </b>
    </div>
</section>

<section id="METT">
    <h2>METTT</h2>

    <div>
        Le PC ou CDG , doit en permanence penser <b>METTT</b>. C’est en s’appuyant sur ces facteurs qu’ils choisiront leurs 
        modes opératoires et les formations de déplacement / verrouillage qu’il convient d’employer.
    </div>
    <div>
        <ul style="list-style-type: none;">
            <li><b>M</b>ission (offensif / défensif)</li>
            <li><b>E</b>nnemis (emplacement, force, intention, habitudes, armements, distance, visibilité)</li>
            <li><b>T</b>errain (couvert, camouflage...)</li>
            <li><b>T</b>emps (temps à disposition)</li>
            <li><b>T</b>roupes (nombre d'effectif, niveau d'entrainement et moral)</li>
        </ul>
    </div>
    <div>
        Suivant le <b>METTT</b>, le PC peut gagner du temps <b>en établissant des ordres préalables</b>.
        <br><br>
        <i>Exemple: En cas de contact sur l’avant, réaction par tube arrière.</i>
        <br><br>
        Lorsqu’il le peut il doit s’assurer de transmettre ses ordres préalables lors de passage sur points sensibles, 
        croisement, découvert, rues etc… 
    </div>
</section>

<section id="preparer-mission">
    <h2>Préparer une mission</h2>

    <div>
        <ol>
            <li>Utiliser le METTT (Mission, Ennemi, Terrain, Temps, Troupes)</li>
            <li>Briefer ses troupes avant le départ pour avoir le maximum d'info sur la situation actuelle</li>
            <li>Evaluer les points forts et faibles du terrain (point stratégique, etc...)</li>
            <li>Attribuer des rôles</li>
            <li>Donner les ordres préparatoires précédents l'ordre initial, ils permettront de gagner du temps</li>
            <li>Donner les ordres de déplacement formation/rythme (si possible à l'avance, seront modifiés en cours par les événements)</li>
            <li>Donner les ordres de feu (tir sur ordre, riposte)</li>
            <li>Signalez le comportement à avoir face aux civils, aux véhicules, à l'aérien, etc...</li>
            <li>Prévoir au moins un point de repli</li>
            <li>Prévoir une succession de lead (<i>si je tombe, Max reprends le lead. Les radios sont...</i>) </li>
        </ol>
    </div>
</section>

<section id="DPIF">
    <h2>DPIF</h2>

    <div>
        <b>Pour se déplacer le chef fixe :</b>
        <ul style="list-style-type: none;">
            <li><b>D</b>irection générale de la progression</li>
            <li><b>P</b>oint précis du terrain à atteindre</li>
            <li><b>I</b>tinéraire à suivre</li>
            <li><b>F</b>ormation et rythme à adopter (distance et intervalle)</li>
        </ul>
    </div>
</section>

<section id="breif-depart">
    <h2>Le briefing de départ</h2>

    <div>
       <mark>
            Exigez le silence et la concentration durant cette phase. On ne va pas le répéter 100 fois ! 
            C'est le début de la mission et les unités DOIVENT être à présent prêtes. 
        </mark>
    </div>

    <div>
        <ul>
            <li><b>Présentation des Pax et rôles</b> : Il est important que chaque personne de votre équipe sache qui tient quel rôle</li>
            <li><b>Check du matériel</b> : Chacun vérifie son équipement dans le calme</li>
            <li><b>Check des radios</b> : Chacun vérifie et test ses radios dans le calme</li>
            <li><b>Choisir un second</b> : Lui donner les fréquences radios</li>
        </ul>
    </div>

    <div>
        <b>Fractionner votre groupe en binôme.</b> <i>*facultatif</i> 
        <br><br>
        Nommez les binômes (<i>Exemple: <b style="color: #fca7aa;">Rouge</b>, <b style="color: #defdaf;">Vert</b>, 
        <b style="color: #abc9fd;">Bleu</b></i>)
        <br><br>
        Associez vos hommes par logique :
        <ul>
            <li><b style="color: #fca7aa;">Rouge</b> : <b>Binôme TP</b> Sniper / Spotteur (<i>Qui pourront servir de couverture</i>)</li>
            <li>
                <b style="color: #defdaf;">Vert</b> : <b>Binôme lourd</b> AT / MG (<i>Qui serviront d'appui feu. 
                Ils ont des équipements lourds et ne marche pas à la même allure que le reste du groupe</i>)
            </li>
            <li>
                <b style="color: #abc9fd;">Bleu</b> : <b>Binôme léger</b> (<i>Ils serviront au débordement. 
                Ils peuvent se déplacer et contourner facilement en cas de besoin</i>)
            </li>
        </ul>
        <br><br>
        <i>
            Ça vous permettra sur le terrain en cas de besoin de diviser votre équipe facilement et d’être sûr que vos hommes sont 
            toujours par 2 pour se couvrir.
        </i>
    </div>

    <div>
        <b>Rôle par rôle, précisez leurs objectifs personnels.</b>
        <br>
        Ils pourront changer au cours de la mission, mais vos gars sauront ce que vous attendez d'eux au départ et pourront ainsi mieux 
        comprendre leurs objectifs.
        <br><br>
        <i>
            Exemple : 
            <br><br>
            Vous avez un AT dans le groupe,
            <br>
            « Nous risquons d’être confrontés à des chars. On n'engagera que si nous sommes repérés. »,
            <br><br>
            « Sniper, tu nous suis jusqu’à la pointe “bravo” et tu y resteras posté avec le spotteur pour assurer une couverture. »,
            <br><br>
            « Vert: vous êtes l’unité mobile. Vous progresserez en amont pour éclairer le groupe. »
        </i>
    </div>

    <div>
        <b>Le TOPO - Ordres préparatoires</b>
        <br><br>
        Expliquez-leur :
        <ul>
            <li>L'objectif à accomplir</li>
            <li>L'évacuation</li>
            <li>Le point de repli si besoin</li>
            <li>La stratégie à employer (offensif, défensif, furtif, etc...)</li>
            <li>Fractionner le chemin et donnez-leur des points de contrôles à atteindre</li>
        </ul>
    </div>

    <div>
        Nommez des zones sur votre carte, le dialogue sera plus simple pour tout le monde.
        <br>
        <i>Exemple : <b style="color: #defdaf;">Vert</b> vous irez vous placer sur <b>Paris</b> face à <b>Boston</b>. 
        <b style="color: #fca7aa;">Rouge</b> et <b style="color: #abc9fd;">Bleu</b> nous progresserons sur <b>Boston</b> par la droite.</i>
    </div>
</section>

<section id="terrain">
    <h2>Sur le terrain</h2>

    <div>
        <b>
            Vous allez leader une team.
            Votre travail au sein du groupe est de commander, ne vous placer plus sur le terrain comme un soldat. 
            Vous n'utiliserez votre arme qu'en cas d'urgence pour sauver un allié.
            Moins vous serez dans le combat, plus votre vision sera élargie et votre efficacité décuplée. 
        </b>
    </div>

    <div>
        <b>Vous devrez diriger entre 3 et 8 personnels et connaitre leurs rôles.</b>
        <br><br>
        <i> 
            Formez-vous sur les différents modules de Charlie. 
            Il est important de connaitre le travail de chacun au sein de l'équipe pour employer aux mieux leurs compétences. 
        </i>
    </div>

    <div>
        <b>Votre premier travail consiste à rendre le groupe homogène dans sa progression.</b>
        <br><br>
        Concentrez-vous sur vos hommes, et déléguez les taches externes. C'est en les écoutant que vous travaillerez.
        <br><br>
        <i>
            Exemple :  Vous vous placez sur une zone pour observer les ennemis. 
            En tant que TL, ne vous concentrez pas à chercher des pax au loin, c'est le taf de vos gars. 
            Pendant ce temps vous allez check et corriger qu'ils ont tous un bon azimut/position/couverture. 
            Vous allez surveillerer leur 6. 
            Et vous allez préparer la suite, regarder votre carte etc... 
            Une fois l'observation faite, le "médic" prend les 6 et vos gars vous font un topo de l'observation que vous validez 
            avec vos jumelles. 
        </i>
    </div>

    <div>
        <b>Vous devrez en permanence :</b>
        <ul>
            <li>Connaitre l’état physique (santé) de vos gars et leurs munitions</li>
            <li>Les positions des alliées sur votre carte</li>
            <li>Donner les positions de chacun</li>
            <li>Rappeler les objectifs courts</li>
            <li><a href="#DPIF">DPIF</a> (voir plus haut)</li>
        </ul>
    </div>

    <div>
        <a target="-blank" href="/img/forma/METTT.png"><img src="/img/forma/METTT.png"></a>
    </div>
</section>
@endsection