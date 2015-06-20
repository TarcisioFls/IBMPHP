<!--<?include "./conexao.php";?>
<html>
<header>
<style>
    #textohome{
        color: white;
        text-align: center;
    }
	.textoMenu{color: white;
        text-align: center;}

</style>
</header>
<html>-->
<section>
    <!-- Logo -->
    <div class="nav navbar-default">
        <a href="index.php"> <img src="img/logo_igreja.png" alt="logo" height="170" class="nav navbar-nav"> </a>
        <h1 id="textohome">1ª Igreja Batista em Muribeca</h1><br/>
		
    </div>
    <!-- Menu -->
    <nav class="navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="#"><a href="index.php">Pagina Inicial</a></li>
                    <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Quem Somos
                            <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li role="presentation" ><a href="./nossaHistoria.php">Nossa História</a></li>
                            <li role="presentation" ><a href="./missaoValor.php">Missão e Visão</a>
                            <li role="presentation" ><a href="./lideranca.php">Liderança</a>    
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Cadastros
                            <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li role="presentation" ><a href="./formulario.php">Membros</a></li>
                            <li role="presentation" ><a href="./eventos.php">Eventos</a>
                        </ul>
                    </li>                                
                    <li role="presentation" class="#"><a href="./relatorio.php">Busca</a></li>
                    <li role="presentation"><a href="delete.php">Apagar Membro</a></li>
	
                </ul>
				<?php include_once './login.php';?>
             </div>
        </div>
    </nav>            
</section>    
<!--</body>
</html>-->
        

