<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>

</head>

<body>
<?php

/*
  // Forma simples 
$arquivo=fopen("visitas.txt","r");
//echo $linhas = count(file('visitas.txt'));
 while(!feof($arquivo)){ // Enquando  nao estiver no final do arquixo

   echo fgets($arquivo,50); // retrorna a linha 0 do arquivo ate 50 caracteres
   echo "<br/>".fgets($arquivo,500);// retrorna a linha 1 do arquivo ate 500 caracteres 
 echo fgets($arquivo,500);// retrorna a linha 1 do arquivo ate 500 caracteres 

   echo "</br> <br/>";   
                      
 }

fclose($arquivo); 
*/


// Forma avançada 
echo "<h2>Mensagens</h2>";
$names=file('visitas.txt');
// To check the number of lines

foreach($names as $name)
{

if($name == "\r\n"){
echo "<hr>";
} 
echo $name.'<br>';
}


?>
<hr>
<a href="index.html" target="_self">Voltar</a>
  
</body>

</html>