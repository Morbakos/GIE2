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