let openFiche = document.getElementById('openFiche');
let closeFiche = document.getElementById('closeFiche');
let perso = document.getElementById('perso');
let affichage = false;

function affPerso(cv) {
    if (affichage === false) {
        cv.style.display = "flex";
        affichage = true;

    } else {
        cv.style.display = "none";
        affichage = false;

    }
}

openFiche.addEventListener('click', function() {
    affPerso(perso);

});
closeFiche.addEventListener('click', function() {
    affPerso(perso);

});