<nav class="nav">
  <a href="/"><img src="/img/logo.png" alt="" style="box-shadow: none;"></a>

  <!--
  <a onclick="login_change(this)" class="btn-profil">
    @if (Auth::guest())
      <img src="/img/test/avatar-lapin.png" alt="" srcset="">
    @else
      <i class="fas fa-user-circle"></i>
    @endif
  </a>
  -->
  
  <!--
  <div id="nav-login" class="hidden-login">


    @ if (!Auth::guest())

    <div class="title-login">Stians</div>
    <div class="border"></div>
    <ul>
      <li>
        <a>Profil</a>
      </li>
      <li>
        <a>Mes tutos</a>
      </li>
      <li>
        <a>Missions jouées</a>
      </li>
      <li>
        <a>Serveur</a>
      </li>
      <div class="border"></div>
      <li>
        <a>Déconnexion</a>
      </li>
    </ul>
    
    @ else

    <div class="title-login">Connexion</div>
    <div class="description-login">
      Vous devez posséder un compte utilisateur fournit 
      par un administrateur pour pouvoir vous connecter.
    </div>

    <form action="{ { route('login') }}" method="POST">

      { !! csrf_field() !!}

      
      <label for="mail">Adresse mail</label>
      <div class="champ-login">
        <input type="email" id="mail" placeholder="exemple@mail.net" required>
        <div class="invalid-feedback">Adresse mail inconnue.</div>
      </div>

      
      <label for="password">Mot de passe</label>
      <div class="champ-login">
        <input type="password" id="password" placeholder="password" required>
        <div class="invalid-feedback">Mot de passe incorrect.</div>
      </div>

      
      <button type="submit" onclick="submit('login')" class="btn-submit">
        <span class="spinner-border spinner-border-sm hidden" id="submit-login"></span>
        Connexion
      </button>
    </form>

    @ endif
    

  </div>
  -->

  <a onclick="navbar_change(this)" class="nav-menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </a>

  <div id="nav-menu" class="hidden-nav">
    <ul class="nav-lien">
      <li>
        <a href="/">Accueil</a>
      </li>
      <li>
        <a>Planning</a>
      </li>
      <li>
        <a>Missions</a>
      </li>
      <li>
        <a href="/regles">Chartes</a>
      </li>
      <li>
        <a href="/team">Team</a>
      </li>
      <li>
        <a href="/rejoindre">Rejoindre</a>
      </li>
      <li>
        <a>À propos</a>
      </li>
      <li>
        <a>Contact</a>
      </li>
    </ul>
  </div>
</nav>