<?php
include("rotina.php");
include("conecta.php");

$CODIGO = $_POST['id'];

ConsultarCarrinho($CODIGO);

?>