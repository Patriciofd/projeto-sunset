<?php
	
	/*-----------------------------------
	| 			Cadastrar clientes         |
	-----------------------------------*/
	function CadastrarClientes($nome, $endereco, $numero, $bairro, $cidade, $estado, $pais, $telefone, $celular, $cpf, $rg_rne, $referencia_comercial_1, $referencia_comercial_2, $referencia_comercial_3) {
		$sql = "INSERT INTO CLIENTES (	
		NOME,
		ENDERECO,
		NUMERO,
		BAIRRO,
		CIDADE,
		ESTADO,
		PAIS,
		TELEFONE,
		CELULAR,
		CPF,
		RG_RNE,
		REFERENCIA_COMERCIAL_1,
		REFERENCIA_COMERCIAL_2,
		REFERENCIA_COMERCIAL_3
		) VALUES ('$nome','$endereco', '$numero', '$bairro', '$cidade', '$estado', '$pais','$telefone', '$celular', '$cpf', '$rg_rne', '$referencia_comercial_1','$referencia_comercial_2','$referencia_comercial_3')";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Cliente Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Cliente";	
		}
	}
	
	/*-----------------------------------
	| 			Editar clientes            |
	-----------------------------------*/
	function EditarClientes($codigo, $nome, $endereco, $numero, $bairro, $cidade, $estado, $pais, $telefone, $celular, $cpf, $rg_rne, $referencia_comercial_1, $referencia_comercial_2, $referencia_comercial_3) {
		$sql = "UPDATE CLIENTES SET
		NOME = '$nome',
		ENDERECO = '$endereco',
		NUMERO = '$numero',
		BAIRRO = '$bairro',
		CIDADE = '$cidade',
		ESTADO = '$estado',
		PAIS = '$pais',
		TELEFONE = '$telefone',
		CELULAR = '$celular',
		CPF = '$cpf',
		RG_RNE = '$rg_rne',
		REFERENCIA_COMERCIAL_1 = '$referencia_comercial_1',
		REFERENCIA_COMERCIAL_2 = '$referencia_comercial_2',
		REFERENCIA_COMERCIAL_3 = '$referencia_comercial_3' WHERE CODIGO = $codigo ";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cliente Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Cliente";	
			}		
	}
	/*-----------------------------------
	| 			Excluir clientes           |
	-----------------------------------*/
	function ExcluirClientes($codigo) {
		$sql = "DELETE FROM CLIENTES WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cliente Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Cliente";	
			}		
	}
	/*-----------------------------------
	| 			Cadastro de Produtos       |
	-----------------------------------*/
	function CadastrarProdutos($nome, $marca, $unidade, $preco, $tipo, $quantidade) {
		$slq = "INSERT INTO PRODUTOS (
		NOME,
		MARCA,
		UNIDADE,
		PRECO,
		TIPO,
		QUANTIDADE ) VALUES ('$nome', '$marca', '$unidade', $preco, '$tipo', $quantidade)";
		mysql_query($slq);
		if(mysql_affected_rows() > 0) {
			echo "Produto Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Produto";	
		}	
	}
	/*-----------------------------------
	| 		  	Editar Produtos           |
	-----------------------------------*/
	function EditarProdutos($codigo, $nome, $marca, $unidade, $preco, $tipo, $quantidade) {
		$sql = "UPDATE PRODUTOS SET 
		NOME = '$nome',
		MARCA = '$marca',
		UNIDADE = '$unidade',
		PRECO = $preco,
		TIPO = '$tipo',
		QUANTIDADE = $quantidade WHERE CODIGO = $codigo";
	}
	/*-----------------------------------
	| 			Excluir Produtos           |
	-----------------------------------*/
	function ExcluirProdutos($codigo) {
		$sql = "DELETE FROM PRODUTOS WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Produto Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Produto";	
			}		
	}
	/*-----------------------------------
	| 			Cadastrar Cidades       |
	-----------------------------------*/
	function CadastrarCidades($nome, $estado, $IBGE) {
		$sql = "INSERT INTO CIDADES (	
		NOME,
		ESTADO,
		CODIGO_IBGE
		) VALUES ('$nome','$estado', $IBGE)";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Cidade Cadastrada com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Cidade";	
		}
	}
	
	/*-----------------------------------
	| 			Editar Cidades             |
	-----------------------------------*/
	function EditarClientes($codigo, $nome, $estado, $IBGE ) {
		$sql = "UPDATE CLIENTES SET
		NOME = '$nome',
		ESTADO = '$estado',
		CODIGO_IBGE = $IBGE WHERE CODIGO = $codigo ";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cidade Alterada com Sucesso";	
			} else {
				echo "Erro ao Alterar Cidade";	
			}		
	}
	
	/*-----------------------------------
	| 			Excluir Cidades           |
	-----------------------------------*/
	function ExcluirCidades($codigo) {
		$sql = "DELETE FROM CIDADES WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Cidade Alterada com Sucesso";	
			} else {
				echo "Erro ao Alterar Cidade";	
			}		
	}
	
	/*-----------------------------------
	| 			Cadastrar Usuários         |
	-----------------------------------*/
	function CadastrarUsuario($NOME, $SENHA, $EMAIL, $ENDERECO, $CIDADE, $CEP, $ESTADO, $TELEFONE, $CELULAR, $CPF, $NASCIMENTO) {
		$sql = "INSERT INTO USUARIOS (	
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
		) VALUES ('$NOME','$SENHA', '$EMAIL', '$ENDERECO', '$CIDADE', '$CEP', '$ESTADO','$TELEFONE', '$CELULAR', '$CPF', $NASCIMENTO)";
		mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows() > 0) {
			echo "Usuário Cadastrado com Sucesso";	
		} else {
			echo "Erro ao Cadastrar Usuário";	
		}
	}
	
	/*-----------------------------------
	| 			Editar Usuários             |
	-----------------------------------*/
	function EditarUsuario($codigo, $NOME, $SENHA, $EMAIL, $ENDERECO, $CIDADE, $CEP, $ESTADO, $TELEFONE, $CELULAR, $CPF, $NASCIMENTO) {
		$sql = "UPDATE USUARIOS SET 	
		NOME = '$NOME',
		SENHA = '$SENHA',
		EMAIL = '$EMAIL',
		ENDERECO = '$EMAIL',
		NUMERO = '$NUMERO',
		CIDADE = '$CIDADE',
		CEP = '$CEP',
		ESTADO = '$ESTADO',
		TELEFONE = '$TELEFONE',
		CELULAR = '$CELULAR',
		CPF = '$CPF',
		DATA_NASCIMENTO = $NASCIMENTO WHERE CODIGO = $codigo;
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Usuario Alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Usuário";	
			}		
	}
	
	/*-----------------------------------
	| 			Excluir Usuários           |
	-----------------------------------*/
	function ExcluirUsuario($codigo) {
		$sql = "DELETE FROM USUARIOS WHERE CODIGO = $codigo";
		mysql_query($sql);
			if(mysql_affected_rows() > 0) {
				echo "Usuário alterado com Sucesso";	
			} else {
				echo "Erro ao Alterar Usuário";	
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
	   return true;
	}
}

	/*-----------------------------------
	| 			Validar CPF                 |
	-----------------------------------*/
	function validaCPF($cpf) {
    	$cpf = ereg_replace('[^0-9]', '', $cpf);
    	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    	if (strlen($cpf) != 11) {
        	return false;
    	}

   	else if ($cpf == '00000000000' || 
        	$cpf == '11111111111' || 
        	$cpf == '22222222222' || 
        	$cpf == '33333333333' || 
        	$cpf == '44444444444' || 
        	$cpf == '55555555555' || 
        	$cpf == '66666666666' || 
        	$cpf == '77777777777' || 
        	$cpf == '88888888888' || 
        	$cpf == '99999999999') {
        	return false;

     	} else {   
         
        	for ($t = 9; $t < 11; $t++) {
             
            		for ($d = 0, $c = 0; $c < $t; $c++) {
                		$d += $cpf{$c} * (($t + 1) - $c);
          	  }
            		$d = ((10 * $d) % 11) % 10;
            		if ($cpf{$c} != $d) {
                	return false;
            }
        }
        return true;
   		 }	
	}
}
?>