<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>

</head>

<body>
<?php

$nome=$_POST['f_nome'];
$msg=$_POST['f_msg'];
$conteudo="\r\n"."<h3 style='color:#00f'>".$nome."</h3>"."\r\n".$msg."\r\n";
$arquivo=fopen("visitas.txt","a");
fwrite($arquivo,$conteudo);
  //echo "Mensagem gravada :$conteudo";
 echo "Mensagem enviada <br/>";
fclose($arquivo);
?>
<a href="index.html" target="_self">Voltar</a>

</body>

</html>