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
$DATA = $_POST["nascimento_usuario"];


if (validaCPF($CPF)){
	if(validaData($DATA)){
		CadastrarUsuario($NOME, $SENHA, $EMAIL, $ENDERECO, $CIDADE, $CEP, $ESTADO, $TELEFONE, $CELULAR, $CPF, $DATA);
	}	
}
?>