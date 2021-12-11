<?php require_once 'action_php/bdconnect.php'; ?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="table-responsive-sm">
    <table class="table">
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
          <a href='edit.php?id_cliente=".$row['id_cliente']."'><button type='button' class='btn btn-success'>Editar</button></a>
          
          </td>
          <td>
          <a href='php_action/remove.php?id_cliente= ".$row['id_cliente']."'> <button type='button' class='btn btn-danger'>Excluir</button></a>
          </td>
          </tr>";
        }
      } else {
        echo "<tr><td colspan='5'><center>Nao existem dados</center></td></tr>";
      }
      ?>
    </tbody>
  </table>
    </div>  
    <body>
</html>