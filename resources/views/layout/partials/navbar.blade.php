<nav class="nav">
  <img src="/img/logo.png" alt="">

  <a onclick="login_change(this)" class="btn-profil">
    <i class="fas fa-user-circle"></i>
  </a>

  <div id="nav-login" class="hidden-login">

    @if (!Auth::guest())

    <div class="title-login">@USER</div>
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

    @else

    <div class="title-login">Connexion</div>
    <div class="description-login">
      Vous devez posséder un compte utilisateur fournit 
      par un administrateur pour pouvoir vous connecter.
    </div>

    <form action="{{ route('login') }}" method="POST">

      {!! csrf_field() !!}

      <!-- mail -->
      <label for="email" class="label-login">Adresse mail</label>
      <div class="champ-login">
        <input type="email" class="form-control" id="mail" placeholder="exemple@mail.net" required>
        <div class="invalid-feedback">Adresse mail inconnue.</div>
      </div>

      <!-- mot de passe -->
      <label for="password" class="label-login">Mot de passe</label>
      <div class="champ-login">
        <input type="password" class="form-control" id="password" placeholder="password" required>
        <div class="invalid-feedback">Mot de passe incorrect.</div>
      </div>

      <!-- submit -->
      <button type="submit" onclick="submit('login')" class="btn-submit">
        <span class="spinner-border spinner-border-sm hidden" id="submit-login"></span>
        Connexion
      </button>
    </form>

    @endif

  </div>

  <a onclick="navbar_change(this)" class="nav-menu">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </a>

  <div id="nav-menu" class="hidden-nav">
    <ul class="nav-left">
      <li>
        <a href="/">Accueil</a>
      </li>
      <li>
        <a>Planning</a>
      </li>
      <li>
        <a href="/missions">Missions</a>
      </li>
      <li>
        <a>Chartes</a>
      </li>
    </ul>
    <ul class="nav-right">
      <li>
        <a>Team</a>
      </li>
      <li>
        <a>Rejoindre</a>
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