<?php
// este modelo usa o mysqli - mais rapido e pratico na  conexão
  
$database="sql205.byethost.com:3306"; // SERVIDOR E PORTA UTILIZADA   
$dbbanco="b7_24046509_dados"; // BASE DE DADOS 
$dbusuario="b7_24046509"; // USUÁRIO DO MYSQL
$dbsenha="elite1981"; // SENHA DO MYSQL
 
// conexão com o banco de dados
$conexao=mysqli_connect($database,$dbusuario,$dbsenha,$dbbanco) or die("Error". mysqli_error($conexao));

?>