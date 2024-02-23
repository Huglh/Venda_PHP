<?php

//variaveis
$parcelas=$_POST["parcelas"];
$valor=2429.10;
$cont=1;
//saida para o usuario(cabechalo)
echo ("<img src='img/produto_principal.png' alt='produto'>");
echo("<div class='informacoesphp'><h1>"."Máquina de Bebidas Brastemp B.blend com purificador - Vermelho -110V"."R$ 2429,00");
echo ("<br>"."Parcelado em: ".$parcelas);
echo ("<br>"."N°"." "."valor".""."<br>");


//calculos das parcelas
for($cont=1;$cont <= $parcelas; $cont++){


     if($cont > 10)
     {
        echo ("<h1>".$cont." ".number_format((($valor/$cont)*2.29),2).""."<br>");
    }
     else{
         echo ("<h1>".$cont." ".number_format(($valor/$cont),2).""."<br>");
     }
}
// saida para o usuario(rodape)
echo("<br><br><button><a href='index.html'>Voltar</a></button></h1>")
?>
<!doctype html>
<html lang="port-br">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>

</body>
</html>
