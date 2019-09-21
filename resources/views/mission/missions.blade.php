<?php $page = 3 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Missions')
@section('sectiontitle', 'Ajouter une mission')
<!-- on ajoute le contenu du formulaire de mission -->
@extends('mission.formaddmission')

@section('content')
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