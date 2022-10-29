<?php
session_start();
include_once './config.php';
$id =filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Registro</title>
  </head>
  <body>  
    
    <?php    
    $result_paciente = "SELECT * FROM usuario WHERE id=$id";
    $resultado_paciente = $pdo->prepare($result_paciente);
    $resultado_paciente->execute();
    $row_paciente = $resultado_paciente->fetch(PDO::FETCH_ASSOC);
    ?>
    
    <div class="container">
      <h1>Editar Registro</h1>
      <form action="saveEditar.php" method="post">
      
      <input type="hidden" name="id"  value="<?php if(isset($row_paciente['id'])) {echo $row_paciente['id']; } ?>">
        </div>

        <div class="col-4">
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" value="<?php if(isset($row_paciente['nome'])) {echo $row_paciente['nome']; } ?>" class="form-control">
        </div>        
        <div class="col-4">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" value="<?php if(isset($row_paciente['cpf'])) {echo $row_paciente['cpf']; } ?>" class="form-control">
        </div>
        <div class="col-4">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="<?php if(isset($row_paciente['email'])) {echo $row_paciente['email']; } ?>" class="form-control">
        </div>
        
        <input name="editar" type="submit" value="Editar">
      </form>
    </div>
  </body>
</html>