// TITRES DES RUBRIQUES
const intro = document.getElementById('intro');
const collecte = document.getElementById('collecte');
const personnal_caracteres = document.getElementById('personnal_caracteres');


// CONTENU DES RUBRIQUES
const content_intro = document.getElementById('content_intro');
const content_collecte = document.getElementById('content_collecte');
const content_personnal_caracteres = document.getElementById('content_personnal_caracteres');


// TABLEAUX CONTENANT LES CONTENUS ET LES TITRES
const titles = [intro, collecte, personnal_caracteres];
const contents = [content_intro, content_collecte, content_personnal_caracteres];


// BOUCLE POUR CHAQUE TITRE CA AFFICHE LE CONTENU ASSOCIE
for (let i = 0; i < titles.length; i++) {
  titles[i].addEventListener('click', function() {
    if (contents[i].classList.contains('hidden')) {
      contents[i].classList.remove('hidden');
      contents[i].classList.add('block');
    } else {
      contents[i].classList.remove('block');
      contents[i].classList.add('hidden');
    }
  }); 
}