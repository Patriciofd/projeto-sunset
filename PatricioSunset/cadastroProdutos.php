<?php
   include ("conecta.php");
	include ("rotina.php");

	$NOME = $_POST["nome"];
	$MARCA = $_POST["marca"];
	$UNIDADES = $_POST["unidade"];
	$PRECO = $_POST["preco"];
	$TIPO = $_POST["tipo"];
	$QUANTIDADE = $_POST["quantidade"];

	if(($NOME == NULL) || ($MARCA == NULL) || ($UNIDADES == NULL) || ($PRECO == NULL) || ($TIPO == NULL) || ($QUANTIDADE == NULL)){
			echo "Um dos campos está vazio, preencha todos os campos";	
	}else {
					CadastrarProdutos($NOME, $MARCA, $UNIDADES, $PRECO, $TIPO, $QUANTIDADE);
	}
?>