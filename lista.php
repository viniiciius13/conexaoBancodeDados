<?php
require_once("servidor.php");
$comando = "SELECT * FROM produtos ORDER BY id DESC";
$enviar= mysqli_query($conn, $comando);
$resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>

<table>

<tr>
    <th>Codigo</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Disponibilidade</th>
  </tr>

  <?php
  foreach ($resultado as $produto) {
    $codigo=$produto['codigo'];
    $nome=$produto['nome'];
    $preco=$produto['preco'];
    $disponibilidade=$produto['disponibilidade'];
    if ($disponibilidade=="1"){
        $disponibilidade="Disponivel";
    }else{
        $disponibilidade="Indisponivel";
    }

  

  ?>
  <tr>
    <td><?=$codigo?></td>
    <td><?=$nome?></td>
    <td><?=$preco?></td>
    <td><?=$disponibilidade?></td>
  </tr>
<?php
}
?>
  </table>