import App from "./views/app.js";

//HAMBURGER CLICK
const app = new App({
    button: document.querySelector('#hamburgerButton'),
    drawer: document.querySelector('#navDrawer'),
    content: document.querySelector('#mainContent'),
    close: document.querySelector('#close'),
})

// SCROLLED MENU
window.addEventListener('scroll', function () {
    var app_bar = document.querySelector('.app-bar');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0) {
        app_bar.classList.add('scrolled');
    } else {
        app_bar.classList.remove('scrolled');
    }
});

// app.js

// Function to show the answer when a question button is clicked
function showAnswer(questionNum, answer) {
    const questionButton = document.getElementById(`pertanyaan${questionNum}`);
    const answerDiv = document.querySelector(`.answer${questionNum}`);
    questionButton.addEventListener('click', () => {
        if (answerDiv.style.display === 'none') {
            answerDiv.style.display = 'block';
        } else {
            answerDiv.style.display = 'none';
        }
    });
}

// After DOM is ready, assign answers to respective questions using data from the JSON
document.addEventListener('DOMContentLoaded', () => {
    // Fetch the JSON data
    fetch('http://kedaikopi.test/assets/js/DATA/DATA.json')
        .then(response => response.json())
        .then(data => {
            // Assign answers to respective questions using data from the JSON
            showAnswer(1, data.faq[0].jawaban);
            showAnswer(2, data.faq[1].jawaban);
            showAnswer(3, data.faq[2].jawaban);
            showAnswer(4, data.faq[3].jawaban);
        })
        .catch(error => console.error('Error loading JSON:', error));
});

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});