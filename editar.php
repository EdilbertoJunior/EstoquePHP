<?php
include('conexao.php');
$idprod = $_GET['idprod'];


$sql="select * from tblprodutos where idprod='$idprod'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idprod = $linha['idprod'];
$produto = $linha['produto'];
$estoque = $linha['estoque'];
$exmax = $linha['exmax'];
$exmin = $linha['exmin'];

?>
<form action="updatestoque.php" method="post">
ID PROD  <input type="text" name="idprod" value="<?php echo $idprod ?>"readonly>
PRODUTO  <input type="text" name="produto" value="<?php echo $produto ?>">
ESTOQUE  <input type="text" name="estoque" value="<?php echo $estoque ?>">
ESTOQUE MAX. <input type="text" name="exmax" value="<?php echo $exmax ?>">
ESTOQUE  MIN. <input type="text" name="exmin" value="<?php echo $exmin ?>">
<input type="submit" value="Atualizar">