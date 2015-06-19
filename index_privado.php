<?php
include "./validar_session.php";

include "./conexao.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
       <title>1ª Igreja Batista em Muribeca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/teste.js"></script>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 100%;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <?php
            include_once 'menu.php';            
        ?>
        <section>
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
            <div><img src="img/propaganda1.jpg" alt="Thumb" width="171px" height="400"/></div>
            <div><img src="img/propaganda2.jpg" alt="Thumb" width="171px" height="400"/></div>
	</div>
	<div class="corposite"> <!--div corpo do site-->
		
	
	<div class="evento"><!--div eventos-->
            <div class="container">
                <div id="divimage"><h2>Eventos</h2></div>
                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#menu12">JAN</a></li>
                        <li><a data-toggle="tab" href="#menu1">FEV</a></li>
                        <li><a data-toggle="tab" href="#menu2">MAR</a></li>
                        <li><a data-toggle="tab" href="#menu3">ABR</a></li>
                        <li><a data-toggle="tab" href="#menu4">MAI</a></li>
                        <li><a data-toggle="tab" href="#menu5">JUN</a></li>
                        <li><a data-toggle="tab" href="#menu6">JUL</a></li>
                        <li><a data-toggle="tab" href="#menu7">AGOS</a></li>
                        <li><a data-toggle="tab" href="#menu8">SET</a></li>
                        <li><a data-toggle="tab" href="#menu9">OUT</a></li>
                        <li><a data-toggle="tab" href="#menu10">NOV</a></li>
                        <li><a data-toggle="tab" href="#menu11">DEZ</a></li>
                    </ul>

  <div class="tab-content">
    <div id="menu12" class="tab-pane fade">
      <h3>Eventos do Mês de Janeiro</h3>
      <h4>Aniversariantes do Mês</h4>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
        <p>Comemoraremos o aniversário de todos os membros que completam primaveras no mês de Janeiro.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Eventos do Mês de Fevereiro</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Eventos do Mês de Março</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Eventos do Mês de Abril</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Eventos do Mês de Maio</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Eventos do Mês de Junho</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu6" class="tab-pane fade">
      <h3>Eventos do Mês de Julho</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu7" class="tab-pane fade">
      <h3>Eventos do Mês de Agosto</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu8" class="tab-pane fade">
      <h3>Eventos do Mês de Setembro</h3>
     <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu9" class="tab-pane fade">
      <h3>Eventos do Mes de Outubro</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu10" class="tab-pane fade">
      <h3>Eventos do Mês de Novembro</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
    <div id="menu11" class="tab-pane fade">
      <h3>Eventos do Mês de Dezembro</h3>
      <div><img src="img/thumb1.png" alt="Thumb" width="400px" height="250"/></div>
      <div>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
             <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          </button></div>
    </div>
   </div>
</div>
	</div>
            <hr>
	<div><!--div videos-->
		<div class="video">
                <h4 class="h4">Videos</h4>
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
	<div class="nhd"> <!--div noticias, horario do culto, downloads-->
			
					<div class="horariodoculto"> <!--div horário do culto-->
						<h4 class="h4">Hórario dos Cultos</h4>
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
						<h4 class="h4">Downloads</h4>
						
                                                <a href="#" class="link">Boletim </a><br/>
                                                <a href="#" class="link">Músicas</a></p>
						
					</div> <!--fim div downloads-->
				
					<div class="noticias"> <!--div notícias-->
						<h4 class="h4">Noticias</h4>
						 - Sábado 18 de Abril de 2015 não haverá culto Jovem.<br/> - No Próximo sábado 25 voltaremos as atividades normais.</p>
					</div>  <!--fim div noticias-->
                   
					
			
	</div>  <!--fim div noticias, horario do culto, downloads-->
        <hr>
        

		<div class="projetos"> <!--div projetos-->
	<div class="projeto1">
		<h4>Culto Jovem</h4>
		<div class="photo">
                    <a href="#approach"><img src="img/portfolio1.jpg" alt="Thumb" width="171px" height="100"/></a>
		</div>
            <p class="P_GERAL">Eu vos escrevi, jovens, porque sois fortes, e a palavra de Deus está em vós, e já vencestes o maligno.(1 João 2:14)<br/>Culto Todos os Domingos às 09h00 </p>
	</div>
                    <div class="projeto2" class="nossahistoria">
            <h4 id="nh">Escola Bíblica (EBD)</h4>
		<div class="photo">
                    <a href="#methods"><img src="img/portfolio2.jpg" alt="Thumb" width="180px" height="100"/></a>
		</div>
            <p class="P_GERAL" id="texto">Bem-aventurado o homem que não anda segundo o conselho dos ímpios, nem se detém no caminho dos pecadores, 
		nem se assenta na roda dos escarnecedores.
		Antes tem o seu prazer na lei do Senhor, e na sua lei medita de dia e de noite.(Salmos 1:1-2)<br/> Todos os Domingos às 09h00</p>
		<p class="more"><a href="#"> &nbsp </a></p>
	</div>
	<div class="projeto3">
		<h4>Culto de Oração</h4>
		<div class="photo">
                <a href="#results"><img src="portfolio3.pjg" alt="Thumb" width="171px" height="100"/></a>
		</div>
		<p class="P_GERAL">“Vinde, adoremos e prostremo-nos; ajoelhemo-nos diante do Senhor, que nos criou” (Sl 95.6)<br/> Cultos todas as Quartas feiras às 19h00</p>
            <p class="more"><a href="#"> &nbsp </a></p>
	</div>
	
</div><!--fim div projetos-->
	</div> <!--fim div corpo do site-->

		
	</div> <!--fim div total-->

</div> <!--fim div carrousel-->
		
        </div> <!--fim div container-->
<div id="cantodireito"></div>

 </div><!--fim div site completo-->
            
            </section>

        
        <?php
        // put your code here
        include_once 'mapasite.php';
        ?>
        </br>
            

    </body>

</html>
       <?php
        include_once 'footer.php';
        ?>


