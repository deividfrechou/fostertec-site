<?PHP 
include ("conecta.php");
  
//seleciona a tabela e executa a consulta
$query = mysqli_query($conexao, "SELECT * FROM emprestimo") or die(mysqli_error($cx));

echo '<table width="100%" border="1" bordercolor="#003300">';

while($aux = mysqli_fetch_assoc($query)) { 
 echo "<tr>";
 echo "<td>ID: ".$aux["id"]."</td>";
 echo "<td>CPF: ".$aux["cpf"]."</td>";
 echo "<td>Nome: ".$aux["nome"]."</td>";
 echo "<td>Nascimento: ".$aux["nasc"]."</td>";
 echo "<tr>";
}

echo "</table>";

?>