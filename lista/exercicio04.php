<?php
/*Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.*/
$n1 = (empty($_POST["n1"])) ? "" : $_POST["n1"];
$n2 = (empty($_POST["n2"])) ? "" : $_POST["n2"];
$operacao = (empty($_POST["op"])) ? "" : $_POST["op"];
$resultado = "";
switch($operacao){
    case "adicao":
        $resultado = $n1 + $n2;
        break;
    case "subtracao":
        $resultado = $n1 - $n2;
        break;
    case "multiplicacao":
        $resultado = $n1 * $n2;
        break;
    case "divisao":
        $resultado = $n1 / $n2;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="op">Operação</label><br>
        <select id="op" name="op">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br>
        <label for="n1">Número 1:</label><br>
        <input type="text" id="n1" name="n1"><br>
        <label for="n2">Número 2:</label><br>
        <input type="text" id="n2" name="n2"><br>
        <input type="submit" value="Calcular">
    </form>
    <h1>Resultado:</h1>
    <h2><?php echo $resultado;?></h2>
</body>
</html>
<?php
?>