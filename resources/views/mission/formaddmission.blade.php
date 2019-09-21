@section('header')
@if (!Auth::guest())
<section class="container">
    <div class="container bg-dark text-light">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAddMission" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-plus"></i> @yield('sectiontitle') 
        </button>
        <div class="collapse" id="collapseAddMission">
            <h1 style="padding-top: 10%;">@yield('sectiontitle')</h1><br>
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nom de la mission</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nom">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Auteur de la mission</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer votre pseudo">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlInput1">Date de création</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Map</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Altis</option>
                        <option>Stratis</option>
                        <option>Tanoa</option>
                        <option>Malden 2035</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre de joueurs</label>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nombre minimum">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nombre maximum">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Type de mission</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>Attaque</option>
                                <option>PVP</option>
                                <option>Défense</option>
                                <option>Escorte</option>
                                <option>Campagne</option>
                                <option>Mutli-escouade</option>
                                <option>Assassina</option>
                                <option>November</option>
                                <option>Delta</option>
                                <option>Intel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objectif principal</label>
                                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un objectif">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Heure de départ</label>
                        <input type="time" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group" style="text-transform:capitalize;">
                                <label for="meteoFormControlInput1">Météo</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox1" value="soleil">
                                    <label class="form-check-label" for="meteoCheckbox1">Soleil</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox2" value="pluie">
                                    <label class="form-check-label" for="meteoCheckbox2">Pluie</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox3" value="orage">
                                    <label class="form-check-label" for="meteoCheckbox2">orage</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox4" value="nuage">
                                    <label class="form-check-label" for="meteoCheckbox4">Nuage</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox5" value="neige">
                                    <label class="form-check-label" for="meteoCheckbox5">Neige</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox6" value="pleine lune">
                                    <label class="form-check-label" for="meteoCheckbox6">Pleine Lune</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox7" value="nuit">
                                    <label class="form-check-label" for="meteoCheckbox7">Nuit</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="meteoCheckbox8" value="brouillard">
                                    <label class="form-check-label" for="meteoCheckbox8">Brouillard</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group" style="text-transform:capitalize;">
                                <label for="terrainFormControlInput1">Terrain</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox1" value="mer">
                                    <label class="form-check-label" for="terrainCheckbox1">Mer</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox2" value="côte">
                                    <label class="form-check-label" for="terrainCheckbox2">Côte</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox3" value="desert">
                                    <label class="form-check-label" for="terrainCheckbox2">Desert</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox4" value="île">
                                    <label class="form-check-label" for="terrainCheckbox4">Île</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox5" value="forêt">
                                    <label class="form-check-label" for="terrainCheckbox5">Forêt</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox6" value="jungle">
                                    <label class="form-check-label" for="terrainCheckbox6">Jungle</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox7" value="campagne">
                                    <label class="form-check-label" for="terrainCheckbox7">Campagne</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox8" value="montagne">
                                    <label class="form-check-label" for="terrainCheckbox8">Montagne</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox9" value="neige">
                                    <label class="form-check-label" for="terrainCheckbox9">Neige</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terrainCheckbox10" value="ville">
                                    <label class="form-check-label" for="terrainCheckbox10">Ville</label>
                                </div>
                            </div>
                        </div>
                    <div class="col">
                    <div class="form-group"  style="text-transform:capitalize;">
                        <label for="equipementFormControlInput1">Équipement</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox1" value="option1">
                            <label class="form-check-label" for="equipementCheckbox1">Woodland</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox2" value="option2">
                            <label class="form-check-label" for="equipementCheckbox2">Désert</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox3" value="option3">
                            <label class="form-check-label" for="equipementCheckbox2">Neige</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox4" value="option4">
                            <label class="form-check-label" for="equipementCheckbox4">Ville</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox5" value="option5">
                            <label class="form-check-label" for="equipementCheckbox5">Force spécial</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox6" value="option6">
                            <label class="form-check-label" for="equipementCheckbox6">Rebelles</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox7" value="option7">
                            <label class="form-check-label" for="equipementCheckbox7">Civil</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox8" value="option8">
                            <label class="form-check-label" for="equipementCheckbox8">Police</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox9" value="option9">
                            <label class="form-check-label" for="equipementCheckbox9">Intégré</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox10" value="option10">
                            <label class="form-check-label" for="equipementCheckbox10">November</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox11" value="option11">
                            <label class="form-check-label" for="equipementCheckbox11">Sierra</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox12" value="option12">
                            <label class="form-check-label" for="equipementCheckbox12">Alpha</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox13" value="option13">
                            <label class="form-check-label" for="equipementCheckbox13">Bravo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox14" value="option14">
                            <label class="form-check-label" for="equipementCheckbox14">Charlie</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox15" value="option15">
                            <label class="form-check-label" for="equipementCheckbox15">Hôtel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="equipementCheckbox16" value="option16">
                            <label class="form-check-label" for="equipementCheckbox16">Roméo</label>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Type de mort</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Respawn</option>
                        <option>Définitif</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Troupes alliés</label>
                                <div class="hidden text-dark">
                                    <ul class="list-group">
                                        <li class="list-group-item">Item1</li>
                                    </ul>
                                </div><br>
                                <div class="input-group mb-3">
                                    <input type="name" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-plus"></i> Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Troupes ennemies</label>
                                <div class="hidden text-dark">
                                    <ul class="list-group">
                                        <li class="list-group-item">Item1</li>
                                    </ul>
                                </div><br>
                                <div class="input-group mb-3">
                                    <input type="name" class="form-control" placeholder="Entrer une faction" aria-label="Entrer une faction" aria-describedby="button-addon3">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" id="button-addon2"><i class="fas fa-plus"></i> Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Objectif principal</label>
                                <select class="form-control" id="exampleFormControlSelect1">
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
                        <label for="exampleFormControlTextarea1">Informations importante</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Entrer des informations" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Breifing</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Exemple : date , contexte avant le depart de la mission, mission et objectifs detaillés, lieux de départ, Lieu d'objectif, lieu d'extraction, puissances et forces ennemis, conditions ou matériel particuliers..." rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Miniature</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">Choisir un fichier</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Jouable ou non</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <span class="badge badge-success"><i class="fas fa-check"></i> jouable</span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                <span class="badge badge-secondary"><i class="fas fa-sync"></i> à tester</span>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                            <label class="form-check-label" for="exampleRadios3">
                                <span class="badge badge-danger"><i class="fas fa-times"></i> non jouable</span>
                            </label>
                        </div>
                    </div>
                    @yield('form')
                    <button class="btn btn-primary" type="button" id="inputGroupFileAddon04"><i class="fas fa-paper-plane"></i> Envoyer</button>
            </form>
        </div>
    </div>
</section>
@endif
@endsection