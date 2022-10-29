<?php
session_start();
include_once 'config.php';

//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE

$editar = filter_input(INPUT_POST, 'editar', FILTER_SANITIZE_STRING);
if($editar){
    //Receber os dados do formulário
    
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        
    //Inserir no BD

    $result_paciente = "UPDATE usuario SET nome=:nome, cpf=:cpf, email=:email WHERE id=$id";
    
    $update_paciente = $pdo->prepare($result_paciente);
    $update_paciente->bindParam(':nome', $nome);
    $update_paciente->bindParam(':cpf', $cpf);
    $update_paciente->bindParam(':email', $email);
    
    
    if($update_paciente->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem editada com sucesso</p>";
        header("Location: listarPaciente.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi editada com sucesso</p>";
        header("Location: index.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi editada com sucesso</p>";
    header("Location: index.php");
}
?>