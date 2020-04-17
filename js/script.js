window.onscroll = function() {progressNavBar(); scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("navbarTitle").style.fontSize = "100%";
        document.getElementById("navbarTitle").style.transition = "2s";
    } else {
        document.getElementById("navbarTitle").style.fontSize = "250%";
        document.getElementById("navbarTitle").style.transition = "2s";
    }
}
function progressNavBar() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
}

