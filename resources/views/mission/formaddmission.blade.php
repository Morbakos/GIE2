@extends('layout.mainlayout')
@section('title', 'Missions')
@section('style', 'missions.css')

@section('content')

<section>
    <h1>Ajouter une mission</h1>

    @if (!Auth::guest())
    <form action="" method="POST">
        <label for="title">Nom de la mission</label>
        <input type="text" id="title" placeholder="Entrer un nom">

        <label for="author">Auteur de la mission</label>
        <input type="text" id="author" placeholder="Entrer votre pseudo">

        <label for="date-creation">Date de création</label>
        <input type="date" name="date-creation" id="date-creation">

        <div class="border"></div>

        <label for="number-players">Nombre de joueurs</label>
        <input type="number" name="number-players" id="number-players" 
         value="8" placeholder="Entrer le nombre de joueurs min">
        <input type="number" name="number-players-max" id="number-players-max" 
         placeholder="Entrer le nombre de joueurs max"> 

        <div class="border"></div>

        <label for="type-mission">Type de mission</label>
        <select name="type-mission" id="type-mission">
            <option value="">-- Sélectionner un type --</option>

            <option value="attaque">Attaque</option>
            <option value="pvp">PvP</option>
            <option value="defense">Défense</option>
            <option value="escorte">Éscorte</option>
            <option value="campagne">Campagne</option>
            <option value="multi-escouade">Multi-Escouade</option>
            <option value="assassinat">Assassinat</option>
            <option value="november">November</option>
            <option value="recherche-destruction">Recherche et Desctruction</option>
            <option value="intel">Intel</option>
        </select>

        <div class="border"></div>

        <label for="map">Map</label>
        <select name="map" id="map">
            <option value="">-- Sélectionner une carte --</option>

            <option value="altis">Altis</option>
            <option value="bukovina">Bukovina</option>
            <option value="bystrica">Bystrica</option>
            <option value="chernarus-summer">Chernarus Summer</option>
            <option value="chernarus-winter">Chernarus Winter</option>
            <option value="desert">Desert</option>
            <option value="desert-islande">Desert Islande</option>
            <option value="everon">Everon</option>
            <option value="kolgujev">Kolgujev</option>
            <option value="kujari">Kujari</option>
            <option value="livonie">Livonie</option>
            <option value="malden">Malden</option>
            <option value="malden2035">Malden 2035</option>
            <option value="nogova">Nogova</option>
            <option value="porto">Porto</option>
            <option value="proving-grounts">Proving Grounts</option>
            <option value="rahmadi">Rahmadi</option>
            <option value="realite-virtuelle">Réalité Virtuelle</option>
            <option value="sahrani">Sahrani</option>
            <option value="shapur">Shapur</option>
            <option value="southern-sahrani">Southern Sahrani</option>
            <option value="stratis">Stratis</option>
            <option value="takistan">Takistan</option>
            <option value="takistan-mountains">Takistan Mountains</option>
            <option value="tanoa">Tanoa</option>
            <option value="tchernarus">Tchernarus</option>
            <option value="united-sahrani">United Sahrani</option>
            <option value="utes">Utes</option>
            <option value="zargabad">Zargabad</option>
        </select>

        <div class="border"></div>

        <label for="heure-depart">Heure de départ in-game</label>
        <input type="time" name="heure-depart" id="heure-depart">

        <div class="border"></div>

        <label for="meteo">Météo</label>
        <div class="checkbox" id="meteo">
            <input type="checkbox" name="soleil" id="soleil">
            <label for="soleil">Soleil</label><br>
            <input type="checkbox" name="pluie" id="pluie">
            <label for="pluie">Pluie</label><br>
            <input type="checkbox" name="orage" id="orage">
            <label for="orage">Orage</label><br>
            <input type="checkbox" name="nuage" id="nuage">
            <label for="nuage">Nuage</label><br>
            <input type="checkbox" name="neige" id="neige">
            <label for="neige">Neige</label><br>
            <input type="checkbox" name="lune" id="lune">
            <label for="lune">Pleine Lune</label><br>
            <input type="checkbox" name="nuit" id="nuit">
            <label for="nuit">Nuit</label><br>
            <input type="checkbox" name="brouillard" id="brouillard">
            <label for="brouillard">Brouillard</label><br>
        </div>

        <div class="border"></div>

        <label for="terrains">Terrains</label>
        <div class="checkbox" id="terrains">
            <input type="checkbox" name="mer" id="mer">
            <label for="mer">Mer</label><br>
            <input type="checkbox" name="cote" id="cote">
            <label for="cote">Côte</label><br>
            <input type="checkbox" name="desert" id="desert">
            <label for="desert">Desert</label><br>
            <input type="checkbox" name="ile" id="ile">
            <label for="ile">Île</label><br>
            <input type="checkbox" name="foret" id="foret">
            <label for="foret">Forêt</label><br>
            <input type="checkbox" name="neige-map" id="neige-map">
            <label for="neige-map">Neige</label><br>
            <input type="checkbox" name="jungle" id="jungle">
            <label for="jungle">Jungle</label><br>
            <input type="checkbox" name="campagne" id="campagne">
            <label for="campagne">Campagne</label><br>
            <input type="checkbox" name="montagne" id="montagne">
            <label for="montagne">Montagne</label><br>
            <input type="checkbox" name="ville" id="ville">
            <label for="ville">Ville</label><br>
        </div>

        <div class="border"></div>

        <label for="equip">Équipements</label>
        <div class="checkbox" id="equip">
            <input type="checkbox" name="woodland" id="woodland">
            <label for="woodland">Woodland</label><br>
            <input type="checkbox" name="desert-equip" id="desert-equip">
            <label for="desert-equip">Désert</label><br>
            <input type="checkbox" name="neige-equip" id="neige-equip">
            <label for="neige-equip">Neige</label><br>
            <input type="checkbox" name="ville-equip" id="ville-equip">
            <label for="ville-equip">Ville</label><br>
            <input type="checkbox" name="forces-spe" id="forces-spe">
            <label for="forces-spe">Forces Spéciales</label><br>
            <input type="checkbox" name="rebelles" id="rebelles">
            <label for="rebelles">Rebelles</label><br>
            <input type="checkbox" name="civil" id="civil">
            <label for="civil">civil</label><br>
            <input type="checkbox" name="police" id="police">
            <label for="police">Police</label><br>
            <input type="checkbox" name="integre" id="integre">
            <label for="integre">Intégré</label><br>
        </div>

        <div class="border"></div>

        <label for="type-death">Type de mort</label>
        <select name="type-death" id="type-death">
            <option value="">-- Séléctionner une type de mort--</option>
            <option value="respawn">Respawn</option>
            <option value="definitive">Définitive</option>
        </select>

        <div class="border"></div>

        <label for="alliees">Troupes alliées</label>
        <div class="checkbox" id="alliees">
            <input type="checkbox" name="alpha" id="alpha">
            <label for="alpha">Alpha</label><br>
            <input type="checkbox" name="bravo" id="bravo">
            <label for="bravo">Bravo</label><br>
            <input type="checkbox" name="charlie" id="charlie">
            <label for="charlie">Charlie</label><br>
            <input type="checkbox" name="hotel" id="hotel">
            <label for="hotel">Hotel</label><br>
            <input type="checkbox" name="novembre" id="novembre">
            <label for="novembre">Novembre</label><br>
            <input type="checkbox" name="romeo" id="romeo">
            <label for="romeo">Roméo</label><br>
            <input type="checkbox" name="sierra" id="sierra">
            <label for="sierra">Sierra</label><br>
        </div>

        <a href="" class="btn">Ajouter des alliées</a>

        <div class="border"></div>

        <label for="ennemis">Troupes ennemis</label>
        <div class="checkbox" id="ennemis">
            <input type="checkbox" name="black-order" id="black-order">
            <label for="black-order">Black Order</label><br>
            <input type="checkbox" name="fia" id="fia">
            <label for="fia">FIA</label><br>
            <input type="checkbox" name="csat" id="csat">
            <label for="csat">CSAT</label><br>
            <input type="checkbox" name="spetnaz" id="spetnaz">
            <label for="spetnaz">Spetnaz</label><br>
        </div>

        <a href="" class="btn">Ajouter des ennemis</a>

        <div class="border"></div>

        <label for="objectif1">Objectif Principal</label>
        <select name="objectif1" id="objectif1">
            <option value="">-- Sélectionner un objectif --</option>
            <option value="secur-vip">Sécuriser VIP</option>
            <option value="secour-vip">Secourir VIP</option>
            <option value="escorter-vip">Éscorter VIP</option>
            <option value="neutral-target">Neutraliser cîble(s)</option>
            <option value="capture-target">Capturer cîble(s)</option>
            <option value="neutral-vehicule">Neutraliser véhicule(s)</option>
            <option value="local-obj-target">Localiser objectif(s)/cîble(s)</option>
            <option value="destroy-vehicule">Détruire véhicule(s)</option>
            <option value="recup-vehicule">Récupérer véhicule(s)</option>
            <option value="destroy-cache">Détruire câche (d'armes)</option>
            <option value="neutral-com">Neutraliser communication(s)</option>
            <option value="destroy-intel">Détruire intel(s)</option>
            <option value="destroy-obj">Détruire objectif(s)</option>
            <option value="recup-info-doc">Récupérer info(s)/doc(s)</option>
            <option value="recup-obj">Récupérer objet(s)</option>
            <option value="hack-intel">Pirater intel(s)</option>
            <option value="capture-zone">Capturer zone(s)</option>
            <option value="defend-zone">Défendre zone(s)</option>
            <option value="evacu-zone">Évacuer zone(s)</option>
            <option value="secur-zone">Sécuriser zone(s)</option>
            <option value="etablish-outpost">Établir avant-poste(s)</option>
            <option value="secour-outpost">Secourir avant-poste(s)</option>
            <option value="secour-alliee">Secourir alliée(s)</option>
            <option value="secour-hostage">Secourir otage(s)</option>
            <option value="defuse">Désarmer bombe(s)</option>
            <option value="enquete">Enquéter</option>
        </select>

        <a href="" class="btn">Ajouter des objectifs</a>

        <div class="border"></div>

        <label for="vehicules">Véhicules</label>
        <input type="text" placeholder="Entrer le nom d'un véhicule">

        <a href="" class="btn">Ajouter le véhicule</a>

        <div class="border"></div>

        <label for="infos">Informations importantes</label>
        <textarea name="infos" id="infos" cols="30" rows="10"
         placeholder="Entrer des informations complémentaires"></textarea>

        <div class="border"></div>

        <label for="breif">Breifing</label>
        <textarea name="breif" id="breif" cols="30" rows="10"
         placeholder="Exemple : date, contexte avant la mission, objectifs détaillés, lieu de départ, lieu d'objectif, lieu d'extraction, etc..."></textarea>

        <div class="border"></div>

        <label for="miniature">Miniature</label>
        <input type="file" name="miniature" id="miniature"><br>
        <label for="miniature" class="file"><i class="fas fa-download"></i> Choisir un fichier</label><br>

        <label for="jouabilite">Jouabilité</label>
        <div class="radiobox" id="jouabilite">
            <input type="radio" name="jouabilite" id="jouable">
            <label for="jouable">Jouable</label><br>
            <input type="radio" name="jouabilite" id="test">
            <label for="test">À tester</label><br>
            <input type="radio" name="jouabilite" id="no-jouable">
            <label for="no-jouable">Non Jouable</label><br>
        </div>

        <div class="border"></div>

        <a href="/missions" class="btn" type="submit">Ajouter la mission</a>
    </form>

    <div class="border"></div>

    <span>
        Si des éléments manques, et vous empêche d'ajouter votre mission, 
        merci de contacter un membre du <span class="didi-staff">@Staff</span> 
        directement sur notre <a href="https://discord.gg/AmWBzqV" class="didi">Discord</a>.
    </span>

    @else

    <div>
        Vous devez d'abord vous connecter avant de pouvoir ajouter une mission.
    </div>

    <div>
        Si vous rencontrez des problèmes merci de contacter un membre du <span class="didi-staff">@Staff</span> 
        directement sur notre <a href="https://discord.gg/AmWBzqV" class="didi">Discord</a>.
    </div>    

    @endif
</section>

<script type="text/javascript">
    function define_switch(group_switch, etat) {
        for(let i = 0; i < group_switch.length; i++) {
            group_switch[i].required = etat;
        }
    }

    function checkbox_required(checkbox_elem) {
        id_elem = checkbox_elem.getAttribute('id');
        id_group = id_elem.split('Checkbox');
        group = document.getElementsByName(id_group[0]);
        for(let i = 0; i < group.length; i++) {
            if(group[i].checked == true) {
                define_switch(group, false);
                break;
            }
            define_switch(group, true);
        }
    }

    function ajout(id_input, id_list) {
        var input_use = document.getElementById(id_input);
        var saisie = input_use.value;
        if (saisie !='') {
            input_use.value = '';
            document.getElementById(id_list).innerHTML += "<button class=\"list-group-item list-group-item-action\" onclick=\"supr(this)\">" + saisie + "</button>";
            input_use.classList.remove("invalid");
            input_use.required = false;
        }
        else {
            input_use.classList.add("invalid");
            input_use.required = true;
        }
    }

    function supr(elem_del) {
        elem_del.parentNode.removeChild(elem_del);
    }
</script>

@endsection