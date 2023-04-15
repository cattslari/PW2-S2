<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    <section>
        <table class="table table-striped">
            <thead>
            <tr>
            <tr>
        <td class="table-primary">id</td>
        <td class="table-secondary">nome</td>
        <td class="table-success">email</td>
        <td class="table-danger">assunto</td>
        <td class="table-warning">mensagem</td>
        </tr>			
            </tr>
            </thead>
            <tbody>
            <?php
                $stmt = $pdo->prepare("select * from tbcontato");	
                $stmt ->execute();
                
                while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                
                  echo "<tr class='celula'>";
                        echo "<td> $row[0] </td>";						
                        echo "<td> $row[1] </td>";						
                        echo "<td> $row[2] </td>";						
                        echo "<td> $row[3] </td>";											
                        echo "<td> $row[4] </td>";					
                    echo "</tr>";
                 
                }
        
                
            ?>
            
            </tbody>
        </table>
    </section>

</body>
</html>