<?php
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_josue";
$servidorsenha="josue.pedro";

$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_produ');
$sql="select * from prod";
$resultado = mysql_query($sql,$connect);

echo "<hr/>produto cadastrado no banco de dados</p><hr/>";

while($dados=mysql_fetch_array($resultado)){
	
	
$cod=$dados['codigo'];
$tipo=$dados['Tipomercadoria'];
$nomes=$dados['Nome'];
$quant=$dados['Quantidade'];
$pre=$dados['Preco'];
$neg=$dados['Tiponegocio'];

echo "codigo do produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$cod<br>tipo de produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$tipo </br>nome de produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nomes</br>quantidade de produto:&nbsp;&nbsp;&nbsp;$quant&nbsp;produtos</br>preco de produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$$pre</br>tipo de negocio:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$neg<hr/></p>";

}


?>

