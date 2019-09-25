@section('header')
<!-- @ if (!Auth::guest()) -->
<section class="container">
    <div class="container bg-dark text-light">
        <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd">
            <i class="fas fa-plus"></i> @yield('sectiontitle') 
        </button>
        <div class="collapse" id="collapseAdd">
            <h1 style="padding-top: 10%;">@yield('sectiontitle')</h1><br>
            <div class="container">
                <form  class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom du tutoriel</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Entrer un nom" required>
                        <div class="invalid-feedback">
                            Entrer un nom pour le tutoriel.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Entrer le contenu (formatage HTML accepté)" rows="10" required></textarea>
                        <div class="invalid-feedback">
                            Entrer le contenu du tutoriel.
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" id="buttonSendFormAddMission"><i class="fas fa-paper-plane"></i> Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- @ endif --> 
@endsection