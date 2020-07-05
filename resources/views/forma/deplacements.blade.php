@extends('layout.mainlayout')
@section('title', 'Formation - Les déplacements')
@section('style', 'deplacement.css')

@section('content')
<div class="container"><h1>Les déplacements</h1></div><br>
<img src="/img/déplacements.jpg" alt="" srcset="">

<section class="mobile">
    <div>
        <h4>Sommaire</h4>
        <small>
            <ul>
                <li><a href="#ligne-feu">Ligne de feu</a></li>
                <li><a href="#colonne">Colonne</a></li>
                <li><a href="#ligne">Ligne</a></li>
                <li><a href="#y">Le "Y"</a></li>
                <li><a href="#tiroir">Tiroir</a></li>
                <li><a href="#perroquet">Perroquet</a></li>
                <li><a href="#ralli">Regroupement ou "ralli"</a></li>
                <li><a href="#gestion-fatigue">Gestion de la fatigue</a></li>
                <li><a href="#traverser-route">Traverser une route</a></li>
                <li><a href="#traverser-decouvert">Traverser un découvert</a></li>
                <li><a href="#point-tarte">Point de Tarte</a></li>
                <li><a href="#ouverture-porte">Ouverture de porte</a></li>
                <li><a href="#entrer-piece">Entrer dans une pièce</a></li>
                <li><a href="#couloirs">Les couloirs</a></li>
                <li><a href="#deroule">Le déroulé</a></li>
            </ul>
        </small>
    </div>
</section>

<div class="border"></div>

<section>
    <h2>Nous allons voir les déplacements de base : </h2>
    
    <div>
        <ul>
            <li>Ne jamais couper une ligne de feu sans l'annoncer</li>
            <li>Vos déplacements doivent prendre en compte la position de votre binôme/équipe</li>
            <li>Synchroniser vos actions avec le binôme et avec le reste de l'équipe</li>
            <li>
                Toujours communiquer avec son équipe : tout acte doit être dit oralement<br>
                <i>Exemple : "Je me déplace", "Je recharge", "J'entre", "Je traverse", etc...</i>
            </li>
        </ul>
    </div>
</section>

<div class="border"></div>

<section id="ligne-feu">
    <h2>Ligne de feu</h2>

    
    
    <div class="img-deplacment">
        <img src="/img/forma/ligne-feu.png">

        <div class="left-deplacment">
            Ligne de feu ici en <b style="color: #defdaf;">Vert</b>.
            <br><br>
            Avant chaque déplacement assurez-vous <b>de connaître la position de vos alliées</b>. (avant/arrière)
            <br><br>
            <u>Afin de ne jamais franchir une ligne de feu !</u>
            <br><br>
            <u>Assurez-vous qu'un allié n'est pas en cours de repositionnement</u> et ne va pas franchir votre ligne de feu.
            <br><br>
            La ligne de feu est l'<b>élément le plus important à maîtriser en situation de combat dynamique</b> où il faut 
            se relocaliser après un ou plusieurs tirs afin d'éviter les tirs de riposte. 
        </div>
    </div>
    
    <div>
        Quelques règles simples à s'imposer pour garder en permanence les bons réflexes :

        <ul>
            <li>
                <u>Je vérifie chacun de mes tirs</u>, si je ne suis pas certain de ma cible et que celle-ci ne me fixe pas, 
                je n’engage pas et j’annonce au leader. Si en revanche son arme est tournée vers moi, si elle ne s’annonce pas 
                et/ou qu’elle tire, et que de ce fait ma vie ou celle de mon escouade est engagée, je tire.
            </li>
            <li>
                <u>Avant de tirer, je regarde où sont mes alliés</u> autour de moi, notamment derrière, afin d’éviter de faire 
                un déplacement ou une roulade qui me placerait dans la ligne de feu de quelqu'un d'autre.
            </li>
            <li>Avant de bouger, je regarde où sont mes alliés dans l’<u>axe de progression</u> que j’ai choisi pour me relocaliser.</li>
            <li>
                En situation de combat où des alliés se trouvent un peu sur mes avants, je surveille leurs mouvements.
                S'ils tirent en bougeant, je n’hésite pas à annoncer «<u>ligne de feu</u>» ou «<u>ligne de feu *nom de la personne*</u>» 
                de façon claire, afin qu’elle prenne compte qu’elle se trouve à la limite de ma ligne de tir.
            </li>
        </ul>
    </div>

    <div>
        <u>En bougeant dans une zone où plusieurs alliés sont en position de tir je passe systématiquement derrière eux.</u> 
        Si je dois les dépasser latéralement, je dépasse par l’angle opposé à leur angle de surveillance, 
        si ce dernier ne fait pas face au 12.
    </div>
</section>

<div class="border"></div>

<section id="colonne">
    <h2>Colonne</h2>

    <div class="img-deplacment">
        <img src="/img/forma/colonne.png">

        <div class="left-deplacment">
            C’est le déplacement le plus utilisé. Il permet une couverture constante en continuant de faire avancer l’unité.
            <br><br>
            <b style="color: #fcc795;">Orange</b> : assure la sécurité avant de l’équipe, oriente. 
            Il se déplace de point en point et donne les ordres de stop. La tête va prendre les 12 (l’avant) et ouvrir la marche.
            <br><br>
            <b style="color: #defdaf;">Vert</b> : commande l’équipe, il règle l’allure, choisit les formations. Il assure aussi la sécurité aérienne et 
            droite de la colonne. Le second (généralement chef de l’escouade) va prendre un flan.
            <br><br>
            <b style="color: #fca7aa;">Rouge</b> : le troisième sera en charge de la sécurité aérienne et terrestre de la colonne à l'opposé de <b style="color: #defdaf;">Vert</b>.
            <br><br>
            <b style="color: #abc9fd;">Bleu</b> : le dernier de la colonne sera responsable de couvrir l’arrière de la progression, on dira "qu’il prend les 6".
        </div>
    </div>

    <div>
        L’ordre de la colonne sera donné par le TL. Généralement il respectera la logique suivante : 

        <ol>
            <li>Assaut en tête</li>
            <li>Soutien au milieu</li>
            <li>Lead & TP</li>
        </ol>

        ou : 
        
        <ol>
            <li>Mitrailleur</li>
            <li>Grenadier</li>
            <li>Fusilier</li>
            <li>Médic</li>
            <li>Opérateur radio</li>
            <li>Team leader</li>
            <li>Tireur de précision</li>
        </ol>

        Le Team leader peut se placer en fonction de l'action dans le groupe de tête (2 ou 3ème), ou souvent en fin de colonne.
        <br><br>
        <b><i>!! Important !!</i></b>
        <br><br>
        <i>
            Dans une colonne garder toujours une distance entre vos hommes. On ne double pas, on se cale sur le rythme du gars en face.
            À l'annonce d'un contact, sous le feu, il est humain de regarder dans la direction du danger.
            Le secteur de responsabilité est délaissé et les risques multipliés. Il faut donc surveiller son secteur et 
            <b><u>FAIRE CONFIANCE</u></b> à ses équipiers.
        </i>
    </div>
</section>

<div class="border"></div>

<section id="ligne">
    <h2>Ligne</h2>

    <div class="img-deplacment">
        <img src="/img/forma/ligne.png">

        <div class="left-deplacment">
            Ce déplacement est utilisé sur des lieux découverts.
            <br><br>
            <b style="color: #defdaf;">Vert</b> en milieu de ligne devra gérer les 6 (généralement le chef d’escouade).
            <br><br>
            <b style="color: #abc9fd;">Bleu</b> et <b style="color: #fca7aa;">Rouge</b> seront chargés de garder les côtés de la ligne.
            <br><br>
            <b>!! Important !!</b>
            <br><br>
            <i>
                Dans une ligne garder toujours une distance entre vos hommes. 
                <br><br>
                Garder un rythme régulier et en cohésion avec le groupe.
                <br><br>
                Faites confiance à vos co-equipiers et ne garder l’œil que sur votre degré de vue (120° max).
            </i>
        </div>
    </div>
</section>

<div class="border"></div>

<section id="y">
    <h2>Le "Y"</h2>

    <div class="img-deplacment">
        <img src="/img/forma/y.png">

        <div class="left-deplacment">
           Ce déplacement augmente la sécurité du groupe à l'avant. Il est idéal pour appréhender un carrefour.
        </div>
    </div>
</section>

<div class="border"></div>

<section id="tiroir">
    <h2>Tiroir</h2>

    <div class="img-deplacment">
        <img src="/img/forma/tiroir.png">

        <div class="left-deplacment">
           Ce déplacement est utilisé en binôme ou trinôme, pour assurer un appui mutuel.

           <ol>
               <li>Le <b style="color: #08760a;">premier</b> se déplace vers un abri, pendant que le <b style="color: #75790b;">second</b> le couvre.</li>
               <li>Le <b style="color: #75790b;">second</b> le rejoint, pendant que le <b style="color: #08760a;">premier</b> le couvre.</li>
               <li style="list-style-type: none;">etc...</li>
           </ol>
        </div>
    </div>
</section>

<div class="border"></div>

<section id="perroquet">
    <h2>Perroquet</h2>

    <div class="img-deplacment">
        <img src="/img/forma/perroquet.jpg">

        <div class="left-deplacment">
            Ce déplacement est utilisé en binôme ou trinôme pour assurer un appui mutuel.
            Il est plus rapide mais également plus fatiguant.

           <ol>
               <li>Le <b style="color: #08760a;">premier</b> se déplace vers un abri, pendant que le <b style="color: #75790b;">second</b> le couvre.</li>
               <li>
                    Le <b style="color: #75790b;">second</b> progresse au delà de l’abri du <b style="color: #08760a;">premier</b> 
                    et se positionne, pendant que le <b style="color: #08760a;">premier</b> le couvre.
                </li>
                <li>Puis le <b style="color: #08760a;">premier</b> à son tour se déplace au delà, etc...</li>
           </ol>
        </div>
    </div>
</section>

<div class="border"></div>

<section id="ralli">
    <h2>Regroupement ou "ralli"</h2>

    <div class="img-deplacment">
        <img src="/img/forma/regroupement.jpg">

        <div class="left-deplacment">
            À utiliser en situation peu claire. On peut aussi l'utiliser pour les arrêts de marche, ou pour les topo du TL.
            <br><br>
            Il permet de chuchoter la strat à venir en restant concentré sur les 360°.
            <br><br>
            <b>!! Attention !!</b>
            <br><br>
            Sur le terrain, veillez à prendre l'habitude d'écouter les ordres <b>sans regarder la personne qui parle</b>.
            <br><br>
            <u>Vous devez garder votre azimut.</u>
        </div>
    </div>
</section>

<div class="border"></div>

<section id="gestion-fatigue">
    <h2>Gestion de la fatigue</h2>

    <div class="img-deplacment">
        <img src="/img/forma/fatigue.gif">

        <div class="left-deplacment">
            Il existe 4 types de déplacements : la marche, la course de patrouille [<kbd>C</kbd>], 
            la course (par défaut) et le sprint [<kbd>Shift</kbd>].
            
            <ul>
                <li>Marcher pour se reposer (vous continuez d'avancer et récupérez)</li>
                <li>Prioriser la course de patrouille [<kbd>C</kbd>]</li>
            </ul>

            Arme baissée [2x <kbd>Ctrl</kbd>] pour se déplacer rapidement entre deux pauses.
            <br><br>
            <b>
                N'hésitez pas à demander une tempo à votre groupe. Un soldat essoufflé ne pourra pas assurer 
                un combat propre.<br><br>
                Vous ne devez jamais être à bout de force.
            </b>
        </div>
    </div>
</section>

<div class="border"></div>

<section id="traverser-route">
    <h2>Traverser une route</h2>

    <div class="img-deplacment">
        <img src="/img/forma/traverser-rue.png">

        <div class="left-deplacment">
            <b>!! Les formations de traversées de routes et de découverts ne s'appliquent que sous certaines conditions !!</b>
            <br><br>
            <ul>
                <li>
                    Dans le cas d'une traversée d'un groupe < 8 personnes, seuls les soldats <b style="color: #aa1e1e;">Rouge</b> 
                    et <b style="color: #46eb7d;">Vert</b> se mettront en place.
                </li>
                <li>
                    Pour un groupe > 8 personnes, on ajoutera les soldats <b style="color: #eb7d46;">Orange</b> 
                    et <b style="color: #46b4eb;">Bleu</b>.
                </li>
            </ul>
            La formation ne s'applique que sous l'ordre du leader.
        </div>
    </div>

    <div>
        <b style="color: #aa1e1e;">Rouge</b> se met en position en parallèle à la route. 
        <small>(le côté le plus dangereux si possible)</small>
        <br><br>
        <b style="color: #46eb7d;">Vert</b> se positionne dos à <b style="color: #aa1e1e;">Rouge</b>.
        <br><br>
        <b style="color: #eb7d46;">Orange</b> tape à l'épaule de <b style="color: #46eb7d;">Vert</b> [<kbd>Shift</kbd> + <kbd>T</kbd>], 
        <i>traverse</i> et se positionne de la même manière que <b style="color: #46eb7d;">Vert</b>.
        <br><br>
        <b style="color: #46b4eb;">Bleu</b> tape l'épaule de <b style="color: #aa1e1e;">Rouge</b>, <i>traverse</i> et se place dos 
        à <b style="color: #eb7d46;">Orange</b>.
        <br><br>
        Le reste de l'équipe peut passer.
        <br><br>
        <b style="color: #46eb7d;">Vert</b> décroche d'abord, et <b style="color: #aa1e1e;">Rouge</b> en dernier.
    </div>
</section>

<div class="border"></div>

<section id="traverser-decouvert">
    <h2>Traverser un découvert</h2>

    <div>
        <ol>
            <li>
                Avant de se déplacer sous un potentiel feu ennemi, il est indispensable de visualiser sa prochaine couverture.
                <br><br>
                On appel cela "<b>faire un bond</b>". Concrètement vous êtes au point A et vous allez au B à 40m.
                <b>Fractionner le chemin autant que possible (arbre, palissade, objets).</b>
            </li>
            <li>
                Si aucun obstacle d'aide est sur votre route et que vous êtes privé de couverture, il faut faire "<b>baisser les têtes</b>".
                Déplacer vous en appliquant un feu régulier et juste. Le but n'est pas de toucher, mais d'obliger l'adversaire à se couvrir 
                pendant votre déplacement.
                <br><br>
                <small>
                    Si vous traversez un découvert et n'êtes pas pris d'assaut, accélérer le pas. Restez le moins possible à découvert. 
                    Ne traversez pas un champs accroupi ! 
                </small>
            </li>
        </ol>
    </div>
</section>

<div class="border"></div>

<section id="point-tarte">
    <h2>Point de Tarte</h2>

    <div class="img-deplacment">
        <img src="/img/forma/angle.png">

        <div class="left-deplacment">
            <u><b>Utilisation du "point de tarte"</b></u>
            <br><br>
            On appelle point de tarte le fait de faire pencher son arme pour se découvrir au minimum, <i>dans un angle par exemple</i>.
            <br><br>
            Pour cela on pense très fort à <kbd>Ctrl</kbd> + <kbd>E</kbd> ou à <kbd>Ctrl</kbd> + <kbd>A</kbd>.
            Pour bloquer ta position à gauche ou à droite il faudra penser à 2x <kbd>E</kbd> ou 2x <kbd>A</kbd>.
        </div>
    </div>
</section>

<div class="border"></div>

<section id="ouverture-porte">
    <h2>Ouverture de porte</h2>

    <div style="display: inline-flex;">
        <img src="/img/forma/ouverture-porte.png">
    </div>
    <br>
    On peut ouvrir lentement une porte en pensant fort à <kbd>Ctrl</kbd> + <kbd>Space</kbd> + <kbd>Molette Haut</kbd> ou 
    <kbd>Ctrl</kbd> + <kbd>Space</kbd> + <kbd>Molette Bas</kbd> pour la refermer de la même manière.
</section>

<div class="border"></div>

<section id="entrer-piece">
    <h2>Entrer dans une pièce</h2>

    <div class="img-deplacment">
        <img src="/img/forma/entrer-piece1.png">
        <img src="/img/forma/entrer-piece2.png">
        <img src="/img/forma/entrer-piece3.jpg">
    </div>
</section>

<div class="border"></div>

<section id="couloirs">
    <h2>Les couloirs</h2>
    <br><br>
    <b>Aborder un couloir</b>
    <br>
    <div style="display: inline-flex;">
        <img src="/img/forma/couloir.jpg">
    </div>
    <br>
    <b>Progresser dans un couloir</b>
    <br>
    <div style="display: inline-flex;">
        <img src="/img/forma/couloir-progression.png">
    </div>
</section>

<div class="border"></div>

<section id="deroule">
    <h2>Le déroulé</h2>
    <br><br>
    <b>Avancer en déroulé</b>
    <br>
    <div style="display: inline-flex;">
        <a href="/img/forma/deroule.png"><img src="/img/forma/deroule.png"></a>
    </div>
    <br>
    <b>Réaction sur engagement</b>
    <br>
    <div style="display: inline-flex;">
        <a href="/img/forma/reaction-engagement.png"><img src="/img/forma/reaction-engagement.png"></a>
    </div>
    <br>
    <b>Réaction en cas de bléssé</b>
    <br>
    <div style="display: inline-flex;">
        <a href="/img/forma/reaction-blesse.png"><img src="/img/forma/reaction-blesse.png"></a>
    </div>
</section>
@endsection