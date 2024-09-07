// Initialiser Skrollr après avoir chargé le fichier skrollr.min.js
(function($) {
    // Init Skrollr
    var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            //console.log(data.curTop);
        }
    });
} )();


// Ajouter un effet d'apparition au scroll sur une section avec l'observateur d'intersection
// Lorsque les entrées intersectent la zone visible, la classe .is-visible est ajoutée pour déclencher l’animation CSS.
// Les éléments animés sont observés en utilisant la méthode observe de l’observateur d’intersection.

(function () {
    
    // Utilisation de la directive "use strict" pour activer le mode strict en JavaScript
    // Cela implique une meilleure gestion des erreurs et une syntaxe plus stricte pour le code
    "use strict"
  
    // Sélectionne tous les éléments avec la classe "animate-on-scroll"
    const elements = document.querySelectorAll(".animate-on-scroll");
   
    // Options pour l'observateur d'intersection
    const options = {
        threshold: 0.05
    };
    // Instanciation de l'observateur d'intersection
    const observer = new IntersectionObserver(function (entries, observer) {
        // Boucle sur chaque entrée pour traiter les intersections
        entries.forEach(entry => {
            // Si l'entrée est en train d'intersecter avec la zone visible
            if (entry.isIntersecting) {
                // Ajouter la classe "is-visible" pour déclencher l'animation
                entry.target.classList.add("is-visible");
                // Cesser d'observer cet élément
                observer.unobserve(entry.target);
            }
        });
    }, options);
    // Observer chaque élément
    elements.forEach(element => {
        observer.observe(element);
    });
  })();


// Afficher ou masquer le menu en version mobile
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.navbar-nav');
const body = document.querySelector('body');

burger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
    // Bloquer le scroll
    body.classList.toggle('fixed-position');
    // Animer le burger
    burger.classList.toggle('toggle');
});



// Changer opacité des images au survol sur les liens de navigation
    function changeleft() {
        var l = document.getElementById("img-1");
        var m = document.getElementById("img-2");
        var d = document.getElementById("img-3");
        l.style.transition = 'opacity 1s';
        l.style.opacity = 1;
        m.style.transition = 'opacity 1s';
        m.style.opacity = 0;
        d.style.transition = 'opacity 1s';
        d.style.opacity = 0;
    }
    function changeright() {
        var l = document.getElementById("img-1");
        var m = document.getElementById("img-2");
        var d = document.getElementById("img-3");
        l.style.transition = 'opacity 1s';
        l.style.opacity = 0;
        m.style.transition = 'opacity 1s';
        m.style.opacity = 0;
        d.style.transition = 'opacity 1s';
        d.style.opacity = 1;
    }
    function changeBack() {
        var l = document.getElementById("img-1");
        var m = document.getElementById("img-2");
        var d = document.getElementById("img-3");
        l.style.opacity = 0;
        m.style.opacity = 1;
        d.style.opacity = 0;
    }

// Afficher ou masquer les menus déroulants
(function($){
    $(document).ready(function() {
        // Définir les variables
            // Menu 1 Catégories - Récupérer la class pour savoir si menu est affiché ou masqué
            let menu1 = document.getElementById("menu-class-1");
            let fleche1 = document.getElementById("menu-f-1");
            let menutop1 = document.getElementById("menu-d-1");
            // Menu 2 Formats - Récupérer la class pour savoir si menu est affiché ou masqué
            let menu2 = document.getElementById("menu-class-2");
            let fleche2 = document.getElementById("menu-f-2");
            let menutop2 = document.getElementById("menu-d-2");
         // Menu 3 Trier par - Récupérer la class pour savoir si menu est affiché ou masqué
            let menu3 = document.getElementById("menu-class-3");
            let fleche3 = document.getElementById("menu-f-3");
            let menutop3 = document.getElementById("menu-d-3");

        $("#menu-d-1").click(function(){
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            if (menu1.className === "hide") {
                menu1.classList.replace("hide", "visible");
                fleche1.classList.replace("flechebas", "flechehaut");
                menutop1.classList.replace("filtreinactif", "filtreactif");
              } else {
                menu1.classList.replace("visible", "hide");
                fleche1.classList.replace("flechehaut", "flechebas");
                menutop1.classList.replace("filtreactif", "filtreinactif");
              }
        });
          
        $("#menu-d-2").click(function(){
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            if (menu2.className === "hide") {
                menu2.classList.replace("hide", "visible");
                fleche2.classList.replace("flechebas", "flechehaut");
                menutop2.classList.replace("filtreinactif", "filtreactif");
                } else {
                menu2.classList.replace("visible", "hide");
                fleche2.classList.replace("flechehaut", "flechebas");
                menutop2.classList.replace("filtreactif", "filtreinactif");
                }
        });

        $("#menu-d-3").click(function(){
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            if (menu3.className === "hide") {
                menu3.classList.replace("hide", "visible");
                fleche3.classList.replace("flechebas", "flechehaut");
                menutop3.classList.replace("filtreinactif", "filtreactif");
                } else {
                menu3.classList.replace("visible", "hide");
                fleche3.classList.replace("flechehaut", "flechebas");
                menutop3.classList.replace("filtreactif", "filtreinactif");
                }
        });

        // Si clic sur item du menu déroulant Catégories
        $('.clicmenu1').click(function(event){
            // Annuler l'action du lien vers la page contact
            event.preventDefault();
            // Afficher la valeur sélectionnée sur le bouton du menu déroulant
            $valueselected = $(this).attr('data-value');
                if ($valueselected === undefined) {
                    document.getElementById('btncat').innerText = "CATÉGORIES";
                }
                else {
                    document.getElementById('btncat').innerText = $valueselected;
                }
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            menu1.classList.replace("visible", "hide");
            fleche1.classList.replace("flechehaut", "flechebas");
            menutop1.classList.replace("filtreactif", "filtreinactif");
        });

        // Si clic sur item du menu déroulant Formats
        $('.clicmenu2').click(function(event){
            // Annuler l'action du lien vers la page contact
            event.preventDefault();
            // Afficher la valeur sélectionnée sur le bouton du menu déroulant
            $valueselected = $(this).attr('data-value');
                if ($valueselected === undefined) {
                    document.getElementById('btnform').innerText = "FORMATS";
                }
                else {
                    document.getElementById('btnform').innerText = $valueselected;
                }
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            menu2.classList.replace("visible", "hide");
            fleche2.classList.replace("flechehaut", "flechebas");
            menutop2.classList.replace("filtreactif", "filtreinactif");
        });

        // Si clic sur item du menu déroulant Trier par
        $('.clicmenu3').click(function(event){
            // Annuler l'action du lien vers la page contact
            event.preventDefault();
            // Afficher la valeur sélectionnée sur le bouton du menu déroulant
            $valueselected = $(this).attr('data-value');
                if ($valueselected === undefined) {
                    document.getElementById('btntri').innerText = "TRIER PAR";
                }
                else {
                    document.getElementById('btntri').innerText = $valueselected;
                }
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            menu3.classList.replace("visible", "hide");
            fleche3.classList.replace("flechehaut", "flechebas");
            menutop3.classList.replace("filtreactif", "filtreinactif");
        });


    });
})(jQuery);