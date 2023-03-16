// TITRES DES RUBRIQUES
const intro = document.getElementById('intro');
const collecte = document.getElementById('collecte');
const personnal_caracteres = document.getElementById('personnal_caracteres');
const cookies = document.getElementById('cookies');
const security = document.getElementById('security');
const concerned_person = document.getElementById('concerned_person');
const edits = document.getElementById('edits');


// CONTENU DES RUBRIQUES
const content_intro = document.getElementById('content_intro');
const content_collecte = document.getElementById('content_collecte');
const content_personnal_caracteres = document.getElementById('content_personnal_caracteres');
const content_cookies = document.getElementById('content_cookies');
const content_security = document.getElementById('content_security');
const content_concerned_person = document.getElementById('content_concerned_person');
const content_edits = document.getElementById('content_edits');


// TABLEAUX CONTENANT LES CONTENUS ET LES TITRES
const titles = [intro, collecte, personnal_caracteres, cookies, security, concerned_person, edits];
const contents = [content_intro, content_collecte, content_personnal_caracteres, content_cookies, content_security, content_concerned_person, content_edits];


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