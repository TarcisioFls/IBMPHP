<?php
@session_start();

// inclui o arquivo de configuração do sistema
include "./conexao.php";

// verifica se a variavel existir
if(isset($_SESSION['login_usuario']) and isset($_SESSION['senha_usuario'])) {
	// se existie as sessões coloca os valores em uma varivel
	$login_usuario = $_SESSION['login_usuario'];
	$senha_usuario = $_SESSION['senha_usuario'];
} else {
	$erro = urlencode("Você não esta logado!");
	header("Location: ./index.php");
	exit;
}

// verifica se as variaveis estão atribuidas
if(!(empty($login_usuario) or empty($senha_usuario))) {
	// se estiverem atribuidos vamos ver se exist o login
	$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	if(mysql_num_rows($consulta) == 1) {
		// se o usuario exostir vamos verificar a senha
		if($senha_usuario != mysql_result($consulta,0,"Senha")) {
			// se a senha está correta vamos apagar a
			// sessão que existia mas erra a errada
			unset($_SESSION['login_usuario']);
			unset($_SESSION['senha_usuario']);
			
			$erro = urlencode("Você não esta logado!");
			header("Location: ./index.php");
			exit;
		}
	} else {
		unset($_SESSION['login_usuario']);
		unset($_SESSION['senha_usuario']);
		
		$erro = urlencode("Você não esta logado!");
		header("Location: ../index.php");
		exit;
	}
} else {
	// caso as sessões estarem vaizias
	$erro = urlencode("Você não esta logado!");
	header("Location: ./index.php");
	exit;
}
mysql_close($conn);
?>