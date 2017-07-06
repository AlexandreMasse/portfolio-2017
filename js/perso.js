/*Tout mon script perso*/

'use strict';

$(document).ready(function() {

    /********************************
     * Au chargement de la page
     * ******************************/

    var body = $('body');

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
        $(".cat").css({
            "animation" : "section-in 1s ease-out",
            "width" : "50%",
            "height" : "50%"
        });

        //Afficher titre des sections
        setTimeout(function(){
            $(".about .section-title").fadeIn("slow");
        },1000);
        setTimeout(function(){
            $(".work .section-title").fadeIn("slow");
        },1200);
        setTimeout(function(){
            $(".contact .section-title").fadeIn("slow");
        },1400);
        setTimeout(function(){
            $(".skill .section-title").fadeIn("slow");
        },1600);

        //Afficher le bouton home
        setTimeout(function(){
            $(".nav-home").fadeIn(700);
        },1800);

    };



    /******************************************
     * Survol sur une section
     * ***************************************/

    var categorie = $(".cat");

    categorie.hover(hoverSectionEnter, hoverSectionLeave);

    function hoverSectionEnter () {
        if($(this).hasClass("about")) {
            $(this).addClass('hover');
            $('.work').addClass('hover');
        }

         if($(this).hasClass("work")) {
            $(this).addClass('hover');
            $('.contact').addClass('hover');
        }

         if($(this).hasClass("skill")) {
            $(this).addClass('hover');
            $('.about').addClass('hover');
        }

         if($(this).hasClass("contact")) {
            $(this).addClass('hover');
            $('.skill').addClass('hover');
        }

    }

    function hoverSectionLeave () {
        if($(this).hasClass("about")) {
            $(this).removeClass('hover');
            $('.work').removeClass('hover');
        }

        if($(this).hasClass("work")) {
            $(this).removeClass('hover');
            $('.contact').removeClass('hover');
        }

        if($(this).hasClass("skill")) {
            $(this).removeClass('hover');
            $('.about').removeClass('hover');
        }

        if($(this).hasClass("contact")) {
            $(this).removeClass('hover');
            $('.skill').removeClass('hover');
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

        //Section prend tout l'écran
        $(this).css({
            "z-index" : "100",
            "width" : "100%",
            "height" : "100%",
            "cursor" : "default",
        });

        //Ne plus centrer verticalement
        setTimeout(function(){
            section.css({
                "align-items" : "flex-start",
            })
        },800);

        //Cacher le titre de la section
        $(".section-title").fadeOut("slow");

        //Cacher le bouton home
        $('.nav-home').fadeOut(100);


        //Afficher le contenu de la section et le mettre en flex
        setTimeout(function () {
            section.find(".section-container").fadeIn(1);
            section.find(".section-container").css({
                "display" : "flex"
            });
        }, 800);

        setTimeout(function(){

            section.find(".section-container").animate({"opacity": "1"}, 700);
        },900);



        //On affiche le bouton close
        setTimeout(function(){
            $(".section-close").fadeIn("slow");
        },1200);
    };



    /********************************************
     * Click sur le bouton close
     * ******************************************/


    $(".section-close").on("click", hideSection);

    function hideSection() {


        //Enlever couleur barre navigateur mobile
        $("meta[name='theme-color']").attr("content", "");


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

        /*Todo*/

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


        //Faire disparaitre le bouton close
        setTimeout(function () {
            $(".section-close").fadeOut();
        }, 100);

        //Faire apparaitre le bouton home
        setTimeout(function () {
            $('.nav-home').fadeIn("slow");

        },1100);



        //Réinitialise les bar dans la section skill
        setTimeout(function () {
            $('.bar-inner').css({
                "width" : "0"
            });
        }, 650);

    };



    /****************************************
     * Click sur le bouton home
     * *************************************/


    $(".nav-home").on("click", home);

    function home() {


        var color = $(body).css("background-color");
        $("meta[name='theme-color']").attr("content", color);

        $(".nav-home").fadeOut(1);

        //Cacher les sections
        $(".cat").css({
            "animation" : "section-out 1.5s ease-out",
            "width" : "0",
            "height" : "0"
        });


        $(".section-title").fadeOut("slow");


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

        var color = $(".work").css("background-color");
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


    $('.skill').on("click", skillBar);


    function skillBar() {
        //Remplir chaque bar
        $(".bar").each(function(){
            $(this).find(".bar-inner").animate({
                "width" : $(this).attr("data-width")
            },4000)
        });

    }

});
