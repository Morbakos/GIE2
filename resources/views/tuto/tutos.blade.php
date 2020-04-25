@extends('layout.mainlayout')
@section('title', 'Tutoriels')
@section('style', 'tutos.css')

@section('content')
    <section>
        <h1>Tutoriels</h1>

        @if (!Auth::guest())
        <a href="/tutos/add" class="btn">Ajouter un tutoriel</a>
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
            <ul>
                <!-- @ foreach ($tutos as $tuto) -->
                <li><a href="/tutos/1">Nom du tutoriel</a></li>
                <!-- @ endforeach -->
            </ul>
        </div>
    </section>
@endsection