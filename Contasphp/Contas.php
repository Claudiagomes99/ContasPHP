<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="Style.css">
<title>Lista de Exercícios PHP</title>
</head>
<body>

<!-- EXERCÍCIO 1 -->
<h2>1 - Tabuada</h2>

<form method="post">
    Digite um número:
    <input type="number" name="tabuada">
    <button type="submit" name="btn1">Mostrar</button>
</form>

<?php
if(isset($_POST['btn1'])){
    $num = $_POST['tabuada'];

    for($i = 1; $i <= 10; $i++){
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

<hr>

<!-- EXERCÍCIO 2 -->
<h2>2 - Desconto</h2>

<form method="post">
    Preço:
    <input type="number" step="0.01" name="preco">

    Desconto (%):
    <input type="number" name="desconto">

    <button type="submit" name="btn2">Calcular</button>
</form>

<?php
if(isset($_POST['btn2'])){
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];

    $valorDesconto = ($preco * $desconto) / 100;
    $valorFinal = $preco - $valorDesconto;

    echo "Valor final: R$ $valorFinal";
}
?>

<hr>

<!-- EXERCÍCIO 3 -->
<h2>3 - Aprovado ou Reprovado</h2>

<form method="post">
    Nota 1:
    <input type="number" step="0.1" name="n1">

    Nota 2:
    <input type="number" step="0.1" name="n2">

    Nota 3:
    <input type="number" step="0.1" name="n3">

    Nota 4:
    <input type="number" step="0.1" name="n4">

    <button type="submit" name="btn3">Verificar</button>
</form>

<?php
if(isset($_POST['btn3'])){
    $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'] + $_POST['n4']) / 4;

    echo "Média: $media <br>";

    if($media >= 5){
        echo "Aprovado";
    }else{
        echo "Reprovado";
    }
}
?>

<hr>



<!-- EXERCÍCIO  -->
<h2>4 - Soma dos Quadrados</h2>

<form method="post">
    Número 1:
    <input type="number" name="num1">

    Número 2:
    <input type="number" name="num2">

    Número 3:
    <input type="number" name="num3">

    <button type="submit" name="btn5">Calcular</button>
</form>

<?php
if(isset($_POST['btn5'])){
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];

    $soma = ($n1*$n1) + ($n2*$n2) + ($n3*$n3);

    echo "Resultado: $soma";
}
?>

<hr>

<!-- EXERCÍCIO 5 -->
<h2>5 - Salário Líquido</h2>

<form method="post">
    Salário bruto:
    <input type="number" step="0.01" name="salario">

    <button type="submit" name="btn6">Calcular</button>
</form>

<?php
if(isset($_POST['btn6'])){
    $salario = $_POST['salario'];

    $gratificacao = $salario * 0.10;
    $imposto = $salario * 0.20;

    $liquido = $salario + $gratificacao - $imposto;

    echo "Salário líquido: R$ $liquido";
}
?>

<hr>

<!-- EXERCÍCIO 6 -->
<h2>6 - Média do Aluno</h2>

<form method="post">
    Nota 1:
    <input type="number" step="0.1" name="nota1">

    Nota 2:
    <input type="number" step="0.1" name="nota2">

    Nota 3:
    <input type="number" step="0.1" name="nota3">

    Nota 4:
    <input type="number" step="0.1" name="nota4">

    <button type="submit" name="btn7">Calcular</button>
</form>

<?php
if(isset($_POST['btn7'])){
    $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'] + $_POST['nota4']) / 4;

    echo "Média: $media <br>";

    if($media >= 6){
        echo "Aprovado";
    }
    elseif($media < 3){
        echo "Retido";
    }
    else{
        echo "Exame";
    }
}
?>

<hr>

<!-- EXERCÍCIO 7 -->
<h2>7 - Maior e Menor Número</h2>

<form method="post">
    Número 1:
    <input type="number" name="v1">

    Número 2:
    <input type="number" name="v2">

    Número 3:
    <input type="number" name="v3">

    <button type="submit" name="btn8">Verificar</button>
</form>

<?php
if(isset($_POST['btn8'])){
    $maior = max($_POST['v1'], $_POST['v2'], $_POST['v3']);
    $menor = min($_POST['v1'], $_POST['v2'], $_POST['v3']);

    echo "Maior: $maior <br>";
    echo "Menor: $menor";
}
?>

<hr>

<!-- EXERCÍCIO 8 -->
<h2>8 - Soma dos Ímpares</h2>

<form method="post">
    Valor inicial:
    <input type="number" name="inicio">

    Valor final:
    <input type="number" name="fim">

    <button type="submit" name="btn9">Somar</button>
</form>

<?php
if(isset($_POST['btn9'])){
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $soma = 0;

    for($i = $inicio; $i <= $fim; $i++){
        if($i % 2 != 0){
            $soma += $i;
        }
    }

    echo "Soma dos ímpares: $soma";
}
?>

<hr>

<!-- EXERCÍCIO 10 -->
<h2>10 - Par ou Ímpar</h2>

<form method="post">
    Digite um número:
    <input type="number" name="numero">

    <button type="submit" name="btn10">Verificar</button>
</form>

<?php
if(isset($_POST['btn10'])){
    $num = $_POST['numero'];

    if($num % 2 == 0){
        echo "Número Par";
    }else{
        echo "Número Ímpar";
    }
}
?>

<hr>

<!-- EXERCÍCIO 10 -->
<h2>10 - Calculadora</h2>

<form method="post">
    Número 1:
    <input type="number" step="0.01" name="n1calc">

    Operador:
    <input type="text" name="operador">

    Número 2:
    <input type="number" step="0.01" name="n2calc">

    <button type="submit" name="btn11">Calcular</button>
</form>

<?php
if(isset($_POST['btn11'])){
    $n1 = $_POST['n1calc'];
    $n2 = $_POST['n2calc'];
    $op = $_POST['operador'];

    switch($op){
        case "+":
            echo $n1 + $n2;
            break;

        case "-":
            echo $n1 - $n2;
            break;

        case "*":
            echo $n1 * $n2;
            break;

        case "/":
            echo $n1 / $n2;
            break;

        default:
            echo "Operador inválido";
    }
}
?>

<hr>


</body>
</html>