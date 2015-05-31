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
                            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Cadastros
                                    <b class="caret"></b> </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation" ><a href="./formulario.php">Membros</a></li>
                                    <li role="presentation" ><a href="./eventos.php">Eventos</a>
                                </ul>
                            </li>                                
                            <li role="presentation" class="#"><a href="./relatorio.php">Busca</a></li>
                        </ul>
                        <div class="navbar-form navbar-right" role="button">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#idModal">Logar</button>
                            </div>
                        </div>
                        <div class="modal fade" id="idModal">
                            <div class="modal-dialog">
                                <div class="modal-content">                                        
                                    <div class="modal-header">                                          
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                ><span aria-hidden="true">&times;</span></button>
                                        <h4>Efetue seu Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table-condensed">
                                            <tr>
                                                <td>
                                                    <label for="login">Login</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="login" id="login" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="senha">Senha</label>
                                                </td>
                                                <td>
                                                    <input type="password" name="senha" id="senha" class="form-control">
                                                </td>
                                            </tr>
                                        </table>
                                        <a href="senha.php"><span>Esqueceu sua senha?</span></a>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary">Logar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
  
                    
                </div>
            </nav>            
        </section>    
        
    </body>
</html>

