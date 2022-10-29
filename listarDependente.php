<?php
include_once './config.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebClinica | PH</title>
</head>
<body>
<h1>LISTAR DEPENDENTES</h1>
<ul>
   <li><a href="index.php">HOME</a></li>
   <br>
   <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
   <br>
   <li><a href="cadastrarDependente.php">Cadastrar dependente</a></li>
   <br>
   <li><a href="listarPaciente.php">Pacientes</a></li>
   
   </ul>
<?php

$resulta_usu = "SELECT * FROM usuario";
$resulta_usu = $pdo->prepare($resulta_usu);
$resulta_usu->execute();

while($row_usu = $resulta_usu->fetch(PDO::FETCH_ASSOC)){
    echo"ID: " .$row_usu['nome']."<br>";

$result_paciente = "SELECT * FROM dependente ORDER BY id ASC";

$result_paciente = $pdo->prepare($result_paciente);
$result_paciente->execute();

while($row_paciente = $result_paciente->fetch(PDO::FETCH_ASSOC)){
    
    echo"ID: " .$row_paciente['id']."<br>";
    echo"Nome: " .$row_paciente['nome']."<br>";
    echo"CPF: " .$row_paciente['cpf']."<br>";    
    echo"<a href='editarPaciente.php?id=".$row_paciente['id']."'>Editar</a>";
    echo" ";    
    echo"<a href='deletar.php?id=".$row_paciente['id']."'>Apagar</a>";
    
    echo"<hr>";
    echo"<br>";
}
}

?>

</body>
</html>