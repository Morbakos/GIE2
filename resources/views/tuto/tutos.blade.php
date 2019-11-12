<?php $page = 0 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Tutoriels')
@section('sectiontitle', 'Créer un tutoriel')
<!-- on ajoute le contenu du formulaire de mission -->
@extends('tuto.formaddtuto')


@section('content')
    <!-- Nos Missions -->
    <section class="container">
        <div class="container bg-dark text-light">
            <h1>Nos tutoriels</h1><br>
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
                <div class="list-group">
                    <!-- @ foreach ($missions as $mission) -->
                        <a href="/tutos/1" class="list-group-item list-group-item-action text-muted">Nom du tutoriel</a>
                    <!-- @ endforeach -->
                </div>
            </div>
        </div>
    </section>
@endsection