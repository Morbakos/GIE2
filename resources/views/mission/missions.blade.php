@extends('layout.mainlayout')
@section('title', 'Missions')
@section('style', 'missions.css')

<!--
@ section('sectiontitle', 'Ajouter une mission')
@ extends('mission.formaddmission')
-->

@section('content')

    <section>
        <h1>Missions</h1>
        
        @if (!Auth::guest())
        <a href="/missions/add" class="btn">Ajouter une mission</a>
        @endif
        
        <nav class="pagi">
            <ul>
                <li><a href="">Précédent</a></li>
                <li class="select"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">Suivant</a></li>
            </ul>
        </nav>

        <div class="tabler">
            <ul id="tab">
                <!-- @ foreach ($missions as $mission) -->
                <li class="hidden" onclick="toogle_list(this)"><a>Opération Grenouille</a>
                    <ul>
                        @if (!Auth::guest())
                        <a href="" class="btn"><i class="fas fa-pen"></i> Éditer</a>
                        <a href="" class="btn"><i class="fas fa-file-signature"></i> Débrifer</a>
                        <div class="border"></div>
                        @endif
                        <img src="/img/test/op_grenouille.png" alt="">
                        <div class="border"></div>
                        <li>Nombre joueurs : 30</li>
                        <li>Carte :  Utes</li>
                        <li>Objectif(s) : Neutraliser l'armement</li>
                        <li>Composante(s) : November</li>
                        <li>Ennemies : Russes</li>
                        <li>Mission Maker : Ledoc</li>
                        <li>Date de création : 01/04/2019</li>
                        <div class="border"></div>
                        <li>Last try : 10/12/2019</li>
                        <li>Leader : Morbakos</li>
                        <li>Nombre de joueurs présent : 18</li>
                        <li>Résultat : <span class="result">Réussi</span></li>
                        <li>Noté : 15/20</li>
                        <div class="border"></div>
                        <li> Background :
                            <ul>
                                <li>L'armée Russe réalise des essais de nouveaux missiles dans le nord d'Altis.
                                    Nous avons appris que la ville de Syrta leur servait de base avancée pour ces
                                    oppérations. Nous allons les faire cesser dans les plus brefs délais !
                                </li>
                            </ul>
                        </li>
                        <li>Mission :
                            <ul>
                                <li>D'après nos sources, 4 missiles sont actuellement entreposés près de Syrta.
                                    Lancez un assaut sur la cité et détruisez ces 4 ogives. Profitez en pour porter
                                    un coup aux troupes sur place qui gardent la ville. Et n'hésitez pas à faire des
                                    prisonniers si l'occasion se présente. Une fois les 4 missiles détruits, retournez
                                    à votre camp de base sur le stade.
                                </li>
                            </ul>
                        </li>
                        <li>Renseignements :
                            <ul>
                                <li>La ville est principalement gardée par de l'infanterie. Nos sources fibt état de 
                                    seulement quelques UAZ en patrouille sur les routes, et de quelques URAL sur zone.
                                    Aucun blindé n'est à signaler, les Russes n'ont visiblement pas jugé utile d'en
                                    faire venir sur l'île. En revanche, nous n'avons que peu d'informations sur leurs 
                                    capacités aériennes. Les Russes se sont largement déployés dans le nord du pays, 
                                    seuls les alentours de Kavala sont encore sous notre contrôle.
                                </li>
                            </ul>
                        </li>
                        <div class="border"></div>
                        <li>Troupes alliés : 
                            <ul>
                                <li>Infanterie November // Delta</li>
                            </ul>
                        </li>
                        <li>Objectif(s) :
                            <ul>
                                <li>Localiser l'objectif</li>
                                <li>Rester furtif</li>
                                <li>Détruire le SU-25</li>
                            </ul>
                        </li>
                        <div class="border"></div>
                        <li>Heure de départ : 21h</li>
                        <li>Respawn : Oui</li>
                        <li>Véhicule(s) :
                            <ul>
                                <li>Bateau (5 passagers)</li>
                            </ul>
                        </li>
                        <li>Météo : Nuit - Nuageux</li>
                        <li>Camouflage : Woodland</li>
                        <li>Terrain : 
                            <ul>
                                <li>Mer</li>
                                <li>Plage</li>
                                <li>Fôret</li>
                            </ul>
                        </li>
                        <li>Équipement : Arsenal</li>
                        <div class="border"></div>
                        <li>Autre(s) info(s) : 
                            <ul>
                                <li>La basse russe est équipé d'anti-aérien, 
                                    aucune approche aérienne ne peut être tenté 
                                    tant que l'AA Russe n'a pas été détruit.
                                </li>
                            </ul>
                        </li>
                        <li>Correstion(s) : 
                            <ul>
                                <li>Nuit</li>
                                <li>Ajouter lunette de plongee</li>
                                <li>Explosifs & Delta</li>                            
                            </ul>
                        </li>
                    </ul>           
                </li>
                <!-- @ endforeach -->
            </ul>
        </div>
    </section>

@endsection