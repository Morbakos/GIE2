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
        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Entrer les différentes corrections" rows="3" required></textarea>
        <div class="invalid-feedback">
            Entrer les différentes corrections à faire pour la mission.
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Dernière fois jouées</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" required>
                <div class="invalid-feedback">
                    Entrer la date de la dernière fois jouées.
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Leader par</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un pseudo" required>
                <div class="invalid-feedback">
                    Entrer le pseudo du dernier leader.
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="form-group">
            <label for="statutFormControlTextarea1">Statut de la mission</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="statutRadios" id="statutRadios1" value="option1" required>
                <label class="custom-control-label" for="statutRadios1">
                    <span class="badge badge-success"><i class="fas fa-check"></i> Réussite</span>
                </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="statutRadios" id="statutRadios2" value="option2" checked required>
                <label class="custom-control-label" for="statutRadios2">
                    <span class="badge badge-secondary"><i class="fas fa-sync"></i> Partiel</span>
                </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="statutRadios" id="statutRadios3" value="option3" required>
                <label class="custom-control-label" for="statutRadios3">
                    <span class="badge badge-danger"><i class="fas fa-times"></i> Échec</span>
                </label>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Lien débrief</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un lien" required>
                <div class="invalid-feedback">
                    Entrer le lien du débrief de la dernière fois jouées.
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="exampleFormControlInput1">Lien feuille de rôle</label>
                <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un lien" required>
                <div class="invalid-feedback">
                    Entrer le lien de la feuille de rôle de la dernière fois jouées.
                </div>
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