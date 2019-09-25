<?php $page = 0 ?>
<!-- on import le template -->
@extends('layout.mainlayout')
<!-- on définit le titre de la page -->
@section('title', 'Tutoriel 1')


@section('content')
    <!-- Nos Missions -->
    <section class="container">
        <div class="container bg-dark text-light">
        <h1>Tutoriel </h1><br>

        <h3>Nom du tutoriel</h3>
            
            <div class="container tuto">
                <h4>Noms des fichiers : </h4>
                <pre><code>&lt;samp&gt;nomfichier.extension&lt;/samp&gt;</code></pre>
                Résultat : <samp>nomfichier.extension</samp><br><br>

                <h4>Liste d'élements : </h4>
                <pre><code>&lt;ul&gt;
    &lt;li&gt;text puce 1&lt;/li&gt;
    &lt;li&gt;text puce 2&lt;/li&gt;
    &lt;li&gt;text puce 3&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                Résultat : 
                <ul>
                    <li>text puce 1</li>
                    <li>text puce 2</li>
                    <li>text puce 3</li>
                </ul><br>

                <h4>Code en texte : </h4>
                <pre><code>&lt;code&gt;code à afficher en text&lt;/code&gt;</code></pre>
                Résultat : <code>code à afficher en text</code><br><br>

                <h4>Code embarqué : </h4>
                <pre><code>&lt;pre&gt;&lt;code&gt;code embarqué&lt;/code&gt;&lt;/pre&gt;</code></pre>
                Résultat : <pre><code>code embarqué</code></pre><br>

                <h4>Code caché : </h4>
                <pre><code>&lt;details&gt;
    &lt;div class="text-right"&gt;
        &lt;button class="btn btn-danger" data-clipboard-target="#to-copy-n"&gt;&lt;i class="fas fa-copy"&gt;&lt;/i&gt; Copier&lt;/button&gt;
    &lt;/div&gt;

    &lt;summary&gt;code&lt;/summary&gt;
    &lt;pre&gt;&lt;code id="to-copy-n"&gt;code à copier&lt;/code&gt;&lt;/pre&gt;
&lt;/details&gt;</code></pre>
                Résultat : 
                <details>
                    <!-- bouton pour le copier coller -->
                    <div class="text-right">
                        <button class="btn btn-danger" data-clipboard-target="#to-copy-1"><i class="fas fa-copy"></i> Copier</button>
                    </div>

                    <summary>code</summary>
                    <pre><code id="to-copy-1">code à copier</code></pre>
                </details>

            </div>
        </div>
        <div class="container bg-dark text-light">
            <a href="/tutos" class="btn btn-danger"><i class="fas fa-undo-alt"></i> Retour</a>
        </div>
    </section>
@endsection
