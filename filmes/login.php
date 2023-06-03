
<?php include("cabecalho.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Faça seu login</h1>

    <form method="post">
        <input type="text" name="txUsuario" placeholder="E-mail" /> <br>
        <input type="password" name="txSenha" placeholder="Senha" /> <br>
        <input type="submit" value="Login" name="btEntrar"/> 

        <?php

    include("conexao.php"); 
    $requisito = true;

        if($requisito){
        if(isset($_POST['btEntrar'] )) {

        $user = $_POST['txUsuario'];
        $pass = $_POST['txSenha'];


        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE emailUsuario = :email AND senhaUsuario = :senha");
        $stmt->bindParam(':email', $user);
        $stmt->bindParam(':senha', $pass);
        $stmt ->execute();

        $row = $stmt ->fetch(PDO::FETCH_BOTH);


     if($row == null){
        echo (" Usuario e/ou senha inválidos");
        }else{
        echo("usuario logado");
        header("location:index.php");
        }
    
        }   
    }
    ?> 
    </form>
    <?php include("rodape.php"); ?>
   
         
    
</body>
</html>