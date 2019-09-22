<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar-brand" href="/">
    <img alt="Logo du GIE" src="/img/logo.png" width="30" height="30">
  </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($page == "1") {echo 'active';} ?>">
        <a class="nav-link" href="/">Accueil</a>
      </li>
      <li class="nav-item <?php if ($page == "2") {echo 'active';} ?>">
        <a class="nav-link disabled" href="#">Planning</a>
      </li>
      <li class="nav-item <?php if ($page == "3") {echo 'active';} ?>">
        <a class="nav-link" href="/missions">Missions</a>
      </li>
      <li class="nav-item <?php if ($page == "4") {echo 'active';} ?>">
        <a class="nav-link disabled" href="#">Rules</a>
      </li>
    </ul><img class="center-block" alt="Logo du GIE" src="/img/navbar-logo.png">
    <form class="form-inline my-2 my-lg-0">
      <ul  class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($page == "5") {echo 'active';} ?>">
              <a class="nav-link disabled" href="#">Team</a>
          </li>
          <li class="nav-item <?php if ($page == "6") {echo 'active';} ?>">
              <a class="nav-link disabled" href="#">Rejoindre</a>
          </li>
          <li class="nav-item <?php if ($page == "7") {echo 'active';} ?>">
              <a class="nav-link disabled" href="#">À propos</a>
          </li>
          <li class="nav-item <?php if ($page == "8") {echo 'active';} ?>">
              <a class="nav-link disabled" href="#">Contact</a>
          </li>
      </ul>
      @if (!Auth::guest())
        <div class="dropdown <?php if ($page == "9") {echo 'active';}?>">
          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pseudo
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item disabled" href="#"><i class="fas fa-user"></i> Profil</a>
            <a class="dropdown-item disabled" href="#"><i class="fas fa-book"></i> Mes tutos</a>
            <a class="dropdown-item disabled" href="#"><i class="fas fa-list"></i> Missions jouées</a>
            <a class="dropdown-item text-light" href="/serve"><i class="fas fa-server"></i> Administration serveur</a>
            <a role="separator" class="divider"></a>
            <a class="dropdown-item text-light" href="#"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
          </div>
        </div>
      @else
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
          <i class="fas fa-sign-in-alt"></i>Connexion</button>
        </button>
      @endif
    </form>
  </div>
</nav>
@include('login')