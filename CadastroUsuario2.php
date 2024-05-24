<meta  http-equiv="Refresh" content="3;URL=login1.php">
<?PHP 
include ("conecta.php");
// as variáveis login e senha recebem os dados digitados na página anterior 
$nome = $_POST['nome']; 
$telefone = $_POST['telefone']; 
$email = $_POST['login']; 
$senha = $_POST['senha'];
  
//seleciona a tabela e executa a consulta
$query = "INSERT INTO usuarios(nivel,nome,telefone,email,senha)
VALUES ('u','$nome','$telefone','$email','$senha')";

mysqli_query($conexao,$query);

?>