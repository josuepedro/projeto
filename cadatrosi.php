<?php
$codigo=$_POST['c'];
$Tipomercadoria=$_POST['t'];
$Nome=$_POST['n'];
$Quantidade=$_POST['q'];
$Pre�o=$_POST['p'];
$Tiponegocio=$_POST['languagem'];
$servidor="mysql.hostinger.com.br";
$nomedeusuario="u817064590_josue";
$servidorsenha="josue.pedro";
$connect = @mysql_connect($servidor,$nomedeusuario,$servidorsenha);
$db = mysql_select_db('u817064590_produ');
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
if($codigo==""||$codigo==null && $Tipomercadoria=="" || $Tipomercadoria==null && $Nome=="" || $Nome==null && $Quantidade=="" || $Quantidade==null&& $Pre�o=="" || $Pre�o==null && $Tiponegocio=="" || $Tiponegocio==null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo de cadastros deve ser preenchido');window.location.href='http://projetodesafio.esy.es';</script>";
        }else{
	$sql = "INSERT INTO prod(codigo,Tipomercadoria,Nome,Quantidade,Preco,Tiponegocio)
				VALUES('$codigo','$Tipomercadoria','$Nome','$Quantidade','$Pre�o','$Tiponegocio')";
                $resultado = mysql_query($sql,$connect);
                echo $resultado;
                if ($resultado){
                echo "<script language='javascript' type='text/javascript'>alert('Produto cadastrado com sucesso!!!acessar banco de dados para ver informa��o');window.location.href='http://projetodesafio.esy.es';</script>";
                } else {
                echo "<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel inserir produto...');window.location.href='http://projetodesafio.esy.es';</script>";
              }
}
			
            
        
?>

