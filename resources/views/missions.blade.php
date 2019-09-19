<?php $page = 3 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Missions')
<!-- on définit le contenu de la page -->
@section('content')
    @if (!Auth::guest())
    <section class="container">
        <div class="container bg-dark text-light">
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i class="fas fa-plus"></i> Ajouter une mission
            </button>
            <div class="collapse" id="collapseExample">
                <h1 style="padding-top: 10%;">Ajouter une mission</h1><br>
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
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Météo</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Soleil</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Pluie</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox2">Orage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Nuage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                        <label class="form-check-label" for="inlineCheckbox5">Neige</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                        <label class="form-check-label" for="inlineCheckbox6">Pleine Lune</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                                        <label class="form-check-label" for="inlineCheckbox7">Nuit</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                                        <label class="form-check-label" for="inlineCheckbox8">Brouillard</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Terrain</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Mer</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Côte</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox2">Desert</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Île</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                        <label class="form-check-label" for="inlineCheckbox5">Fôret</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                        <label class="form-check-label" for="inlineCheckbox6">Jungle</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                                        <label class="form-check-label" for="inlineCheckbox7">Campagne</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                                        <label class="form-check-label" for="inlineCheckbox8">Montagne</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                                        <label class="form-check-label" for="inlineCheckbox9">Neige</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                                        <label class="form-check-label" for="inlineCheckbox10">Ville</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Équipement</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Woodland</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Désert</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox2">Neige</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                <label class="form-check-label" for="inlineCheckbox4">Ville</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                <label class="form-check-label" for="inlineCheckbox5">Force spécial</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                                <label class="form-check-label" for="inlineCheckbox6">Rebelles</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                                <label class="form-check-label" for="inlineCheckbox7">Civil</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                                <label class="form-check-label" for="inlineCheckbox8">Police</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                                <label class="form-check-label" for="inlineCheckbox9">Intégré</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                                <label class="form-check-label" for="inlineCheckbox10">November</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="option11">
                                <label class="form-check-label" for="inlineCheckbox11">Sierra</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="option12">
                                <label class="form-check-label" for="inlineCheckbox12">Alpha</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="option13">
                                <label class="form-check-label" for="inlineCheckbox13">Bravo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="option14">
                                <label class="form-check-label" for="inlineCheckbox14">Charlie</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="option15">
                                <label class="form-check-label" for="inlineCheckbox15">Hôtel</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="option16">
                                <label class="form-check-label" for="inlineCheckbox16">Roméo</label>
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
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Informations importante</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Entrer des informations" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Breifing</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Exemple : date , contexte avant le depart de la mission, mission et objectifs detaillés, lieux de départ, Lieu d'objectif, lieu d'extraction, puissances et forces ennemis, conditions ou matériel particuliers..." rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Miniature</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="inputGroupFileAddon04"><i class="fas fa-paper-plane"></i> Envoyer</button></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Statut de la mission</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    <span class="badge badge-success"><i class="fas fa-check"></i></span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    <span class="badge badge-secondary"><i class="fas fa-sync"></i></span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    <span class="badge badge-danger"><i class="fas fa-times"></i></span>
                                </label>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </section>
    @endif
    <!-- Nos Missions -->
    <section class="container">
        <div class="container bg-dark text-light">
            <h1>Nos missions</h1><br>
            <div>
                <nav aria-label="Page navigation missions">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- @ foreach ($missions as $mission) -->
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="row" style="text-transform: capitalize;">
                                    <div class="col">
                                        Nom_mission
                                    </div> 
                                    <div class="col">
                                        Nombre_joueurs
                                    </div>
                                    <div class="col">
                                        Carte
                                    </div>
                                    <div class="col">
                                        Type
                                    </div>
                                    <div class="col">
                                        Objectif
                                    </div>
                                    <div class="col">
                                        Ennemies
                                    </div>
                                    <div class="col">
                                        Last_try
                                    </div>
                                    <div class="col">
                                        <span class="badge badge-success"><i class="fas fa-check"></i></span>
                                    </div>
                                </div>
                            </button>
                        </h5>
                    </div>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                <div class="container">
                    <div class="row border-on">
                        <div class="col- border-on">
                            <img src="img/src" alt="image de la mission" width="200" height="200">
                        </div>
                        <div class="col border-on">
                            <p>
                                <b>Background : </b><br>
                            </p>
                            <p>
                                <b>Mission : </b><br>
                            </p>
                            <p>
                                <b>Renseignements : </b><br>
                            </p>
                        </div>
                    </div>
                    <div class="row border-on">
                        <div class="col border-on">
                            <b>BY </b><span style="text-transform: uppercase;">pseudo</span>
                            <b>LE </b><span>date</span>
                        </div>
                        <div class="col border-on">
                            <b>H.DÉPART : </b><span style="text-transform: lowercase;">heure</span>
                        </div>
                        <div class="col border-on">
                            <span style="text-transform: uppercase;">mort?</span>
                        </div>
                        <div class="col border-on">
                            <b>MÉTÉO : </b><span style="text-transform: lowercase;">temps</span>
                        </div>
                        <div class="col border-on">
                            <b>STUFF : </b><span style="text-transform: lowercase;">intégré?</span>
                        </div>
                    </div>
                    <div class="row border-on">
                        <div class="col border-on">
                            <div class="row">
                                <div class="col">
                                    <b>TROUPES : </b><span style="text-transform: uppercase;">troupes</span>
                                </div>
                                <div class="col">
                                    <b>OBJECTIFS :</b>
                                    <span style="text-transform: uppercase;">
                                        <ul style="list-style-type: none;">
                                            <li>objectif1</li>
                                            <li>objectif2</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col border-on">
                            <b>VÉHICULES :</b>
                            <span style="text-transform: uppercase;">
                                <ul style="list-style-type: none;">
                                    <li>véhicule1</li>
                                    <li>véhicule2</li>
                                </ul>
                            </span>
                        </div>
                        <div class="col-5 border-on" style="padding: 0; border-top: none;">
                            <div class="col border-on">
                                <b>TERRAIN : </b><span style="text-transform: uppercase;">terrain1, terrain2</span>
                            </div>
                            <div class="col border-on" style="border-bottom: none;">
                                <b>AUTRES INFOS // CORRECTIONS</b>
                                <span style="text-transform: uppercase;">
                                    <ul style="list-style-type: none;">
                                        <li>info1</li>
                                        <li>correctif1</li>
                                        <li>info1</li>
                                        <li>correctif1</li>
                                        <li>info1</li>
                                        <li>correctif1</li>
                                        <li>info1</li>
                                        <li>correctif1</li>
                                        <li>info1</li>
                                        <li>correctif1</li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row border-on">
                        <div class="col-3 border-on">
                            <b>LAST TRY : </b><span style="text-transform: lowercase;">date</span>
                        </div>
                        <div class="col-3 border-on">
                            <b>LEAD BY : </b><span style="text-transform: uppercase;">pseudo SL</span>
                        </div>
                        <div class="col-1 border-on">
                            <span style="text-transform: uppercase; color:green;">réussi</span>
                        </div>
                        <div class="col-5 border-on">
                            <a href="">EDITER</a> - <a href="">FEUILLE DE RÔLE</a> - <a href="">DEBRIEF</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <!-- @ endforeach -->
        </div>
    </section>
@endsection