import App from "./views/app.js";

const app = new App({
    button: document.querySelector('#hamburgerButton'),
    drawer: document.querySelector('#navDrawer'),
    content: document.querySelector('#mainContent'),
})


window.addEventListener('scroll', function () {
    var app_bar = document.querySelector('.app-bar');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0) {
        app_bar.classList.add('scrolled');
    } else {
        app_bar.classList.remove('scrolled');
    }
});

