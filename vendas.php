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
<form action="finalizavenda.php" method="post">
ID Produto     <input type="text" name="idprod" value="<?php echo $idprod ?>"readonly>
Produto   <input type="text" name="produto" value="<?php echo $produto ?>">
Quantidade Estoque   <input type="text" name="estoque" value="<?php echo $estoque ?>">
Quantidade Vendida   <input type="text" name="qtdvendida">
<input type="submit" value="VENDER">