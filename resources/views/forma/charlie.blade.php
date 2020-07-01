@extends('layout.mainlayout')
@section('title', 'Formation - Charlie')
@section('style', '')

@section('content')
<div class="container"><h1>Charlie, la composante de base</h1></div><br>
<img src="/img/charlie-360.jpg" alt="" srcset="">

<section class="mobile">
    <div>
        <h4>Sommaire</h4>
        <small>
            <ul>
                <li><a href="#preambule">I. Préambule</a></li>
                <li><a href="#preparation">II. Préparation</a></li>
                <li><a href="#missions-training">III. Les missions/training</a></li>
            </ul>
        </small>
    </div>
</section>

<div class="border"></div>

<section id="preambule">
    <h2>I. Préambule</h2>

    <div>
        <b>
            La formation initiale du Soldat est nécessaire pour toutes personnes désirant jouer sur une mission proposée par le G.I.E, 
            sauf si c'est une mission "publique". Le but n'est pas de vous faire perdre du temps, mais au contraire d'en faire gagner 
            à tous les participants.
        </b>
    </div>

    <div>
        <i>
            Admettons que votre Squad Leader (abrégé SL par la suite) donne l'ordre de progresser en tiroir jusqu'à une position. 
            Avec un peu de chance, vous savez ce que cela signifie "tiroir" et pouvez vous intégrer rapidement à la manœuvre. 
            Dans le cas contraire, vous retardez la manœuvre et mettez la vie de vos équipiers en danger. Dans le RP, cela est 
            handicapant pour vous, mais aussi pour ceux qui vous entoures. 
        </i>
    </div>

    <div>
        <i>
            Admettons maintenant que vous passiez entre 1h et 2h avant avec un formateur du G.I.E et que vous ayez appris toutes 
            les informations utiles susceptibles d'être utilisées pendant la mission. Vous aurez ainsi une meilleure compréhension 
            des actions demandées par le SL, serez un peu plus autonomes, et cela apportera un plus à votre expérience sur la 
            mission, ainsi qu'aux autres soldats autour de vous.
        </i>
    </div>

    <div>
        Finalement, tout au long de votre formation, votre formateur va remplir une "fiche de compétence", permettant de savoir à la 
        fin si oui ou non vous êtes apte à devenir fusilier du G.I.E. Pas de panique, on ne joue pas nos vies.
    </div>
</section>

<section>
    <h2>La formation charlie sera composée de :</h2>

    <div>
        <ul>
            <li><b>Radio</b> : TFR/additionnel - Protocole - Vocabulaire</li>
            <li>
                <b>Matériels</b> : Télémètre - Grenades - Outils de naviguation - Bouchons d'oreilles - 
                Outil de tranchée - Lampe fulton - Balise IR
            </li>
            <li><b>Naviguation</b> : Coordonnées à 8 chiffres - Azimut - Cadran - Distance - DAGR</li>
            <li><b>Formation</b> : Colone - Ligne - Chevron - Tiroir - Perroquet</li>
            <li><b>Déplacement</b> : Allure - Posture - Angle - Porte - 3D - Route - Point de tarte</li>
            <li><b>Combat</b> : Backblast - Fatigue - Trepier - Suppression - Superiorite du feu</li>
            <li><b>Communication</b> : DDRO - SITREP - Langue des signes - Compte rendu</li>
            <li><b>Véhicule</b> : Embarquer - Vérouiller - Débarquer - Parachute - Rappel</li>
            <li><b>Médical</b> : Menu - Protocole/soi - Protocole/allié - Les 3S "Sécuriser, Signaler, Soigner"</li>
        </ul>
    </div>

    <div><b>La formation dure environ 2h30</b></div>
</section>

<section id="preparation">
    <h2>II. Préparation</h2>
    
    <div>Afin de pouvoir nous rejoindre in-game, il y a quelques prérequis.</div>

    <div>
        Dans un premier temps, nous considérons que <b>dès que vous vous connectez au serveur</b> vous avez 
        <a href="/regles">lu approuver le règlement du G.I.E</a>. Par conséquent, <b>tout manquement au règlement
        sera sanctionné</b>, du simple avertissement vocal et/ou écrit au ban permanent du serveur, en passant par 
        le ban temporaire ou la restriction de rôle in-game.
    </div>

    <div>
        Les choses fâcheuses mais obligatoires étant terminées, je vous invite donc à 
        <a href="">aller sur cette page afin de télécharger et configurer Arma 3 Sync</a>, qui est la plateforme que 
        nous utilisons pour synchroniser et utiliser nos mods.
    </div>

    <div>
        Dernier point de la préparation, les missions. Pour faire simple, voici une liste des choses à connaître par cœur 
        pour les missions que vous effectuez chez nous : 

        <ul>
            <li>Le briefing est à 21h00. Si vous n'êtes pas là à 20h50, tant pis pour vous.</li>
            <li>
                Vous êtes responsable de vous même pour effectuer les tests nécessaires 
                (check des mods, du stuff et de la connexion au serveur) <b>avant le jour J</b>.
            </li>
            <li>
                Si vous êtes inscrit à une mission mais que vous ne pouvez pas être présent(e), 
                <b>vous devez prévenir un membre du G.I.E</b>. 
                De même, si vous n'êtes pas certain de pouvoir être présent, contentez vous d'un rôle de fusilier. 
                Vous aurez l'occasion de changer de rôle à une autre mission.
            </li>
        </ul>
    </div>
</section>

<section id="missions-training">
    <h2>III. Les missions/training</h2>

    <div>
        Une fois les préparations achevées, vous pourrez suivre votre formation dans des conditions optimales. 
        L'objectif final de cet entraînement est de vous former en tant que fusilier. 
        Il vous faudra devenir membre du G.I.E pour avoir accès aux formations de spécialisations.
    </div>

    <div>
        Une fois votre formation validée par le formateur qui vous suis, et si le résultat est positif, 
        vous pourrez alors vous joindre à nous dans nos missions et nos training, voir même 
        <a href="/rejoindre">postuler au statut de membre GIE</a>.
    </div>
</section>
@endsection