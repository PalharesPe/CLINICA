<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Novo(a) Usuário(a)</title>
    
  </head>
  <body>    
    <div class="container">
      <h1>CADASTRAR PACIENTE</h1>
      <ul>
   <li><a href="index.php">HOME</a></li>
   <br>
   <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
   <br>
   <li><a href="cadastrarDependente.php">Cadastrar dependente</a></li>
   <br>
   <li><a href="listarPaciente.php">Pacientes</a></li>   
   </ul>
   
      <form action="addPaciente.php" method="post">
        <div class="col-4">
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div>   
        <br>     
        <div class="col-4">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" class="form-control">
        </div>
        <br>
        <div class="col-4">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>

        <br><br>
        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>

      </form>
    </div>
  </body>
</html>