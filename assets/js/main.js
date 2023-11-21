new DataTable('#example', {
    dom: 'Alfrtip',
    alphabetSearch: {
        column: 0
    }
});

function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}

function toggleTheme() {
    if (localStorage.getItem('theme') == 'theme-dark') {
        setTheme('theme-light');
        lightTheme();
    } else {
        setTheme('theme-dark');
        darkTheme();
    }
}

(function () {
    if (localStorage.getItem('theme') == 'theme-dark') {
        setTheme('theme-dark');
        darkTheme();
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("slider").checked = false;
        });
        // document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
        lightTheme();
        document.addEventListener("DOMContentLoaded", function () {
            document.getElementById("slider").checked = true;
        });
        // document.getElementById('slider').checked = true;
    }
})();

function darkTheme() {
    $('#navBar').removeClass('navbar-light');
    $('#navBar').removeClass('bg-light');
    $('#footer').removeClass('bg-light');
    $('#navBar').addClass('navbar-dark');
    $('#navBar').addClass('bg-dark');
    $('#footer').addClass('bg-dark');
}

function lightTheme() {
    $('#navBar').removeClass('navbar-dark');
    $('#navBar').removeClass('bg-dark');
    $('#footer').removeClass('bg-dark');
    $('#navBar').addClass('navbar-light');
    $('#navBar').addClass('bg-light');
    $('#footer').addClass('bg-light');
}