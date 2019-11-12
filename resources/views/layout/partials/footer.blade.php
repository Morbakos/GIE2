<footer class="footer bg-dark text-light">
    <div class="text-center">
        <p>
            <a class="btn btn-outline-danger" data-toggle="collapse" href="#collapseHelp" role="button" aria-expanded="false" aria-controls="collapseHelp">
                <i class="fas fa-question"></i>
            </a>
        </p>
        <div class="collapse" id="collapseHelp">
            <div class="card card-body">
                <p class="text-muted">
                    Vous rencontrez un problème ? Merci de le signaler <!--@ if (!Auth::guest())--><a href="https://github.com/Morbakos/GIE2/issues/new?assignees=&labels=bug&template=signaler-un-bug.md&title=">ici</a> ou<!--@ endif--> sur le <a href="https://discordapp.com/invite/AmWBzqV">Discord</a> en mentionnant <span class="discord-site">@Site</span>.
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row text-left">
            <div class="col-xl-3">
                <ul>
                    <h5>Formations</h5>
                    <li class="disabled"><a href="/formation">Nos formations</a></li>
                    <li class="disabled"><a href="/composante">Composantes</a></li>
                    <li class="disabled"><a href="/stuff">Stuffs</a></li>
                </ul>
            </div>
            <div class="col-xl-2">
                <ul>
                    <h5>Tutoriels</h5>
                    <li class="disabled"><a href="/modset">Modset</a></li>
                    <li><a href="/tutos">Nos tutos</a></li>
                </ul>
            </div>
            <div class="col-xl-2">
                <ul>
                    <h5>Antistasi</h5>
                    <li class="disabled"><a href="/antistasi">Informations</a></li>
                    <li class="disabled"><a href="/antistasi/modset">Modset</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <h5>Partenaires</h5>
                    <li><a href="https://www.polygames.net/">PoLygameS</a></li>
                    <li><a href="https://arma3.com/">Arma Bohemia</a></li>
                    <li><a href="https://www.gsri.team/">GSRI</a></li>
                    <li><a href="https://grecedecanards.fr/">GDC</a></li>
                    <li class="disabled"><a href="/twitch">Twitch</a></li>
                </ul>
            </div>
            <div class="col-xl-2 info">
                <div class="footer-icon">
                    <h5>Informations</h5>
                    <div><br>
                        <a href="ts3server://ts3.Polygames.net?password=alphatest"?port=3306><i class="fab fa-2x fa-teamspeak"></i></a>
                        <a href="https://discordapp.com/invite/AmWBzqV"><i class="fab fa-2x fa-discord"></i></a>
                        <a href="https://www.youtube.com/channel/UCZjaHyQVKI6TquGXwuFfkAw"><i class="fab fa-2x fa-youtube"></i></a>
                        <a href="https://www.facebook.com/GieMilsim/"><i class="fab fa-2x fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Message à mettre de Bohemia -->
        <p class="text-center">
            <small>Site 2019 du GIE by Pippermint, Morbakos, Jack Smith, et Stians.</small><br>
            <small style="font-size: 12px;">
                This website is not affiliated or authorized
                by Bohemia Interactive a.s. Bohemia Interactive, ARMA, DAYZ and all
                associated logos and designs are trademarks or registered trademarks of
                Bohemia Interactive a.s.
            </small>
        </p>
    </div>    
</footer>