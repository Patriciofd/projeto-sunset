<?php
	/*-----------------------------------
	| 			Cadastrar Usuários         |
	-----------------------------------*/
	function CadastrarUsuario($NOME, $SENHA, $EMAIL, $ENDERECO, $NUMERO, $CIDADE, $CEP, $ESTADO, $TELEFONE, $CELULAR, $CPF, $NASCIMENTO) {
		$sql = "INSERT INTO USUARIO (	
		NOME,
		SENHA,
		EMAIL,
		ENDERECO,
		NUMERO,
		CIDADE,
		CEP,
		ESTADO,
		TELEFONE,
		CELULAR,
		CPF,
		DATA_NASCIMENTO
		) VALUES ('$NOME','$SENHA', '$EMAIL', '$ENDERECO','$NUMERO', '$CIDADE', '$CEP', '$ESTADO','$TELEFONE', '$CELULAR', '$CPF', ".$NASCIMENTO.")";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Usuário Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Usuário";	
		}
	}
	
	/*-----------------------------------
	| 			Excluir Usuários           |
	-----------------------------------*/
	function ExcluirUsuario($codigo) {
		$sql = "DELETE FROM USUARIO WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Usuario Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Usuário";	
			}		
	}
	
	/*-----------------------------------
	| 			Editar Usuários             |
	-----------------------------------*/
	function CompararUsuario($NOME, $SENHA) {
		if(($NOME) AND ($SENHA)) 
		{
			$sql = "SELECT * FROM USUARIO WHERE NOME='$NOME' AND SENHA='$SENHA'";
			$sql2 = mysql_query($sql) or die("ERRO no comando SQL :".mysql_error());
			if(mysql_num_rows($sql2) == 1) {
				header('location: loginUsuario.html');
			}
		}
	}
	
	
/*-----------------------------------
	| 			Cadastrar Produtos         |
	-----------------------------------*/
	function CadastrarProdutos($NOME, $MARCA, $UNIDADES, $PRECO, $TIPO, $QUANTIDADE) {
		$sql = "INSERT INTO PRODUTOS (	
		NOME,
		MARCA,
		UNIDADES,
		PRECO,
		TIPO,
		QUANTIDADE
		) VALUES ('$NOME','$MARCA', '$UNIDADES', $PRECO,'$TIPO', QUANTIDADE)";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Produto Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Produto";
		}
	}	
	
	/*-----------------------------------
	| 			Consultar Produtos         |
	-----------------------------------*/
	function ConsultarProdutos(){
		$sql = "SELECT * FROM PRODUTOS";
		$result = mysql_query($sql);
		$i = 0;
		while ($row = mysql_fetch_assoc($result)) {
			$i++;
			echo "<h3><p>Produto ".$i."</p></h3><br>";
    		echo "Nome: ".$row["NOME"]."<br>";
    		echo "Marca: ".$row["MARCA"]."<br>";
    		echo "Unidades: ".$row["UNIDADES"]."<br>";
			echo "Preço: ".$row["PRECO"]."<br>";
		   echo "Tipo: ".$row["TIPO"]."<br>";
			echo "Quantidade: ".$row["QUANTIDADE"]."<br><br>";
}
}
	
	
	/*-----------------------------------
	| 			Validar Data               |
	-----------------------------------*/
	function validaData($dat){
	$data = explode("/","$dat");
	$d = $data[0];
	$m = $data[1];
	$y = $data[2];

	$res = checkdate($m,$d,$y);
	if ($res == 1){
	   return true;
	} else {
		$erro = "Data de nascimento inválida, insira-a novamente";
	   return $erro;
	}
}

	/*-----------------------------------
	| 			Validar CPF                 |
	-----------------------------------*/
	function validaCPF($CPF) {
    	$CPF = ereg_replace('[^0-9]', '', $CPF);
    	$CPF = str_pad($CPF, 11, '0', STR_PAD_LEFT);

    	if (strlen($CPF) != 11) {
        	return false;
    	}

   	else if ($CPF == '00000000000' || 
        	$CPF == '11111111111' || 
        	$CPF == '22222222222' || 
        	$CPF == '33333333333' || 
        	$CPF == '44444444444' || 
        	$CPF == '55555555555' || 
        	$CPF == '66666666666' || 
        	$CPF == '77777777777' || 
        	$CPF == '88888888888' || 
        	$CPF == '99999999999') {
        	return false;

     	} else {   
         
        	for ($t = 9; $t < 11; $t++) {
             
            		for ($d = 0, $c = 0; $c < $t; $c++) {
                		$d += $CPF{$c} * (($t + 1) - $c);
          	  }
            		$d = ((10 * $d) % 11) % 10;
            		if ($CPF{$c} != $d) {
                	return false;
            }
        }
        return true;
   		 }	
	}
	
	function validaCep($CEP){
		if (!eregi("^[0-9]{5}-[0-9]{3}$", $CEP)) {
			echo "CEP inválido";
		}
		else{
			return true;
		}
	}

?>