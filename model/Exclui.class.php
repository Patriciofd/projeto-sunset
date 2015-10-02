<?php
class Exclui {
	private $tabela;
	private $condicao;
	
	public function __construct($tabela = NULL, $condicao = NULL) {
		if($tabela && $condicao) {
			$this->tabela = $tabela;
			$this->condicao = $condicao;
		}
		else {
			echo "Faltando parâmetros!";
		}
	}
	
	public function model() {
		try {
			$conexao = Transacao::get();
			$sql = "DELETE FROM $this->tabela WHERE $this->condicao ";
			$resultado = $conexao->Query($sql);
			if($resultado->rowCount() > 0) {
				$retorno["erro"] = false;
				$retorno["msg"] = "Removido com sucesso!";
			}
			else {
				$retorno["erro"] = true;
				$retorno["msg"] = "Nenhum valor removido!";
			}
		}
		catch(Exception $e) {
			$retorno["erro"] = true;
			$retorno["msg"] = "Ocorreu um erro! ".$e->getMessage();
		}
		return $retorno;
	}
}
?>