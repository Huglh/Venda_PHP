<?php
// Variáveis
$parcelas = isset($_POST["parcelas"]) ? intval($_POST["parcelas"]) : 1;
$valor = 2429.10;

// Cálculo das parcelas
$parcelasOutput = '';
for ($cont = 1; $cont <= $parcelas; $cont++) {
    $parcelaValor = ($cont > 10) ? ($valor / $cont) * 2.29 : $valor / $cont;
    $parcelasOutput .= "<p>$cont " . number_format($parcelaValor, 2) . "</p>";
}

// Saída para o usuário
$htmlOutput = <<<HTML
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <img src='img/produto_principal.png' alt='produto'>
    <div class='informacoesphp'>
        <h1>Máquina de Bebidas Brastemp B.blend com purificador - Vermelho - 110V R$ 2429,00</h1>
        <p>Parcelado em: $parcelas</p>
        <p>N° valor</p>
        $parcelasOutput
        <br><br>
        <button><a href='index.html'>Voltar</a></button>
    </div>
</body>
</html>
HTML;

// Saída final
echo $htmlOutput;
?>
