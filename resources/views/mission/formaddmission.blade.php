@section('header')
<!-- @if (!Auth::guest()) -->
<section class="container">
    <div class="container bg-dark text-light">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAddMission" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-plus"></i> @yield('sectiontitle') 
        </button>
        <div class="collapse" id="collapseAddMission">
            <h1 style="padding-top: 10%;">@yield('sectiontitle')</h1><br>
                <form  class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nom de la mission</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nom" required>
                                <div class="invalid-feedback">
                                    Entrer un nom pour la mission.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Auteur de la mission</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrer votre pseudo" required>
                                <div class="invalid-feedback">
                                    Entrer le pseudo du mission maker.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Date de création</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" required>
                            <div class="invalid-feedback">
                                Entrer la date de création de la mission.
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Map</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
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
                        <label for="exampleFormControlInput1">Nombre de joueurs</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nombre minimum" required>
                                <div class="invalid-feedback">
                                    Entrer un nombre de joueurs minimum (0 si pas de tranche).
                                </div>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nombre maximum" required>
                                <div class="invalid-feedback">
                                    Entrer un nombre de joueurs maximum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Type de mission</label>
                                <select class="form-control" id="exampleFormControlSelect1" required>
                                <option value="">-- Sélectionner un type de mission --</option>
                                <option value="attaque">Attaque</option>
                                <option value="pvp">PVP</option>
                                <option value="défense">Défense</option>
                                <option value="escorte">Escorte</option>
                                <option value="campagne">Campagne</option>
                                <option value="multi-escouade">Mutli-escouade</option>
                                <option value="assassina">Assassina</option>
                                <option value="november">November</option>
                                <option value="delta">Delta</option>
                                <option value="intel">Intel</option>
                                </select>
                                <div class="invalid-feedback">
                                    Entrer le type de la mission.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objectif principal</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un objectif" required>
                                <div class="invalid-feedback">
                                    Entrer l'objectif principal de la mission.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Heure de départ</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1" required>
                        <div class="invalid-feedback">
                            Entrer l'heure de départ de la mission.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group meteo" style="text-transform:capitalize;">
                                <label for="meteoFormControlInput1">Météo</label><br>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox1" value="soleil">
                                    <label class="custom-control-label" for="meteoCheckbox1">Soleil</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox2" value="pluie">
                                    <label class="custom-control-label" for="meteoCheckbox2">Pluie</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox3" value="orage">
                                    <label class="custom-control-label" for="meteoCheckbox2">orage</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox4" value="nuage">
                                    <label class="custom-control-label" for="meteoCheckbox4">Nuage</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox5" value="neige">
                                    <label class="custom-control-label" for="meteoCheckbox5">Neige</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox6" value="pleine lune">
                                    <label class="custom-control-label" for="meteoCheckbox6">Pleine Lune</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox7" value="nuit">
                                    <label class="custom-control-label" for="meteoCheckbox7">Nuit</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="meteo" id="meteoCheckbox8" value="brouillard">
                                    <label class="custom-control-label" for="meteoCheckbox8">Brouillard</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-transform:capitalize;">
                                <label for="terrainFormControlInput1">Terrain</label><br>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox1" value="mer">
                                    <label class="custom-control-label" for="terrainCheckbox1">Mer</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox2" value="côte">
                                    <label class="custom-control-label" for="terrainCheckbox2">Côte</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox3" value="desert">
                                    <label class="custom-control-label" for="terrainCheckbox3">Desert</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox4" value="île">
                                    <label class="custom-control-label" for="terrainCheckbox4">Île</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox5" value="forêt">
                                    <label class="custom-control-label" for="terrainCheckbox5">Forêt</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox6" value="jungle">
                                    <label class="custom-control-label" for="terrainCheckbox6">Jungle</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox7" value="campagne">
                                    <label class="custom-control-label" for="terrainCheckbox7">Campagne</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox8" value="montagne">
                                    <label class="custom-control-label" for="terrainCheckbox8">Montagne</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox9" value="neige">
                                    <label class="custom-control-label" for="terrainCheckbox9">Neige</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="terrainCheckbox10" value="ville">
                                    <label class="custom-control-label" for="terrainCheckbox10">Ville</label>
                                </div>
                            </div>
                        </div>
                    <div class="col">
                    <div class="form-group"  style="text-transform:capitalize;">
                        <label for="equipementFormControlInput1">Équipement</label><br>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox1" value="option1">
                            <label class="custom-control-label" for="equipementCheckbox1">Woodland</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox2" value="option2">
                            <label class="custom-control-label" for="equipementCheckbox2">Désert</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox3" value="option3">
                            <label class="custom-control-label" for="equipementCheckbox2">Neige</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox4" value="option4">
                            <label class="custom-control-label" for="equipementCheckbox4">Ville</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox5" value="option5">
                            <label class="custom-control-label" for="equipementCheckbox5">Force spécial</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox6" value="option6">
                            <label class="custom-control-label" for="equipementCheckbox6">Rebelles</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox7" value="option7">
                            <label class="custom-control-label" for="equipementCheckbox7">Civil</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox8" value="option8">
                            <label class="custom-control-label" for="equipementCheckbox8">Police</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox9" value="option9">
                            <label class="custom-control-label" for="equipementCheckbox9">Intégré</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox10" value="option10">
                            <label class="custom-control-label" for="equipementCheckbox10">November</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox11" value="option11">
                            <label class="custom-control-label" for="equipementCheckbox11">Sierra</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox12" value="option12">
                            <label class="custom-control-label" for="equipementCheckbox12">Alpha</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox13" value="option13">
                            <label class="custom-control-label" for="equipementCheckbox13">Bravo</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox14" value="option14">
                            <label class="custom-control-label" for="equipementCheckbox14">Charlie</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox15" value="option15">
                            <label class="custom-control-label" for="equipementCheckbox15">Hôtel</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="equipementCheckbox16" value="option16">
                            <label class="custom-control-label" for="equipementCheckbox16">Roméo</label>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Type de mort</label>
                        <select class="form-control" id="exampleFormControlSelect1" required>
                        <option value="">-- Sélectionner une type de mort --</option>
                        <option value="respawn">Respawn</option>
                        <option value="définitif">Définitif</option>
                        </select>
                        <div class="invalid-feedback">
                            Entrer le type de mort (respawn ou définitif).
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Troupes alliés</label>
                        <div class="hidden text-dark">
                            <ul class="list-group">
                                <li class="list-group-item">Item1</li>
                            </ul>
                        </div><br>
                        <div class="input-group mb-3">
                            <input type="name" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon2" required="false">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Troupes ennemies</label>
                        <div class="hidden text-dark">
                            <ul class="list-group">
                                <li class="list-group-item">Item1</li>
                            </ul>
                        </div><br>
                        <div class="input-group mb-3">
                            <input type="name" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon3" required="false">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objectif principal</label>
                                <select class="form-control" id="exampleFormControlSelect1" required>
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
                                <option value="récupérer">Récupérer infos/doc</option>
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
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objectifs secondaires</label>
                                <select multiple class="form-control" id="exampleFormControlSelect1">
                                <option>Sécuriser VIP</option>
                                <option>Secourir VIP</option>
                                <option>Escorter VIP</option>
                                <option>Neutraliser cible</option>
                                <option>Capturer cible</option>
                                <option>Neutraliser véhicules</option>
                                <option>Localiser objectif/cible</option>
                                <option>Détruire véhicule</option>
                                <option>Détruire cache</option>
                                <option>Détruire communication</option>
                                <option>Détruire intel</option>
                                <option>Détruire objectif</option>
                                <option>Récuperer infos/doc</option>
                                <option>Récuperer objets</option>
                                <option>Pirater intel</option>
                                <option>Capturer zone</option>
                                <option>Défendre Zone</option>
                                <option>Évacuer zone</option>
                                <option>Établir un avant-poste</option>
                                <option>Secourir un avant-poste</option>
                                <option>Secourir des alliés</option>
                                <option>Secourir des otages</option>
                                <option>Désarmer une Bombe</option>
                                <option>Enquéter</option>
                                <option>Récupérer véhicule</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Véhicules</label>
                        <div class="hidden text-dark">
                            <ul class="list-group">
                                <li class="list-group-item">Item1</li>
                            </ul>
                        </div><br>
                        <div class="input-group mb-3">
                            <input type="name" class="form-control" placeholder="Entrer un véhicule" aria-label="Entrer un véhicule" aria-describedby="button-addon3">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-plus"></i> Ajouter</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Informations importantes</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Entrer des informations" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Entrer les informations importantes de la mission qui aideront le leader.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Breifing</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Exemple : date , contexte avant le depart de la mission, mission et objectifs detaillés, lieux de départ, Lieu d'objectif, lieu d'extraction, puissances et forces ennemis, conditions ou matériel particuliers..." rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Entrer le breifing de la mission.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Miniature</label>
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
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>
<!-- @endif --> 
<script>
</script>
@endsection