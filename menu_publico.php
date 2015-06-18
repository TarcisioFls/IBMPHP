<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.3.js"></script>
<!--        <script src="../js/bootstrap.min.js"></script>       -->
        <style>
            #textohome{
                color: white;
                text-align: center;
            }
           
        </style>
    </head>
    <body>
        <section>
            <!-- Logo -->
            <div></div>
            <div class="nav navbar-default">
                <a href="index.php"> <img src="img/logo_igreja.png" alt="logo" height="170" class="nav navbar-nav"> </a>
                <h1 id="textohome">1ª Igreja Batista em Muribeca</h1>
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
                          
                        </ul>
                        
                         <?php include_once './login.php';?>
                    </div>
                    
  
                    
                </div>
            </nav>            
        </section>    
        
    </body>
</html>

