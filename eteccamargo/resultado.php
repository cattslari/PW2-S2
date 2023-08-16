<?php include('cabecalho.php') ?>

<?php 

    $nome = $_POST["nome"];
    $mensagem = $_POST["mensagem"];

    echo "<div class='resultado'>Seu nome é: $nome <br> Sua mensagem é: $mensagem </div>" ;

?>

<?php include('footer.php') ?>