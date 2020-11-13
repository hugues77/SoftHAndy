<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SoftHandy</title>
        <script src="https://kit.fontawesome.com/bdf8dcd65d.js"></script><!-- Ici j'ai inserer lekit fontAwesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section>
            <header>
                <a href="index.php" class="logo"><span class="ml-2 mr-2 text-logo">SoftHandy</span></a>
                <!-- <small class="slogan">Leader du web International</small> -->   
                <div class="toggle" onclick="toggleMenu();"></div>
            </header>
            <div class="content">
                <!-- <h2>Application web<br>Interactif</h2> -->
            </div>
            <div class="play" onclick="videoToggle();">
                <img src="images/play.png" width="50px" height="50px" alt="play video softhandy"><span class="ml-1 pr-1 pl-1 lire">Lire la vidéo</span>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="images/facebook.png" alt="facebook de softhandy"></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter de softhandy"></a></li>
                <li><a href="#"><img src="images/instagram.png" alt="instagram de softhandy"></a></li>
                <li><a href="#"><img src="images/in.png" alt="linkeld de softhandy"></a></li>
                <li><a href="#"><img src="images/g.png" alt="google plus de softhandy"></a></li>
            </ul>
            <div class="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Réalisation</a></li>
                    <li class="cont" onclick="contact();">Contact</li>
                </ul>
            </div>
            <!-- section page contact -->
            <div class="contact">
                <article>
                    <div class="container">
                        <div class="contactinfo">
                            <div>
                                <h2>Bésoin d'infos ?</h2>
                                <ul class="info">
                                    <li class="mb-2">
                                        <span><i class="fas fa-map-marked-alt fa-2x mr-2"></i></span>
                                        <span>Metz 57000 / France</span>
                                    </li>
                                    <li class="mb-2">
                                        <span><i class="fas fa-envelope-open-text fa-2x mr-2"></i></span>
                                        <span>contact@softhandy.fr</span>
                                    </li>
                                    <li class="mb-2">
                                        <span><i class="fas fa-phone-alt fa-2x mr-2"></i></span>
                                        <span>+33 (0) 6 51 29 46 92</span>
                                    </li>
                                </ul>
                            </div>
                            <ul class="sci2">
                                <li><a href="#"><img src="images/facebook.png" alt="facebook de softhandy"></a></li>
                                <li><a href="#"><img src="images/twitter.png" alt="twitter de softhandy"></a></li>
                                <li><a href="#"><img src="images/instagram.png" alt="instagram de softhandy"></a></li>
                                <li><a href="#"><img src="images/in.png" alt="linkeld de softhandy"></a></li>
                                <li><a href="#"><img src="images/g.png" alt="google plus de softhandy"></a></li>
                            </ul>
                            
                        </div>
                        <div class="contactForm">
                            <h2>Vous pouvez nous écrire !</h2>
                            <div class="formBox">
                                <div class="inputBox w50">
                                    <input type="text" name="" value="" required>
                                    <span>Nom </span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="text" name="" value="" required>
                                    <span>Prénom </span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="text" name="" value="" required>
                                    <span>Adresse électronique</span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="text" name="" value="" required>
                                    <span>Téléphone</span>
                                </div>
                                <div class="inputBox w100">
                                    <textarea rows="" cols="" name="" value="" required></textarea>
                                    <span>Votre message svp </span>
                                </div>
                                <div class="inputBox w100">
                                    <input type="submit" name="" value="Envoyer">
                                </div>
                            </div>
                        </div>
                    </div> 
                </article>
            </div>
        </section>
        <div class="trailler">
            <video src="images/clip_2.mp4" controls="true"></video>
            <img src="images/cancel_btn.png" alt="close vidéo" class="close" onclick="videoToggle();">
        </div>
        <div class="tech bg-dark">
            <i class="fas fa-code  fa-4x mr-5 ml-4"></i>
            <i class="fab fa-html5  fa-4x mr-5"></i>
            <i class="fab fa-css3  fa-4x mr-5"></i>
            <i class="fab fa-php fa-4x mr-5"></i>
            <i class="fab fa-angular fa-4x mr-5"></i>
            <i class="fab fa-shopify fa-4x mr-5"></i>
            <i class="fab fa-js-square fa-4x mr-5"></i>
            <i class="fab fa-wordpress fa-4x mr-5"></i>
            <i class="fas fa-blog fa-4x mr-5"></i>
            <i class="fab fa-symfony fa-4x mr-5"></i>
            <i class="fab fa-bootstrap fa-4x mr-2"></i>
            <i class="fab fa-mdb fa-4x "></i>
        </div>
<?php
require_once 'footer.php'; ?>