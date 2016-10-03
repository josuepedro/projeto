<?php
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_josue";
$servidorsenha="josue.pedro";

$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_produ');
$sql="DELETE FROM `prod`";
$resultado = mysql_query($sql,$connect);

echo "<script language='javascript' type='text/javascript'>alert('DADOS EXCLUIDOS COM SUCESSO!');window.location.href='http://projetodesafio.esy.es';</script>";
 


?>
