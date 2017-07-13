/*Tout mon script perso*/

'use strict';

$(document).ready(function() {

    /***************************************
     * Fonctions réutilisables
     * *************************************/

    var body = $('body');
    var categorie = $(".cat");
    var home = $(".nav-home");


    function categoryIn () {
        //Afficher les sections catégories
        $(".cat").css({
            "animation" : "section-in 1s ease-out",
            "width" : "50%",
            "height" : "50%"
        });

        // body.css("overflow", "auto");

        //Afficher le bouton home
        home.css({
            "animation": "homeIn 1s ease-out forwards",
            "display" : "block"
        });



        //Afficher titre des sections
        setTimeout(function(){
            $(".about-title h1").fadeIn("slow");
        },1000);
        setTimeout(function(){
            $(".work-title h1").fadeIn("slow");
        },1200);
        setTimeout(function(){
            $(".contact-title h1").fadeIn("slow");
        },1400);
        setTimeout(function(){
            $(".skill-title h1").fadeIn("slow");
        },1600);

    }

    function categoryOut() {

        //Cacher les sections
        $(".cat").css({
            "animation" : "section-out 1s ease-in",
            "width" : "0",
            "height" : "0"
        });

        //Cacher les titres des sections
        categorie.find('h1').fadeOut("slow");

        //Cacher le bouton home
        home.css("animation", "homeOut 1s 200ms ease-out forwards");

        setTimeout(function(){
            home.hide();
        },1200);

      /*  home.animate({opacity: '0'}, 1000, function () {
            home.css()
        });*/
        // home.fadeOut(500);


        //Fix overflow
        // body.css("overflow", "hidden");

    }

   /* function sectionIn() {

    }*/



    /********************************
     * Au chargement de la page
     * ******************************/



    /*********************************************
     * Clique sur intro
     * *******************************************/

    $(".intro-title").on("click", btnintro);

    function btnintro () {

        //Changer couleur barre navigateur mobile
        $("meta[name='theme-color']").attr("content", "");

        //Cacher l'intro
        $(".intro").fadeOut("slow");

        //Afficher les sections catégories
        categoryIn();

    }



    /******************************************
     * Survol sur une section
     * ***************************************/

    categorie.hover(hoverSectionEnter, hoverSectionLeave);

    function hoverSectionEnter () {
        if($(this).hasClass("about-title")) {
            $(this).addClass('hover');
            $('.work-title').addClass('hover');
        }

         if($(this).hasClass("work-title")) {
            $(this).addClass('hover');
            $('.contact-title').addClass('hover');
        }

         if($(this).hasClass("skill-title")) {
            $(this).addClass('hover');
            $('.about-title').addClass('hover');
        }

         if($(this).hasClass("contact-title")) {
            $(this).addClass('hover');
            $('.skill-title').addClass('hover');
        }

    }

    function hoverSectionLeave () {
        if($(this).hasClass("about-title")) {
            $(this).removeClass('hover');
            $('.work-title').removeClass('hover');
        }

        if($(this).hasClass("work-title")) {
            $(this).removeClass('hover');
            $('.contact-title').removeClass('hover');
        }

        if($(this).hasClass("skill-title")) {
            $(this).removeClass('hover');
            $('.about-title').removeClass('hover');
        }

        if($(this).hasClass("contact-title")) {
            $(this).removeClass('hover');
            $('.skill-title').removeClass('hover');
        }

    }



    /******************************************
     * Clique sur une section
     * ***************************************/


    categorie.on("click", showSection);

    /*$(".section-title").on("click", function () {
     $(this).parent(".cat" ).on("click", showSection);
     });*/

    function showSection () {
        var section = $(this);


        //Changer couleur barre navigateur mobile
        var color = section.css("background-color");
        $("meta[name='theme-color']").attr("content", color);


        //Cache les catégories
        categoryOut();

        //Affiche contenu section
        section.next().css("display", "flex");




        //On affiche le bouton close
        setTimeout(function(){
            $(".section-close").fadeIn("slow");
        },1800);



       /* //Section prend tout l'écran
        $(this).css({
            "z-index" : "100",
            "width" : "100%",
            "height" : "100%",
            "cursor" : "default",
        });*/

       /* //Ne plus centrer verticalement
        setTimeout(function(){
            section.css({
                "align-items" : "flex-start",
            })
        },800);*/




       /* //Afficher le contenu de la section et le mettre en flex
        setTimeout(function () {
            section.find(".section-container").fadeIn(1);
            section.find(".section-container").css({
                "display" : "flex"
            });
        }, 800);

        setTimeout(function(){

            section.find(".section-container").animate({"opacity": "1"}, 700);
        },900);
*/


    }



    /********************************************
     * Click sur le bouton close
     * ******************************************/


    $(".section-close").on("click", hideSection);

    function hideSection() {


        //Enlever couleur barre navigateur mobile
        $("meta[name='theme-color']").attr("content", "");


        //Cache les contenus
        $("[id$=\"-content\"]").fadeOut(300);


        //Affiche les catégories
        setTimeout(function () {
            categoryIn();
        }, 500);


/*
        //Mettre opacité 0
        $(".section-container").animate({"opacity": "0"}, 300);

        //Cacher le contenu de la section après opacité 0
        setTimeout(function () {
            $(".section-container").fadeOut(1);
        }, 600);


        //On scrolle vers le haut
        setTimeout(function () {
            $('html, body').animate({scrollTop:0}, 1);
        }, 301);

        /!*Todo*!/

        //Remettre les sections à 50% et aligner verticalement
        setTimeout(function () {

            $("section").css({
                "z-index" : "1",
                "width" : "50%",
                "height" : "50%",
                "align-items" : "center",
                "cursor" : "pointer",
            });
        }, 350);

        //Afficher les titres des sections
        setTimeout(function () {
            $(".section-title").fadeIn(800);
        },800);


        //Faire apparaitre le bouton home
        setTimeout(function () {
            $('.nav-home').fadeIn("slow");

        },1100);*/



        //Faire disparaitre le bouton close
        setTimeout(function () {
            $(".section-close").fadeOut();
        }, 50);


        //Réinitialise les bar dans la section skill
        setTimeout(function () {
            $('.bar-inner').css({
                "width" : "0"
            });
        }, 650);

    }





    /****************************************
     * Hover sur le bouton home
     * *************************************/

    home.hover(homeHoverIn, homeHoverOut);

    var compteurIn = 0;
    var tour = 0;
    var multiplication = 0;

    function homeHoverIn () {

        multiplication = tour*360;

        compteurIn++;

        if (compteurIn > 4) {
            compteurIn = 1;
        }

        /*console.log('tour : ' + tour);
        console.log('milti :' + multiplication);
        console.log('fois :  :' + compteurIn);*/


        if (compteurIn === 1) {
            var angle1 = 45 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle1 + "deg)");
        }
        if (compteurIn === 2) {
            var angle3 = 135 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle3 + "deg)");
        }

        if (compteurIn === 3) {
            var angle5 = 225 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle5 + "deg)");
        }

        if (compteurIn === 4) {
            var angle7 = 315 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle7 + "deg)");
        }


    }


    function homeHoverOut () {

        if (compteurIn === 1) {
            var angle2 = 90 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle2 + "deg)");
        }
        if (compteurIn === 2) {
            var angle4 = 180 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle4 + "deg)");
        }
        if (compteurIn === 3) {
            var angle6 = 270 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle6 + "deg)");
        }
        if (compteurIn === 4) {
            var angle8 = 360 + multiplication;
            home.css("transform", "translateY(-50%) rotate(" + angle8 + "deg)");
        }

        //Compteur tour
        if (compteurIn%4 === 0 && compteurIn > 0) {
            tour++;
        }

    }

    /****************************************
     * Click sur le bouton home
     * *************************************/


    home.on("click", homeClick);

    function homeClick() {

        var color = $(body).css("background-color");
        $("meta[name='theme-color']").attr("content", color);

        categoryOut();

       /* $(".nav-home").fadeOut(1);*/

       /* //Cacher les sections
        $(".cat").css({
            "animation" : "section-out 1.5s ease-out",
            "width" : "0",
            "height" : "0"
        });*/


        /*$(".section-title").fadeOut("slow");*/


        //Afficher l'intro
        $(".intro").fadeIn("slow");
    }


    /***************************************
     *Click sur un projet
     ***************************************/


    $(".work-item div").on("click", showWork);

    function showWork() {

        var color = $(".workview > div").css("background-color");
        $("meta[name='theme-color']").attr("content", color);



        //on recupère la position de l'élément depuis data
        var position = $(this).attr("data-position");
        console.log(position);

//                body.css('overflow', 'hidden');
        $(".workview > div").eq(position).css({
            "display": "flex"
        }).animate({"bottom": 0}, 500, function() {
            /*body.css('overflow', 'auto');*/
        });


        //Cacher le bouton close section
        $(".section-close").css({
            "z-index" : "99",
        });
    }



    /****************************************
     *Click bouton close work
     ****************************************/

    $('.nav-work-close').on("click", hideWork);

    function hideWork() {

        var color = $(".work-title").css("background-color");
        $("meta[name='theme-color']").attr("content", color);

//                body.css('overflow', 'hidden');
        $(".section-close").css({
            "z-index" : "101",
        });

        $(this).parent().animate({"bottom": "-100vh"}, 500, function() {

            $(this).css('display', 'none');
//                    body.css('overflow', 'auto');
        })
    }




    /*******************************
     * Click sur section Skill
     * *****************************/


    $('.skill-title').on("click", skillBar);


    function skillBar() {
        //Remplir chaque bar
        setTimeout(function () {
            $(".bar").each(function(){
                $(this).find(".bar-inner").animate({
                    "width" : $(this).attr("data-width")
                },4000)
            });
        }, 1500);


    }

});
