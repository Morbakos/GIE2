@section('header')
<!-- @ if (!Auth::guest()) -->
<section class="container">
    <div class="container bg-dark text-light">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd">
            <i class="fas fa-plus"></i> @yield('sectiontitle') 
        </button>
        <div class="collapse" id="collapseAdd">
            <h1 style="padding-top: 10%;">@yield('sectiontitle')</h1><br>
                <form  class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="missionFormControlInput">Nom de la mission</label>
                                <input type="text" class="form-control" id="missionFormControlInput" placeholder="Entrer un nom" required>
                                <div class="invalid-feedback">
                                    Entrer un nom pour la mission.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="auteurFormControlInput">Auteur de la mission</label>
                                <input type="text" class="form-control" id="auteurFormControlInput" placeholder="Entrer votre pseudo" required>
                                <div class="invalid-feedback">
                                    Entrer le pseudo du mission maker.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="dateFormControlInput">Date de création</label>
                            <input type="date" class="form-control" id="dateFormControlInput" required>
                            <div class="invalid-feedback">
                                Entrer la date de création de la mission.
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="mapFormControlInput">Map</label>
                        <select class="form-control" id="mapFormControlSelect" required>
                        <option value="">-- Sélectionner une map --</option>
                        <option value="altis">Altis</option>
                        <option value="stratis">Stratis</option>
                        <option value="tanoa">Tanoa</option>
                        <option value="malden 2035">Malden 2035</option>
                        </select>
                        <div class="invalid-feedback">
                            Entrer la map où se déroule la mission.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nbrPlayerFormControlInput">Nombre de joueurs</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="nbrPlayerFormControlInput1" placeholder="Entrer un nombre minimum" value="0" required>
                                <div class="invalid-feedback">
                                    Entrer un nombre de joueurs minimum (0 si pas de tranche).
                                </div>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="nbrPlayerFormControlInput2" placeholder="Entrer un nombre maximum" required>
                                <div class="invalid-feedback">
                                    Entrer un nombre de joueurs maximum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="missionFormControlInput">Type de mission</label>
                                <select class="form-control" id="missionFormControlSelect" required>
                                <option value="">-- Sélectionner un type de mission --</option>
                                <option value="attaque">Attaque</option>
                                <option value="pvp">PVP</option>
                                <option value="défense">Défense</option>
                                <option value="escorte">Escorte</option>
                                <option value="campagne">Campagne</option>
                                <option value="multi-escouade">Mutli-escouade</option>
                                <option value="assassina">Assassinat</option>
                                <option value="november">November</option>
                                <option value="delta">Recherche et destruction</option>
                                <option value="intel">Intel</option>
                                </select>
                                <div class="invalid-feedback">
                                    Entrer le type de la mission.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="timeFormControlInput">Heure de départ in-game</label>
                                <input type="time" class="form-control" id="timeFormControlInput" required>
                                <div class="invalid-feedback">
                                    Entrer l'heure de départ de la mission.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group meteo" style="text-transform:capitalize;">
                                <label for="meteoFormControlInput1">Météos</label><br>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox1" value="soleil" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox1">Soleil</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox2" value="pluie" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox2">Pluie</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox3" value="orage" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox3">orage</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox4" value="nuage" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox4">Nuage</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox5" value="neige" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox5">Neige</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox6" value="pleine lune" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox6">Pleine Lune</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox7" value="nuit" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox7">Nuit</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox8" value="brouillard" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="meteoCheckbox8">Brouillard</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-transform:capitalize;">
                                <label for="terrainFormControlInput1">Terrains</label><br>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox1" value="mer" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox1">Mer</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox2" value="côte" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox2">Côte</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox3" value="desert" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox3">Desert</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox4" value="île" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox4">Île</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox5" value="forêt" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox5">Forêt</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox6" value="jungle" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox6">Jungle</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox7" value="campagne" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox7">Campagne</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox8" value="montagne" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox8">Montagne</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox9" value="neige" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox9">Neige</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terrain" id="terrainCheckbox10" value="ville" onclick="checkbox_required(this)" required>
                                    <label class="custom-control-label" for="terrainCheckbox10">Ville</label>
                                </div>
                            </div>
                        </div>
                    <div class="col">
                    <div class="form-group"  style="text-transform:capitalize;">
                        <label for="equipementFormControlInput1">Équipements</label><br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox1" value="option1" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox1">Woodland</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox2" value="option2" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox2">Désert</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox3" value="option3" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox3">Neige</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox4" value="option4" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox4">Ville</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox5" value="option5" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox5">Forces spéciales</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox6" value="option6" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox6">Rebelles</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox7" value="option7" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox7">Civil</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox8" value="option8" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox8">Police</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="equipement" id="equipementCheckbox9" value="option9" onclick="checkbox_required(this)" required>
                            <label class="custom-control-label" for="equipementCheckbox9">Intégré</label>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="mortFormControlInput">Type de mort</label>
                        <select class="form-control" id="mortFormControlSelect" required>
                        <option value="">-- Sélectionner une mort --</option>
                        <option value="respawn">Respawn</option>
                        <option value="définitif">Définitive</option>
                        </select>
                        <div class="invalid-feedback">
                            Entrer le type de mort (respawn ou définitive).
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="allieFormControlInput">Troupes alliées</label>
                        <div class="hidden text-dark">
                            <div class="list-group" id="alliees">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon2" id="allie" required>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="ajout('allie', 'alliees')"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ennemiFormControlInput">Troupes ennemies</label>
                        <div class="hidden text-dark">
                            <div class="list-group" id="ennemis">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon3" id="ennemi" required>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="ajout('ennemi', 'ennemis')"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="objPriFormControlInput">Objectif principal</label>
                        <select class="form-control" id="objPriFormControlSelect" required>
                        <option value="">-- Sélectionner un objectif --</option>
                        <option value="sécuriser VIP">Sécuriser VIP</option>
                        <option value="secourir VIP">Secourir VIP</option>
                        <option value="escorter VIP">Escorter VIP</option>
                        <option value="neutraliser cible">Neutraliser cible</option>
                        <option value="capturer cible">Capturer cible</option>
                        <option value="neutraliser véhicules">Neutraliser véhicules</option>
                        <option value="localiser objectif/cible">Localiser objectif/cible</option>
                        <option value="détruire véhicule">Détruire véhicule</option>
                        <option value="détruire cache">Détruire cache</option>
                        <option value="détruire communication">Détruire communication</option>
                        <option value="détruire intel">Détruire intel</option>
                        <option value="détruire objectif">Détruire objectif</option>
                        <option value="récupérer infos">Récupérer infos/doc</option>
                        <option value="récupérer objets">Récupérer objets</option>
                        <option value="pirater intel">Pirater intel</option>
                        <option value="capturer zone">Capturer zone</option>
                        <option value="défendre zone">Défendre Zone</option>
                        <option value="évacuer zone">Évacuer zone</option>
                        <option value="établir un avant-poste">Établir un avant-poste</option>
                        <option value="secourir un avant-poste">Secourir un avant-poste</option>
                        <option value="secourir des alliés">Secourir des alliés</option>
                        <option value="secourir des otages">Secourir des otages</option>
                        <option value="désarmer une bombe">Désarmer une Bombe</option>
                        <option value="enquéter">Enquéter</option>
                        <option value="récupérer véhicule">Récupérer véhicule</option>
                        </select>
                        <div class="invalid-feedback">
                            Choisir un objectif principal pour la mission.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="objSecFormControlInput">Objectifs secondaires</label>
                        <div class="hidden text-dark">
                            <div class="list-group" id="obj-secs">
                            </div>
                        </div>
                        <div class="input-group mb-3" id="input-obj-sec">
                            <select class="form-control" id="obj-sec">
                            <option value="">-- Sélectionner un objectif --</option>
                            <option value="sécuriser VIP">Sécuriser VIP</option>
                            <option value="secourir VIP">Secourir VIP</option>
                            <option value="escorter VIP">Escorter VIP</option>
                            <option value="neutraliser cible">Neutraliser cible</option>
                            <option value="capturer cible">Capturer cible</option>
                            <option value="neutraliser véhicules">Neutraliser véhicules</option>
                            <option value="localiser objectif/cible">Localiser objectif/cible</option>
                            <option value="détruire véhicule">Détruire véhicule</option>
                            <option value="détruire cache">Détruire cache</option>
                            <option value="détruire communication">Détruire communication</option>
                            <option value="détruire intel">Détruire intel</option>
                            <option value="détruire objectif">Détruire objectif</option>
                            <option value="récupérer infos">Récupérer infos/doc</option>
                            <option value="récupérer objets">Récupérer objets</option>
                            <option value="pirater intel">Pirater intel</option>
                            <option value="capturer zone">Capturer zone</option>
                            <option value="défendre zone">Défendre Zone</option>
                            <option value="évacuer zone">Évacuer zone</option>
                            <option value="établir un avant-poste">Établir un avant-poste</option>
                            <option value="secourir un avant-poste">Secourir un avant-poste</option>
                            <option value="secourir des alliés">Secourir des alliés</option>
                            <option value="secourir des otages">Secourir des otages</option>
                            <option value="désarmer une bombe">Désarmer une Bombe</option>
                            <option value="enquéter">Enquéter</option>
                            <option value="récupérer véhicule">Récupérer véhicule</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="ajout('obj-sec', 'obj-secs')"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="vehiculeFormControlInput">Véhicules</label>
                        <div class="hidden text-dark">
                            <div class="list-group" id="vehicules">
                            </div>
                        </div>
                        <div class="input-group mb-3" id="input-vehicule">
                            <input type="text" class="form-control" placeholder="Entrer un véhicule" aria-label="Entrer un véhicule" aria-describedby="button-addon3" id="vehicule" required>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" onclick="ajout('vehicule', 'vehicules')"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="infoFormControlTextarea">Informations importantes</label>
                        <textarea class="form-control" id="infoFormControlTextarea"  placeholder="Entrer des informations" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Entrer les informations importantes de la mission qui aideront le leader.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="briefFormControlTextarea">Briefing</label>
                        <textarea class="form-control" id="briefFormControlTextarea"  placeholder="Exemple : date , contexte avant le depart de la mission, mission et objectifs detaillés, lieu de départ, lieu d'objectif, lieu d'extraction, puissances et forces ennemies, conditions ou équipements particuliers..." rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Entrer le briefing de la mission.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="miniatureFormControlTextarea">Miniature</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" required>
                                <label class="custom-file-label" for="inputGroupFile04">Choisir un fichier</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jouableFormControlTextarea1">Jouable ou non</label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="jouableRadios" id="jouableRadios1" value="option1" required>
                            <label class="custom-control-label" for="jouableRadios1">
                                <span class="badge badge-success"><i class="fas fa-check"></i> Jouable</span>
                            </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="jouableRadios" id="jouableRadios2" value="option2" checked required>
                            <label class="custom-control-label" for="jouableRadios2">
                                <span class="badge badge-secondary"><i class="fas fa-sync"></i> À tester</span>
                            </label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input class="custom-control-input" type="radio" name="jouableRadios" id="jouableRadios3" value="option3" required>
                            <label class="custom-control-label" for="jouableRadios3">
                                <span class="badge badge-danger"><i class="fas fa-times"></i> Non jouable</span>
                            </label>
                        </div>
                    </div>
                    @yield('form')
                    <div class="form-group">
                        <div class="container">
                            <button class="btn btn-primary" type="submit" id="buttonSendFormAddMission"><i class="fas fa-paper-plane"></i> Envoyer</button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Chargement...
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
<!-- @ endif --> 
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