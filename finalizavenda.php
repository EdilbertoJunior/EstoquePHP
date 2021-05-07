<?php

include('conexao.php');


$idprod = $_POST['idprod'];
$qtdvendida = $_POST['qtdvendida'];
$estoque  = $_POST['estoque'];




$qtdatualizada = $estoque - $qtdvendida;



if($qtdatualizada >0){
    
$sql = "UPDATE tblprodutos set estoque='$qtdatualizada'
where idprod='$idprod'";

mysqli_query($conn,$sql);
header("Location:index.php");


} else {
echo  "QUANTIDADE INEXISTENTE NO ESTOQUE. <a href='index.php'>VOLTAR</a>";

}


