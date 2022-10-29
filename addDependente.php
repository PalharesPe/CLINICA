<?php
require_once 'config.php';
// Conectar ao BD (com o PHP)
$id =filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($_POST)) {
  
  // Obter as informações do formulário ($_POST)
  try {
    // Preparar as informações
      // Montar a SQL (pgsql)
      $sql = "INSERT INTO dependente (nome, cpf, iddependente) VALUES (:nome, :cpf, :iddependente=$id )";

      // Preparar a SQL (pdo)
      $stmt = $pdo->prepare($sql);

      // Definir/organizar os dados p/ SQL
      $dados = array(
        
        ':nome' => $_POST['nome'],
        ':cpf' => $_POST['cpf'],
        ':iddependente' => $_POST['iddependente'],
            
        
        
        
      );

      // Tentar Executar a SQL (INSERT)
      // Realizar a inserção das informações no BD (com o PHP)
      if ($stmt->execute($dados)) {
        header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
      }
  } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: index.php?msgErro=Falha ao cadastrar...");
  }
}
else {
  header("Location: index.php?msgErro=Erro de acesso.");
}
die();

// Redirecionar para a página inicial (login) c/ mensagem erro/sucesso
 ?>