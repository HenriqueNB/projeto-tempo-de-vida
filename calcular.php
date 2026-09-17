<?php
$nome = $_POST['tnome'];
$anoNasc = (int) $_POST['tano'];
$anoAtual = (int) date('Y');

// Processamento
$idade = $anoAtual - $anoNasc;

// Dias, horas e minutos vividos (aproximado)
$diasVividos = $idade * 365;
$horasVividas = $diasVividos * 24;
$minutosVividos = $horasVividas * 60;

// Médias
$bpmMedio = 75;              // batimentos por minuto
$respiracaoPorMinuto = 17;   // respirações por minuto

// Totais já realizados
$batimentosTotais = $minutosVividos * $bpmMedio;
$respiracoesTotais = $minutosVividos * $respiracaoPorMinuto;

// Expectativa de vida e restantes
$expectativaVida = 95;
$anosRestantes = $expectativaVida - $idade;
$minutosRestantes = $anosRestantes * 365 * 24 * 60;
$batimentosRestantes = $minutosRestantes * $bpmMedio;
$respiracoesRestantes = $minutosRestantes * $respiracaoPorMinuto;

// Saída
$saida = "";
$saida .= "<h2>Olá, $nome!</h2>";
$saida .= "<p>Sua idade atual é: <strong>$idade anos</strong></p>";
if ($idade < 18) {
    $saida .= "<p>Você ainda é <strong>menor</strong> de idade!</p>";
} else {
    $saida .= "<p>Você já é <strong>maior</strong> de idade!</p>";
}
$saida .= "<p>Você já viveu aproximadamente: <strong>" . number_format($diasVividos, 0, ',', '.') . " dias</strong></p>";
$saida .= "<p>Considerando uma média de $bpmMedio batimentos por minuto, seu coração já bateu aproximadamente: <strong>" . number_format($batimentosTotais, 0, ',', '.') . " vezes</strong></p>";
$saida .= "<p>Considerando uma média de $respiracaoPorMinuto respirações por minuto, você já respirou aproximadamente: <strong>" . number_format($respiracoesTotais, 0, ',', '.') . " vezes</strong></p>";
$saida .= "<hr>";
$saida .= "<p>Considerando uma expectativa de vida de $expectativaVida anos, ainda restam aproximadamente:</p>";
$saida .= "<ul>";
$saida .= "<li><strong>$anosRestantes anos</strong></li>";
$saida .= "<li><strong>" . number_format($batimentosRestantes, 0, ',', '.') . " batimentos cardíacos</strong></li>";
$saida .= "<li><strong>" . number_format($respiracoesRestantes, 0, ',', '.') . " respirações</strong></li>";
$saida .= "</ul>";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Tempo de vida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo $saida; ?>
</body>
</html>