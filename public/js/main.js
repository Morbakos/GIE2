function navbar_change(camamber) {
    var navbar = document.getElementById('nav-menu');

    camamber.classList.toggle("change-bar");
    navbar.classList.toggle("hidden-nav");
}

function login_change(icon) {
    var login = document.getElementById('nav-login');

    icon.classList.toggle("icon-active");
    login.classList.toggle("hidden-login");
}

function submit(type) {
    var submit = document.getElementById("submit-" + type);

    submit.classList.remove('hidden');
}

function toogle_list(line) {
    line.classList.toggle("hidden");

    if (results = document.getElementsByClassName("result")) {
        for (let r = 0; r < results.length; r++) {
            if (results[r].innerHTML == "Réussi") {
                results[r].classList.add("success");
            } else if (results[r].innerHTML == "Échec") {
                results[r].classList.add("failed");
            }
        }
    }

    window.scrollTo(line.offsetTop, 0);
}