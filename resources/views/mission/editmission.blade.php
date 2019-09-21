<?php $page = 3 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Missions - Édition')
@section('sectiontitle', 'Éditer une mission')
<!-- on ajoute le contenu du formulaire de mission -->
@extends('mission.formaddmission')

@section('form')
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Corrections</label>
        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Entrer les différentes corrections" rows="3"></textarea>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Dernière fois jouées</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Leader par</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un pseudo">
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
        <label for="jouableFormControlTextarea1">Statut de la mission</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jouableRadios" id="jouableRadios1" value="option1" checked>
            <label class="form-check-label" for="jouableRadios1">
                <span class="badge badge-success"><i class="fas fa-check"></i> réussite</span>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jouableRadios" id="jouableRadios2" value="option2">
            <label class="form-check-label" for="jouableRadios2">
                <span class="badge badge-secondary"><i class="fas fa-sync"></i> partiel</span>
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jouableRadios" id="jouableRadios3" value="option3">
            <label class="form-check-label" for="jouableRadios3">
                <span class="badge badge-danger"><i class="fas fa-times"></i> échec</span>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Lien débrief</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un lien">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Lien feuille de rôle</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un lien">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <section class="container">
        <div class="container bg-dark text-light">
            @if (Auth::guest())
                <h1>Vous n'êtes pas autoriser à accéder à cette partie du site. <small><b>Vous devez d'abord vous connecter.</b></small></h1>
            @endif
        </div>
    </section>
    <section class="container">
        <div class="container bg-dark text-light">
            <a href="/missions" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Retour</a>
        </div>
    </section>
@endsection