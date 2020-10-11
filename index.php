<?php
    require_once "./dao/connection/Connection.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
</head>
<body>
    sistema de comentarios

    <fieldset>
        <form action="dao/includes/mensagensDao.php" method="post">
            Nome:
            <input type="text" name="nome"> <br><br>
            Mensagem: <br>
            <textarea name="msg"></textarea> <br><br>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>
    <br><br>
    <table>
    <?php
        $sql = "SELECT * FROM mensagens";
        $sql = $pdo->query($sql);

        if($sql->rowCount()>0){
            foreach($sql->fetchAll() as $msg):
                ?>
                <strong><?php echo $msg['nome']; ?></strong><br>
                <br>
                <?php echo $msg['msg'];?>
                <hr>
                <br>
                                     
               
             
            <?php    
            endforeach;
          
        }        
    
    ?>
    </table>
</body>
</html>