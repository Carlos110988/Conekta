<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conecta SPEI</title>

<style>
.normal{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;}
</style>

</head>

<?php
	$clabe 		= @$_POST['clabe'];
	$bank 		= @$_POST['bank'];
    $expires 	= @$_POST['expires'];
    $monto 		= @$_POST['monto'];
    $concepto 	= @$_POST['concepto'];
?>

<body>
<center>
<table width="800" border="0" cellpadding="10" cellspacing="0" class="normal">
<tr>
    <td align="center"><strong>PAGO SPEI</strong></td>
    </tr>
     <tr>
    <td align="center">Imprime este comprobante, Usted podrán pagar por medio de transferencia electrónica o directamente en sucursales bancarias con efectivo o cheque</td>
    </tr>
  <tr>
    <td align="center"><img src="http://www.banxico.org.mx/sistemas-de-pago/servicios/sistema-de-pagos-electronicos-interbancarios-spei/images/SPEI.jpg" /></td>
  </tr>
  <tr>
    <td align="center">Banco: <?php echo $bank ?></td>
    </tr>
  <tr>
    <td align="center">CLABE Interbancaria: <?php echo $clabe ?></td>
    </tr>
  <tr>
    <td align="center">Fecha de vencimiento:: <?php echo date('d-m-Y',$expires) ?></td>
    </tr>
  <tr>
    <td align="center">Monto a pagar: $<?php echo $monto ?> M.N.</td>
    </tr>
    <tr>
    <tr>
    <td align="center">Concepto: <?php echo $concepto ?></td>
    </tr>
    <tr>
    <td align="center"><p>
      <input type="button" name="button" id="button" value="Imprimir" onclick="window.print()" />
    </p></td>
    </tr>
</table>
</center>
</body>
</html>