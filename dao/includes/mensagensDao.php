<?php
require_once "../connection/Connection.php";

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $msg = addslashes($_POST['msg']);

    $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data = NOW()");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":msg", $msg);
    $sql->execute();

    
    Header("Location: ../../index.php");
}

?>