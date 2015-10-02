<?php
	/*** seta null para os autoloads existentes ***/
   spl_autoload_register(null, false);
   /*** especifica a extensão dos arquivos a serem carregados ***/
   spl_autoload_extensions(".class.php");
   function classLoader($class)
   {
      $filename = $class . ".class.php";
      $pastas = array("controller","model");
      foreach($pastas as $pasta) {
      	$file = "{$pasta}/{$filename}";
      	if(file_exists($file)) {
      		include_once $file;
      	}
      }
   }
   /*** registra a classe que carrega ***/
   spl_autoload_register("classLoader");


class Aplicacao
{
	public static function run()
	{
		$layout = new Template("view/layout.html");		
		// Monta Conteúdo
		$conteudo["msg"] = "";
		if(isset($_GET["acao"])) {
			$class = $_GET["acao"];
			if(class_exists($class)) {
				$pagina = new $class;
				$conteudo = $pagina->controller();
			}
		}
		// Conteúdo até aqui		
		$layout->set("conteudo",$conteudo["msg"]);
		echo $layout->saida();
	}
}
Aplicacao::run();

?>


