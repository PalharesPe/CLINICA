<?php
session_start();
include_once './config.php';
$id =filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CADASTRAR DEPENDENTE</title>
    
  </head>
  <body>
  <h1>CADASTRAR DEPENDENTE</h1>
  <ul>
   <li><a href="index.php">HOME</a></li>
   <br>
   <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
   <br>
   <li><a href="cadastrarDependente.php">Cadastrar dependente</a></li>
   <br>
   <li><a href="listarPaciente.php">Pacientes</a></li>
   
   </ul>
    <div class="container">
      
    
      <form action="addDependente.php" method="post">
        <div class="col-4">
        <input type="hidden" name="id"  value="<?php if(isset($row_paciente['id'])) {echo $row_paciente['id']; } ?>">
        </div>
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div> 
        <br>       
        <div class="col-4">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" class="form-control">
        </div>
        <br>         
        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>

      </form>
    </div>
  </body>
</html>