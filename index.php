<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta name="theme-color" content="#00B5B5">

    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">

    <!-- Font Icon -->
    <link rel="stylesheet" href="font/icon/flaticon.css">

    <!-- Font text -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">


    <!-- Styles perso -->
    <link rel="stylesheet" href="css/styles.css">


    <title>Portfolio - Alexandre Massé</title>
</head>
<body>

    <main>

        <!-- INTRO -->

        <div class="intro">

            <div class="intro-me">
                <p>Alexandre Massé</p>
                <hr>
            </div>


            <div class="intro-title">
                <p>Mon portfolio</p>
            </div>


            <div class="intro-dev">
                <hr>
                <p>Creative developer</p>
            </div>

        </div>


        <!-- NAVIGATION -->

        <div class="nav-home"><span class="flaticon-home-01"></span></div>

        <div class="section-close"><span class="flaticon-cross-03"></span></div>



        <!-- SECTION : ABOUT -->

        <section class="cat about">

            <div class="section-title flaticon-about">A propos de moi</div>

            <div class="section-container">

                <picture class="photo-me">
                    <source media="(min-width: 600px)" srcset="img/me-l.jpg">
                    <source media="(min-width: 400px)" srcset="img/me-m.jpg">
                    <img src="img/me-s.jpg" alt="">
                </picture>

                <h1>Alexandre Massé</h1>

                <h2>Creative developer</h2>

                <p>Je suis actuellement étudiant en deuxième année du DUT "Métiers du multimédia et de l'internet" à Champs-sur-Marne. Cela va faire 2 ans que j'ai découvert le monde du développement web. En ces deux années j'ai su acquérir un certain nombres de connaissances concernant le développement web, mais plus que de la connaissance, j'ai découvert également du plaisir, le plaisir de coder ! C'est la raison pour laquelle je souhaite aujourd'hui devenir developpeur.</p>
                <p>Quand bien même je fais preuve d'un grand attrait pour le developpment, je suis quelqu'un de très ouvert et curieux qui adore apprendre sans cesse de nouvelles choses. Cette curiosité se travaille tous les jours et nottament grâce à ma passion qui est la photograhie.</p>

                <a href="doc/alexandre-masse-cv.pdf" class="cv-dl">Télécharger mon CV</a>

                <h3>Rejoins moi sur mes différents réseaux sociaux !</h3>

                <div class="social">
                    <a href="https://github.com/AlexandreMasse" title="Mon Github">
                        <span class="flaticon-social-github"></span>
                    </a>

                    <a href="https://twitter.com/Alexandre_Masse" title="Mon Twitter">
                        <span class="flaticon-social-twitter-01"></span>
                    </a>

                    <a href="https://www.flickr.com/photos/alexandre_masse/" title="Mon Flickr">
                        <span class="flaticon-social-flickr"></span>
                    </a>

                    <a href="https://fr.linkedin.com/in/alexandremasse" title="Mon LinkdIn">
                        <span class="flaticon-social-linkedin"></span>
                    </a>
                </div>
            </div>
        </section>


        <!-- SECTION : WORK -->

        <section class="cat work">

            <div class="section-title flaticon-work">Mes projets</div>

            <div class="section-container">

                <h1>Mes projets</h1>

                <div class="work-img">

                    <div class="work-item">
                        <figure class="work-img-hover">
                            <img src="img/projet-tutotoformes-1x.png" alt=""
                            srcset="img/projet-tutotoformes-2x.png 2x"/>
                            <figcaption>
                                <h3>Tutotoformes</h3>
                                <h5>Plateforme d'autoformation en ligne sur les métiers de web</h5>
                            </figcaption>
                            <div data-position="0"></div>
                        </figure>
                    </div>


                    <div class="work-item">
                        <figure class="work-img-hover">
                            <img src="img/projet-plateforme-mmi-1x.png" alt=""
                            srcset="img/projet-plateforme-mmi-2x.png 2x,
                                    img/projet-plateforme-mmi-3x.png 3x"/>
                            <figcaption>
                                <h3>Plateforme MMI</h3>
                                <h5>Plateforme de mise en relation des étudiants du DUT MMI avec les entreprises</h5>
                            </figcaption>
                            <div data-position="1"></div>
                        </figure>
                    </div>


                    <div class="work-item">
                        <figure class="work-img-hover">
                            <img src="img/projet-cv-interactif-1x.png" alt=""
                            srcset="img/projet-cv-interactif-2x.png 2x,
                                    img/projet-cv-interactif-3x.png 3x"/>
                            <figcaption>
                                <h3>CV interactif</h3>
                                <h5>Mon CV en ligne et interactif</h5>
                            </figcaption>
                            <div data-position="2"></div>
                        </figure>
                    </div>


                    <div class="work-item">
                        <figure class="work-img-hover">
                            <img src="img/projet-portrait-chinois-1x.png" alt=""
                            srcset="img/projet-portrait-chinois-2x.png 2x,
                                    img/projet-portrait-chinois-3x.png 3x"/>
                            <figcaption>
                                <h3>Portrait chinois</h3>
                                <h5>Site web permettant de me présenter originalement </h5>
                            </figcaption>
                            <div data-position="3"></div>
                        </figure>
                    </div>


                    <div class="work-item">
                        <figure class="work-img-hover">
                            <img src="img/projet-reflexephoto-1x.png" alt=""
                            srcset="img/projet-reflexephoto-2x.png 2x,
                                    img/projet-reflexephoto-3x.png 3x"/>
                            <figcaption>
                                <h3>Rapport de Stage</h3>
                                <h5>Rapport de stage graphique réalisé suite à mon stage de webmaster chez Reflexephoto</h5>
                            </figcaption>
                            <div data-position="4"></div>
                        </figure>
                    </div>

                </div>




                <div class="workview">

                    <!--Tutotoformes-->
                    <div>
                        <img src="img/projet-tutotoformes-2x.png" alt="">

                        <h2>Tutotoformes</h2>

                        <p>Tutotoformes est une plateforme réalisée dans le cadre du projet tutoré de deuxième année du DUT MMI. Cette plateforme a pour vocation de mettre à disposition des supports pédagogique safin d'apprendre diverses technologies. Tout cela en laissant à chacun la possibilité de proposer ses propres supports pédagogiques et les mettre à disposition de la comunautée.</p>

                        <a class="work-link" href="http://tutotoformes.fr/">
                            <p>Voir le projet</p>
                        </a>

                        <div class="nav-work-close"><span class="flaticon-cross-02"></span></div>
                    </div>


                    <!--Plateforme MMI-->
                    <div>

                        <img src="img/projet-plateforme-mmi-2x.png" alt="">

                        <h2>Plateforme MMI</h2>

                        <p>Plateforme réalisée dans le cadre du projet tutoré de première année du DUT MMI. Cette plateforme a pour but de présenter les étudiants du DUT MMI aux entreprisdes afin qu'ils puissent être mis en relation pour obtenir un stage.</p>

                        <a class="work-link" href="http://erwann-letue.fr/host/plateforme-mmi/">
                            <p>Voir le projet</p>
                        </a>

                        <div class="nav-work-close"><span class="flaticon-cross-02"></span></div>
                    </div>


                    <!--CV interactif-->
                    <div>

                        <img src="img/projet-cv-interactif-2x.png" alt="">

                        <h2>CV interactif</h2>

                        <p>Un CV numérique c'est bien, mais un CV interactif c'est mieux ! Ce CV me présente de manière ludique et originale. Ce fut mon premier projet réalisé à l'aide de Javascript et jQuery.</p>

                        <a class="work-link" href="http://alexandremasse.fr/cv-interactif/index.html">
                            <p>Voir le projet</p>
                        </a>

                        <div class="nav-work-close"><span class="flaticon-cross-02"></span></div>
                    </div>



                    <!-- Portrait chinois -->
                    <div>

                        <img src="img/projet-portrait-chinois-2x.png" alt="">

                        <h2>Portrait Chinois</h2>

                        <p>Site web à travers lequel je me decris. Ce fut le premier vrai site que j'ai réalisé entièrement de mes propres mains à l'aide du HTML et CSS</p>

                        <a class="work-link" href="http://alexandremasse.fr/portrait-chinois/">
                            <p>Voir le projet</p>
                        </a>

                        <div class="nav-work-close"><span class="flaticon-cross-02"></span></div>
                    </div>



                    <!-- Reflexephoto -->
                    <div>

                        <img src="img/projet-reflexephoto-2x.png" alt="">

                        <h2>Rapport de stage - Reflexephoto</h2>

                        <p>Rapport de stage realisé suite à mon stage en première année du DUT "Métiers du multimédia et de l'internet" chez Reflexephoto en tant que webmaster. Ce fut mon tout premier dossier grahique realisé entièrement sur Indesign</p>

                        <a class="work-link" href="http://alexandremasse.fr/share/doc/rapport-de-stage-reflexephoto.pdf">
                            <p>Voir le projet</p>
                        </a>

                        <div class="nav-work-close"><span class="flaticon-cross-02"></span></div>
                    </div>

                </div>


            </div>

        </section>







        <!-- SECTION : SKILL -->

        <section class="cat skill">

            <div class="section-title flaticon-skill">Mes compétences</div>

            <div class="section-container">

                <h2>Mes compétences...</h2>


                <div class="skill-container">

                <h3>...en développement</h3>

                    <div class="bar-html skill-dev">
                        <div class="skill-title">HTML5</div>
                        <div class="bar" data-width="100%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">100%</div>
                        </div>
                    </div>


                    <div class="bar-css skill-dev">
                        <div class="skill-title">CSS3</div>
                        <div class="bar" data-width="85%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">85%</div>
                        </div>
                    </div>


                    <div class="bar-javascript skill-dev">
                        <div class="skill-title">JavaScript / jQuery </div>
                        <div class="bar" data-width="75%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">75%</div>
                        </div>
                    </div>


                    <div class="bar-php skill-dev">
                        <div class="skill-title">PHP</div>
                        <div class="bar" data-width="65%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">65%</div>
                        </div>
                    </div>


                    <div class="bar-git skill-dev">
                        <div class="skill-title">SQL</div>
                        <div class="bar" data-width="60%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">60%</div>
                        </div>
                    </div>

                    <div class="bar-symfony skill-dev">
                        <div class="skill-title">Symfony</div>
                        <div class="bar" data-width="50%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">50%</div>
                        </div>
                    </div>


                    <h3>....en graphisme</h3>

                    <div class="bar-photoshop skill-graph">
                        <div class="skill-title">Photosphop</div>
                        <div class="bar" data-width="80%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">80%</div>
                        </div>
                    </div>

                    <div class="bar-illustrator skill-graph">
                        <div class="skill-title">Illustrator</div>
                        <div class="bar" data-width="70%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">70%</div>
                        </div>
                    </div>


                    <div class="bar-indesign skill-graph">
                        <div class="skill-title">InDesign</div>
                        <div class="bar" data-width="65%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">65%</div>
                        </div>
                    </div>



                    <h3>....en audiovisuel</h3>


                    <div class="bar-premiere skill-audio">
                        <div class="skill-title">Première Pro</div>
                        <div class="bar" data-width="70%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">70%</div>
                        </div>
                    </div>


                    <div class="bar-after skill-audio">
                        <div class="skill-title">After Effect</div>
                        <div class="bar" data-width="50%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">50%</div>
                        </div>
                    </div>


                    <h3>....en photographie</h3>


                    <div class="bar-portrait skill-photo">
                        <div class="skill-title">Portrait</div>
                        <div class="bar" data-width="90%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">90%</div>
                        </div>
                    </div>


                    <div class="bar-nb skill-photo">
                        <div class="skill-title">Noir & blanc</div>
                        <div class="bar" data-width="80%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">80%</div>
                        </div>
                    </div>


                    <div class="bar-nuit skill-photo">
                        <div class="skill-title">De nuit / Light Painting</div>
                        <div class="bar" data-width="70%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">70%</div>
                        </div>
                    </div>

                    <div class="bar-paysage skill-photo">
                        <div class="skill-title">Paysage / Panorama</div>
                        <div class="bar" data-width="65%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">65%</div>
                        </div>
                    </div>


                    <div class="bar-archi skill-photo">
                        <div class="skill-title">Architecture</div>
                        <div class="bar" data-width="50%">
                            <div class="bar-inner"></div>
                            <div class="bar-percent">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- SECTION : CONTACT -->

        <section class="cat contact">

            <div class="section-title flaticon-contact-02">Contact</div>

            <div class="section-container">

                <h2>Contact</h2>

                <p>Envoyez moi un petit message !</p>
                <form class="" action="index.php" method="post">

                    <input type="text" name="nom" placeholder="Nom" required>

                    <input type="text" name="prenom" placeholder="Prénom" required>

                    <input type="email" name="email" placeholder="Adresse e-mail" required>

                    <input type="text" name="sujet" placeholder="Sujet" required>

                    <textarea name="message" rows="5" cols="60" placeholder="Votre message" required=></textarea>

                    <?php
                    include 'php/send.php';
                    ?>

                    <input type="submit" name="" value="Envoyer">
                </form>
            </div>

        </section>
    </main>



    
    <!-- JQuery -->
    <script src="js/jquery-3.1.1.min.js"></script>


    <!-- Script perso -->
    <script src="js/perso.js"></script>


</body>

</html>
