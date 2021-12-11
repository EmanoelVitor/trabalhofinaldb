<?php require_once 'action_php/bdconnect.php'; ?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome do Jogo</th>
        <th>Preço</th>
        <th>Categoria</th>
        <th>Cliente Comprador</th>      
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "SELECT * FROM jogos";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>".$row['id_jogo']."</td>
          <td>".$row['nome_jogo']."</td>
          <td>".$row['preco_jogo']."</td>
          <td>".$row['categoria']."</td>
          <td>".$row['fk_cliente_id_cliente']."</td>
          <td>
          <a href='edit.php?id_jogo=".$row['id_jogo']."'>
          <button type='button'>Editar<button></a>
          </td>
          <td>
          <a href='php_action/remove.php?id_jogo= ".$row['id_jogo']."'> <button type='button'>Excluir</button></a>
          </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='5'><center>Nao existem dados</center></td></tr>";
      }
      ?>
    </tbody>
  </table>
        
    <body>
</html>