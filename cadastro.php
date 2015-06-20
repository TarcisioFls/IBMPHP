<?php
// inclui o arquivo de configuração do sistema
include "./conexao.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$senha = $_POST['senha'];
$rep_senha = $_POST['rep_senha'];
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$pergunta = htmlspecialchars($_POST['pergunta']);
$resposta = htmlspecialchars($_POST['resposta']);

// verifica se o usuario digitou o login
if($login == "") {
	echo "Digite seu login!";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
        $result = "select * from dados_usuarios where Login = '$login'";
	$consulta = mysqli_query($conn, $result);
	$linha = mysqli_num_rows($consulta);
	if($linha != true) {
		echo "O nome de usuario que você<br>
			  Digitou já existe tente outro!";
		exit;
	}
}

// verifica se o usuario digitou a senha
if($senha == "") {
	echo "Digite sua senha!";
	exit;
} else {
	// se o usuario digitou a senha
	// vamos comparar com a contra senha
	if($senha != $rep_senha) {
		echo "Senha invalida!";
		exit;
	}
}

// verifica se o usuario digitou o nome
if($nome == "") {
	echo "Digite seu nome!";
	exit;
}

// verifica o email
if($email == "") {
	echo "Digite o seu e-mail!";
	exit;
}

// verifica a pergunta secreta
if($pergunta == "") {
	echo "Digite sua pergunta secreta!";
	exit;
}

// verifica a resposta secreta
if($resposta == "") {
	echo "Digite sua resposta secreta!";
	exit;
}

// faz consulta no banco para inserir os dados do usuario
$sql = "insert into dados_usuarios (ID,Login,Senha,Nome,Email,Pergunta,Resposta) values ('','$login','$senha','$nome','$email','$pergunta','$resposta')";
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
	echo "<font color=green><b>
		  Você foi cadastrado com sucesso!<br>
		  Click <a href=login2.php>aqui</a> para efetuar o login.
		  </font></b>";
	exit;
} else {
	echo "Não foi possivel efetuar o seu cadastro<br>
		  tente mais tarde pode ser um problema no servido!<br>
		  Click <a href=index_publico.php>aqui</a> para ir ate a home page do sistema.";
	exit;
}
?>
