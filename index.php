<?php
    include_once 'menu.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>1ª Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 100%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <section>
            
                <!-- Caroseul -->
                <div class="container">
                    <br>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/slide/BANNER.jpg" alt="Chania" width="460" height="345">
                        </div>
                          
                        <div class="item">
                            <img src="img/slide/Fotos-engraçadas-mr-Bean.jpg" alt="Chania" width="460" height="345">
                        </div>

                        <div class="item">
                            <img src="img/slide/imagens-engracadas-para-whatsapp-10-1024x874.jpg" alt="Chania" width="460" height="345">
                        </div>

                        <div class="item">
                            <img src="img/slide/pato-branco.jpg" alt="Flower" width="460" height="345">
                        </div>

                        <div class="item">
                            <img src="img/slide/piadass.jpg" alt="Flower" width="460" height="345">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>

            </section>>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>
