@extends('layout.mainlayout')
@section('title', 'Créer un tutoriel')
@section('style', 'tutos.css')

@section('content')
    <section>
        <h1>Créer un tutoriel</h1>

        @if (!Auth::guest())

        <form action="" method="POST">
            <label for="title">Titre du tutoriel</label><br>
            <input id="title" type="text" placeholder="Entrer un titre">

            <label for="content">Contenu du tutoriel</label>
            <textarea name="content" id="content" cols="30" rows="10"
                      placeholder="Entrer le contenu"></textarea>
        </form>
        
        <a class="btn" href="/tutos" onclick="">Créer un tutoriel</a>

        <div class="border"></div>

        <span>
            Si des éléments manques, et vous empêche de créer votre tutoriel, 
            merci de contacter un membre du <span class="didi-staff">@Staff</span> 
            directement sur notre <a href="https://discord.gg/AmWBzqV" class="didi">Discord</a>.
        </span>

        @else

        <div>
            Vous devez d'abord vous connecter avant de pouvoir créer un tutoriel.
        </div>
    
        <div>
            Si vous rencontrez des problèmes merci de contacter un membre du <span class="didi-staff">@Staff</span> 
            directement sur notre <a href="https://discord.gg/AmWBzqV" class="didi">Discord</a>.
        </div> 

        @endif
    </section>
@endsection