<?php include('cabecalho.php') ?>

<h1>Fale conosco:</h1> <br>

<form action="resultado" method="post">
    Nome:  <br>
    <input type="text" name="nome" > <br> 
    <br>
    Mensagem:  <br>
    <textarea name="mensagem" cols="30" rows="3"></textarea> <br>
    <br>
    <input type="submit" value="Enviar">
</form>

<?php include('footer.php') ?>