<?php
class GrupoProdutosInserir{
	private $descricao;
	
	public function __construct(){
		Transacao::open();
		$conexao=Transacao::get();
		$this->descricao=$conexao->quote($_POST["DESCRICAO"]);
	}
	public function controller(){
		try{
			$inserir = new Insere("PRODUTOS_GRUPO", "DESCRICAO", $this->descricao);
			$inserir->model();
			Transacao::close();
		}catch(exception $e){
			$retorno=array("erro" => TRUE, "msg"=>"Ocorreu um erro, por favor, tente novamente.");
		}	
	}
}
?>