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
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Endereço</th>      
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "SELECT * FROM cliente";
      $result = $connect->query($sql);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>".$row['id_cliente']."</td>
          <td>".$row['nome_cliente']."</td>
          <td>".$row['cpf']."</td>
          <td>".$row['email']."</td>
          <td>".$row['endereco']."</td>
          <td>
          <a href='edit.php?id_cliente=".$row['id_cliente']."'>
          <button type='button'>Editar<button></a>
          </td>
          <td>
          <a href='php_action/remove.php?id_cliente= ".$row['id_cliente']."'> <button type='button'>Excluir</button></a>
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