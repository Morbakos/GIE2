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
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>         
            <div class="container"> 
                <div class="accordion" id="accordionExample">
                    <!-- @ foreach ($missions as $mission) -->
                    <div class="card">
                        <a class="btn btn-link collapsed card-header text-muted" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        <div class="mb-0 text-left row">
                            <div class="col-6 col-md-4">Raid Explosif</div>
                            <div class="col-6 col-md-1">40 joueurs</div>
                            <div class="col-6 col-md-2">Altis</div>
                            <div class="col-6 col-md-2">Attaque</div>
                            <div class="col-6 col-md-1">Russes</div>
                            <div class="col-6 col-md-0">10/10/10</div>
                            <div class="col-6 col-md-0"><i class="fas fa-check text-success"></i></div>
                        </div>
                        </a>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                        <div class="card-body">
                            <!-- @ if (!Auth::guest()) -->
                            <div class="mb-0 text-center row">
                                <div class="col-2 col-md-5"><a href="missions/edit/1" class="text-primary"><i class="fas fa-pen"> </i>Editer</a></div>
                                <div class="col-2 col-md-6"><a href="" class="text-success"><i class="fas fa-file-signature"></i>Écrire un briefing</a></div>
                            </div><br>
                            <!-- @ endif --> 
                            <div class="mb-0 text-left row">
                                <img src="/img/info/3.jpg" alt="" width="300" height="200">
                                <div class="col-2 col-md-8">
                                    <p><b>Background : </b>
                                        L'armée Russe réalise des essais de nouveaux missiles dans le nord d'Altis.
                                        Nous avons appris que la ville de Syrta leur servait de base avancée pour ces
                                        oppérations. Nous allons les faire cesser dans les plus brefs délais !
                                    </p>
                                    <p><b>Mission : </b>
                                        D'après nos sources, 4 missiles sont actuellement entreposés près de Syrta.
                                        Lancez un assaut sur la cité et détruisez ces 4 ogives. Profitez en pour porter
                                        un coup aux troupes sur place qui gardent la ville. Et n'hésitez pas à faire des
                                        prisonniers si l'occasion se présente. Une fois les 4 missiles détruits, retournez
                                        à votre camp de base sur le stade.
                                    </p>
                                    <p><b>Renseignements : </b>
                                        La ville est principalement gardée par de l'infanterie. Nos sources fibt état de 
                                        seulement quelques UAZ en patrouille sur les routes, et de quelques URAL sur zone.
                                        Aucun blindé n'est à signaler, les Russes n'ont visiblement pas jugé utile d'en
                                        faire venir sur l'île. En revanche, nous n'avons que peu d'informations sur leurs 
                                        capacités aériennes. Les Russes se sont largement déployés dans le nord du pays, 
                                        seuls les alentours de Kavala sont encore sous notre contrôle.
                                    </p>
                                </div>
                            </div>
                            <div class="mb-0 text-left row">
                                <div class="col-6 col-md-2"><b>Par : </b>Mystery</div>
                                <div class="col-6 col-md-2"><b>Départ : </b>21h00</div>
                                <div class="col-6 col-md-2"><b>Mort : </b>définitive</div>
                                <div class="col-6 col-md-3"><b>Météo : </b>soleil - pluie</div>
                                <div class="col-6 col-md-3"><b>Stuff : </b>intégré - woodland</div>
                            </div>
                            <div class="mb-0 text-left row">
                                <div class="col-6 col-md-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Troupes : </b>Charlie</li>
                                        <li class="list-group-item"><b>Objectifs : </b>
                                            <ul>
                                                <li>détruire objectif</li>
                                                <li>récupérer infos</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-4"><b>Véhicules : </b>
                                    <ul>
                                        <li>4x Humvee N/A (4P)</li>
                                        <li>4x Humvee N/A (8P)</li>
                                    </ul>
                                </div>
                                <div class="col-6 col-md-5">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><b>Terrains : </b>
                                            <ul>
                                                <li>ville</li>
                                                <li>campagne</li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><b>Autres Infos // Corrections : </b>
                                            <p>

                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-0 text-left row">
                                <div class="col-6 col-md-4"><b>Dernier try : </b>12/12/12</div>
                                <div class="col-6 col-md-3"><b>Leader : </b>LeDoc</div>
                                <div class="col-6 col-md-2"><b>Statut : </b><span class="text-danger"> échec</span></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- @ endforeach -->
                    <!-- @ foreach ($missions as $mission) -->
                    <div class="card">
                            <a class="btn btn-link collapsed card-header text-muted" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <div class="mb-0 text-left row">
                                <div class="col-6 col-md-4">Opération Grenouille</div>
                                <div class="col-6 col-md-1">30 joueurs</div>
                                <div class="col-6 col-md-2">Utes</div>
                                <div class="col-6 col-md-2">November</div>
                                <div class="col-6 col-md-1">Russes</div>
                                <div class="col-6 col-md-0">10/10/10</div>
                                <div class="col-6 col-md-0"><i class="fas fa-times text-danger"></i></div>
                            </div>
                            </a>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                            <div class="card-body">
                                <!-- @ if (!Auth::guest()) -->
                                <div class="mb-0 text-center row">
                                    <div class="col-2 col-md-5"><a href="missions/edit/1" class="text-primary"><i class="fas fa-pen"> </i>Editer</a></div>
                                    <div class="col-2 col-md-6"><a href="" class="text-success"><i class="fas fa-file-signature"></i>Écrire un briefing</a></div>
                                </div><br>
                                <!-- @ endif --> 
                                <div class="mb-0 text-left row">
                                    <img src="/img/info/4.jpg" alt="" width="300" height="200">
                                    <div class="col-2 col-md-8">
                                        <p><b>Background : </b>
                                            L'armée Russe réalise des essais de nouveaux missiles dans le nord d'Altis.
                                            Nous avons appris que la ville de Syrta leur servait de base avancée pour ces
                                            oppérations. Nous allons les faire cesser dans les plus brefs délais !
                                        </p>
                                        <p><b>Mission : </b>
                                            D'après nos sources, 4 missiles sont actuellement entreposés près de Syrta.
                                            Lancez un assaut sur la cité et détruisez ces 4 ogives. Profitez en pour porter
                                            un coup aux troupes sur place qui gardent la ville. Et n'hésitez pas à faire des
                                            prisonniers si l'occasion se présente. Une fois les 4 missiles détruits, retournez
                                            à votre camp de base sur le stade.
                                        </p>
                                        <p><b>Renseignements : </b>
                                            La ville est principalement gardée par de l'infanterie. Nos sources fibt état de 
                                            seulement quelques UAZ en patrouille sur les routes, et de quelques URAL sur zone.
                                            Aucun blindé n'est à signaler, les Russes n'ont visiblement pas jugé utile d'en
                                            faire venir sur l'île. En revanche, nous n'avons que peu d'informations sur leurs 
                                            capacités aériennes. Les Russes se sont largement déployés dans le nord du pays, 
                                            seuls les alentours de Kavala sont encore sous notre contrôle.
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-0 text-left row">
                                    <div class="col-6 col-md-2"><b>Par : </b>Mystery</div>
                                    <div class="col-6 col-md-2"><b>Départ : </b>21h00</div>
                                    <div class="col-6 col-md-2"><b>Mort : </b>définitive</div>
                                    <div class="col-6 col-md-3"><b>Météo : </b>soleil - pluie</div>
                                    <div class="col-6 col-md-3"><b>Stuff : </b>intégré - woodland</div>
                                </div>
                                <div class="mb-0 text-left row">
                                    <div class="col-6 col-md-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>Troupes : </b>Charlie</li>
                                            <li class="list-group-item"><b>Objectifs : </b>
                                                <ul>
                                                    <li>détruire objectif</li>
                                                    <li>récupérer infos</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>Véhicules : </b>
                                                <ul>
                                                    <li>4x Humvee N/A (4P)</li>
                                                    <li>4x Humvee N/A (8P)</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><b>Terrains : </b>
                                                <ul>
                                                    <li>ville</li>
                                                    <li>campagne</li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item"><b>Autres Infos // Corrections : </b>
                                                <p>
    
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mb-0 text-left row">
                                    <div class="col-6 col-md-4"><b>Dernier try : </b>12/12/12</div>
                                    <div class="col-6 col-md-3"><b>Leader : </b>LeDoc</div>
                                    <div class="col-6 col-md-2"><b>Statut : </b><span class="text-danger"> échec</span></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- @ endforeach -->
                </div>
            </div>
    </section>
@endsection