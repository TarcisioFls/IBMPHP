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
        <link rel="stylesheet" href="css/estilo.css">
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
            <?php
                include_once './menu_publico.php';
            ?>
            <div class="total"><!--div site completo-->
                <div id="cantos"></div>

                <!-- Caroseul -->
                <div class="container" class="sitemeio">

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
                        <div> <!--div total-->
                            <div class="prop"><!--div propaganda-->
                                <br/>
                                <div><img src="img/propaganda1.jpg" alt="Thumb" width="171px" height="400"/></div>
                                <br/>
                                <div><img src="img/propaganda2.jpg" alt="Thumb" width="171px" height="400"/></div>
                            </div>
                            <div class="corposite"> <!--div corpo do site-->
                                <hr>
                                <div class="evento"><!--div eventos-->
                                    <?php include_once './abaevento.php'; ?>
                                </div>
                              <hr>
                                <div><!--div videos-->
                                    <div class="video">
                                        <img src="img/videosemdestaque.jpg" alt="Smiley face" height="80" width="85%">
                                        <br/>
                                        <div id="primeirovideo">
                                            <iframe width="342" height="300" src="https://www.youtube.com/embed/4g_h0R7iVXA" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <br/>
                                        <!--https://www.youtube.com/watch?v=4g_h0R7iVXA		
                                        http://www.ibmemorialsj.com.br/      site de igreja referencia-->
                                        <div id="ultimovideo">
                                            <iframe width="342" height="300" src="https://www.youtube.com/embed/ljHqUVBbwJ8" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <hr>                                                    
                                    </div>
                                </div>
                              
                              <hr>
                                <div class="nhd">
                                    <h2>Confira:</h2><!--div noticias, horario do culto, downloads-->
                                    <div class="horariodoculto"> <!--div horário do culto-->
                                        <h2>Hórario dos Cultos</h2>
                                        <p> 
                                        <h4>Domingo:</h4>
                                        09:00hs – EBD</br>
                                        19:00hs – Culto de Adoração</br>
                                        <h4>Terça:</h4>
                                        15:00hs - Culto Espitual</br>
                                        <h4>Quarta:</h4>
                                        19:00hs – Culto de Oração</br>
                                        <h4>Quinta:</h4>
                                        15:00hs - Culto da 3ªIdade</br>
                                        <h4>Sábado:</h4>
                                        15:00hs - Culto Infantil</br>
                                        19:oohs – Culto de Jovem
                                        </p>
                                    </div>  <!--fim div horário do culto-->

                                    <div class="downloads"> <!--div downloads-->
                                        <h2>Downloads</h2>
                                        <h5>Conheça POD, uma banda gospel americano!</h5>

                                        <a href="multimidia/POD - Alive.rar">Alive</a><br/>
                                        <a href="multimidia/POD - Youth Of The Nation.rar">Youth of the nation</a></p>

                                    </div> <!--fim div downloads-->

                                    <div  class="noticias"> <!--div notícias-->
                                        <h2>Noticias</h2>
                                        <p style="text-align:left;"> - Sábado 18 de Abril de 2015 não haverá culto Jovem.<br/> 
                                            - No Próximo sábado 25 voltaremos as atividades normais.<br/>
                                            - As obras na nossa Igreja estão quase terminando!<br/>
                                            - Estamos vendendo trufa para arrecadar verba para a construção da nossa creche!<br/>
                                            Procurar Gabriela.<br/>
                                            - </p>
                                    </div>  <!--fim div noticias-->		
                                </div>  <!--fim div noticias, horario do culto, downloads-->
                                <hr>
                                <div class="projetos"> <!--div projetos-->
                                    <img src="img/nossosprojetos1.jpg" alt="Smiley face" height=80" width="100%" >
                                    <div class="projeto1">
                                        <h3>Culto Jovem</h3>
                                        <div class="photo">
                                            <a href="#approach"><img src="img/portfolio1.jpg" alt="Thumb" width="200px" height="140"/></a>
                                        </div>
                                        <p class="P_GERAL">Eu vos escrevi, jovens, porque sois fortes, e a palavra de Deus está em vós, e já vencestes o maligno.(1 João 2:14)<br/>Culto Todos os Domingos às 09h00 </p>
                                    </div>
                                    <div class="projeto2" class="nossahistoria">
                                        <h3 id="nh">Escola Bíblica (EBD)</h3>
                                        <div class="photo">
                                            <a href="#methods"><img src="img/portfolio2.jpg" alt="Thumb" width="200px" height="140"/></a>
                                        </div>
                                        <p class="P_GERAL" id="texto">Bem-aventurado o homem que não anda segundo o conselho dos ímpios, nem se detém no caminho dos pecadores, 
                                            nem se assenta na roda dos escarnecedores.
                                            Antes tem o seu prazer na lei do Senhor, e na sua lei medita de dia e de noite.(Salmos 1:1-2)<br/> Todos os Domingos às 09h00</p>
                                        <p class="more"><a href="#"> &nbsp </a></p>
                                    </div>
                                    <div class="projeto3">
                                        <h3>Culto de Oração</h3>
                                        <div class="photo">
                                            <a href="#results"><img src="img/portfolio3.pjg" alt="Thumb" width="200px" height="140"/></a>
                                        </div>
                                        <p class="P_GERAL">“Vinde, adoremos e prostremo-nos; ajoelhemo-nos diante do Senhor, que nos criou” (Sl 95.6)<br/> Cultos todas as Quartas feiras às 19h00</p>
                                        <p class="more"><a href="#"> &nbsp </a></p>
                                    </div>
                                </div><!--fim div projetos-->
                            </div> <!--fim div corpo do site-->


                        </div> <!--fim div total-->

                    </div> <!--fim div carrousel-->

                </div> <!--fim div container-->

            </div><!--fim div site completo-->

        </section>
        <?php
        include_once './mapasite.php';

        include_once './footer.php';
        ?>
    </body>

</html>


