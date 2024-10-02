// Initialiser Skrollr après avoir chargé le fichier skrollr.min.js
(function($) {
    // Init Skrollr
    var s = skrollr.init();
    if (s.isMobile()) {
        s.destroy();
    }        
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
        threshold: 0.03
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


// Afficher ou masquer le menu en version mobile au clic sur le burger
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.navbar-nav');
const body = document.querySelector('body');

burger.addEventListener('click', () => {
    // Masquer le menu
    navLinks.classList.toggle('nav-active');
    // Bloquer le scroll
    body.classList.toggle('fixed-position');
    // Animer le burger
    burger.classList.toggle('toggle');
});

// Masquer le menu en version mobile au clic sur un item
const menuitem = document.querySelector('.menu-item');

document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', event => {
        // Masquer le menu
        navLinks.classList.toggle('nav-active');
        // Bloquer le scroll
        body.classList.toggle('fixed-position');
        // Animer le burger
        burger.classList.toggle('toggle');

    })
})


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


(function($){
    $(document).ready(function() {
    // Afficher ou masquer les menus déroulants
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
                    document.getElementById('btncat').innerText = "TYPE DE PROJET";
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
                    document.getElementById('btncms').innerText = "CMS";
                }
                else {
                    document.getElementById('btncms').innerText = $valueselected;
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
                    document.getElementById('btntri').innerText = "TRIER PAR DATE";
                }
                else {
                    document.getElementById('btntri').innerText = $valueselected;
                }
            // Changer la class + pivoter la fleche vers le haut ou vers le bas
            menu3.classList.replace("visible", "hide");
            fleche3.classList.replace("flechehaut", "flechebas");
            menutop3.classList.replace("filtreactif", "filtreinactif");
        });


    // Observer quand la section projet arrive (change de class à is-visible) pour lancer apparition des hexagones
    const proj = document.querySelector('#projet');
    let hex1 = document.getElementById("hex1");
    let hex2 = document.getElementById("hex2");
    let hex3 = document.getElementById("hex3");
    let hex4 = document.getElementById("hex4");
    let hex5 = document.getElementById("hex5");
    let hex6 = document.getElementById("hex6");
    let hexp = document.getElementById("hexp");

    const options = {
        attributes: true
    }
  
    function callback(mutationList, observer) {
        mutationList.forEach(function(mutation) {
        if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
            // Ajouter class is-visible à tous les hexagones
            hex1.classList.add("is-visible");
            hex2.classList.add("is-visible");
            hex3.classList.add("is-visible");
            hex4.classList.add("is-visible");
            hex5.classList.add("is-visible");
            hex6.classList.add("is-visible");
            hexp.classList.add("is-visible");
        }
        })
    }

    const observer = new MutationObserver(callback);
    observer.observe(proj, options);

    // Si la section projet est déjà is-visible au chargement alors afficher tous les hexagones
        if(proj.classList.contains('is-visible')) {
            // Ajouter class is-visible à tous les hexagones
            hex1.classList.add("is-visible");
            hex2.classList.add("is-visible");
            hex3.classList.add("is-visible");
            hex4.classList.add("is-visible");
            hex5.classList.add("is-visible");
            hex6.classList.add("is-visible");
            hexp.classList.add("is-visible");
        }


    // Animation du texte au centre de la roue projet
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 1;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
          };
          
          TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];
          
            if (this.isDeleting) {
              this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
              this.txt = fullTxt.substring(0, this.txt.length + 1);
            }
          
            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
          
            var that = this;
            var delta = 100 - Math.random() * 100;
          
            if (this.isDeleting) { delta /= 2; }
          
            if (!this.isDeleting && this.txt === fullTxt) {
              delta = this.period;
              this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
              this.isDeleting = false;
              this.loopNum++;
              delta = 500;
            }
          
            setTimeout(function() {
              that.tick();
            }, delta);
          };
          
          window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-rotate');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
              }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
          };

    });
})(jQuery);