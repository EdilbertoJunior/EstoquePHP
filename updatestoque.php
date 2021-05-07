<?php
include('conexao.php');
$idprod = $_POST['idprod'];
$produto = $_POST['produto'];
$estoque = $_POST['estoque'];
$exmax = $_POST['exmax'];
$exmin = $_POST['exmin'];
$qtdvendida = $_POST['qtdvendida'];

$sql = "UPDATE tblprodutos set produto='$produto', estoque='$estoque', exmax='$exmax', exmin='$exmin', qtdvendida='$qtdvendida'
 where idprod='$idprod'";

$qry = mysqli_query($conn,$sql);

//var_dump($qry);
//die();

if($qry){
    header("Location:index.php");
} else {
    echo "Deu ruim...Bobão <a href='index.php'>Voltar</a>";
}

