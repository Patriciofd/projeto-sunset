<?php
	include ("conecta.php");
	include ("rotina.php");

	$NOME = $_POST["nome_usuario"];
	$SENHA = $_POST["senha_usuario"];
	$EMAIL = $_POST["email_usuario"];
	$ENDERECO = $_POST["endereco_usuario"];
	$NUMERO = $_POST["numero_usuario"];
	$CIDADE = $_POST["cidade_usuario"];
	$CEP = $_POST["cep_usuario"];
	$ESTADO = $_POST["estado_usuario"];
	$TELEFONE = $_POST["telefone_usuario"];
	$CELULAR = $_POST["celular_usuario"];
	$CPF = $_POST["cpf_usuario"];
	$NASCIMENTO = $_POST["nascimento_usuario"];

	if(($NOME == NULL) || ($SENHA == NULL) || ($EMAIL == NULL) || ($ENDERECO == NULL) || ($NUMERO == NULL) || ($CIDADE == NULL) || ($EMAIL == NULL) ||  ($ESTADO == NULL) || ($TELEFONE == NULL) ||  ($CELULAR == NULL)){
		echo "Um dos campos está vazio, preencha todos os campos";	
	}else {
		if (validaCPF($CPF)){
			if(validaData($NASCIMENTO)){
				if(validaCEP($CEP)){
					CadastrarUsuario($NOME, $SENHA, $EMAIL, $ENDERECO, $NUMERO, $CIDADE, $CEP, $ESTADO, $TELEFONE, $CELULAR, $CPF, $NASCIMENTO);
				} 
			} 	
		}	
	}

?>