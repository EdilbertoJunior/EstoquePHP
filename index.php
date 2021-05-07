<?php
 include('conexao.php');
 $sql = "select * from tblprodutos";
 $qry = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estoque</title>
</head>
<body>
<h1>Estoque</h1>
<hr>
    <a href=""></a>
<br>
<br>
<br>
     <table border='1'>
            <tr>
                    <td>ID PROD.</td>
                    <td>PRODUTO</td>
                    <td>ESTOQUE</td>
                    <td>ESTOQUE MAX.</td>
                    <td>ESTOQUE MIN.</td>
                    <td>AÇÕES</td>
            </tr>

    <?php

        while ($linha=mysqli_fetch_array($qry)){
            
            echo "<tr>";
             echo "<td>".$linha['idprod']."</td>";
             echo "<td>".$linha['produto']."</td>";
             echo "<td>".$linha['estoque']."</td>";
             echo "<td>".$linha['exmax']."</td>";
             echo "<td>".$linha['exmin']."</td>";
             echo "
             <td> 
                <a href='editar.php?idprod={$linha["idprod"]}'>Editar </a>  |
                <a href='excluir.php?idprod={$linha["idprod"]}'>Excluir </a> |
                <a href='vendas.php?idprod={$linha["idprod"]}'>Vender </a>
                
             </td>
            ";
            echo "</tr>"; 
        }

    ?>
    </table>
    <hr>

</body>
</html>