<?php $page = 0 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Accueil')
<!-- on définit le contenu de la page -->
@section('content')
    <!--@ if (!Auth::guest())-->
    <section class="container">
        <div class="container bg-dark text-light">
            <h1>Gestion du serveur</h1>
            <span class="text-muted"><b>Veuillez vérifier qu'aucun joueur n'est en jeu</b> avant d'éteindre un serveur, sinon ce dernier sera déconnecté.</span>
            <div class="container">
                <form>
                    <div class="form-group">
                        <label for="milsimFormControlInput1">Éteindre le serveur <b>MILSIM</b></label>
                        <button type="button" class="form-control btn btn-danger" data-toggle="modal" data-target="#milsimModal" id="milsim"><i class="fas fa-exclamation-triangle text-warning"></i> Éteindre le serveur MILSIM <i class="fas fa-exclamation-triangle text-warning"></i></button>
                    </div>
                </form>
            </div>
            <div class="container" style="border-top: 1px solid rgb(130,15,11);">
                <form>
                    <div class="form-group">
                        <label for="milsimFormControlInput1">Éteindre le serveur <b>ANTISTASI</b></label>
                        <button type="button" class="form-control btn btn-danger" data-toggle="modal" data-target="#antistasiModal" id="antistasi"><i class="fas fa-exclamation-triangle text-warning"></i> Éteindre le serveur ANTISTASI <i class="fas fa-exclamation-triangle text-warning"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--@ else-->
    <section class="container">
        <div class="container bg-dark text-light">
            <h1>Vous n'êtes pas autorisés à accéder à cette partie du site. <small><b>Vous devez d'abord vous connecter.</b></small></h1>
        </div>
    </section>
    <!--@ endif-->
    <section class="container">
        <div class="container bg-dark text-light">
            <a href="/" class="btn btn-danger"><i class="fas fa-home"></i> Accueil</a>
        </div>
    </section>
@endsection

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="milsimModal" tabindex="-1" role="dialog" aria-labelledby="milsimModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h5 class="modal-title" id="milsimModalLabel"><i class="fas fa-exclamation-triangle text-warning"></i> Veux tu vraiment éteindre le serveur MILSIM ? <i class="fas fa-exclamation-triangle text-warning"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Oui</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="antistasiModal" tabindex="-1" role="dialog" aria-labelledby="antistasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h5 class="modal-title" id="antistasiModalLabel"><i class="fas fa-exclamation-triangle text-warning"></i> Veux tu vraiment éteindre le serveur ANTISTASI ? <i class="fas fa-exclamation-triangle text-warning"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Oui</button>
            </div>
        </div>
    </div>
</div>