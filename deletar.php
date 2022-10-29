<?php
session_start();
ob_start();
include_once './config.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
var_dump($id);

if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}

$query_usuario = "SELECT id FROM usuario WHERE id = $id LIMIT 1";
$result_usuario = $pdo->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $query_del_usuario = "DELETE FROM usuario WHERE id = $id";
    $apagar_usuario = $pdo->prepare($query_del_usuario);

    if ($apagar_usuario->execute()) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado com sucesso!</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não apagado com sucesso!</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
}







if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}

$query_dependente = "SELECT id FROM dependente WHERE id = $id LIMIT 1";
$result_dependente = $pdo->prepare($query_dependente);
$result_dependente->execute();

if (($result_dependente) AND ($result_dependente->rowCount() != 0)) {
    $query_dependente = "DELETE FROM dependente WHERE id = $id";
    $apagar_dependente = $pdo->prepare($query_del_usuario);

    if ($apagar_dependente->execute()) {
        $_SESSION['msg'] = "<p style='color: green;'>Usuário apagado com sucesso!</p>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não apagado com sucesso!</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
}