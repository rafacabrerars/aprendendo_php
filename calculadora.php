<?php

// print_r($_POST);
$num1 = (int) $_POST["numero1"];
$operacao = trim($_POST["operacao"]);
$num2 = (int) $_POST["numero2"];
switch ($operacao) {
    case "+":
        $soma = $num1 + $num2;
        echo "$num1 + $num2 = $soma";
        break;
    case "-":
        $subtracao = $num1 - $num2;
        echo "$num1 - $num2 = $subtracao";
        break;
    case "*":
        $multiplicacao = $num1 * $num2;
        echo "$num1 * $num2 = $multiplicacao";
        break;
    case "/": 
        if ($num1==0 or $num2==0){
            echo "nao permitido ZERO";
        }else {
            $divisao = $num1 / $num2;
            echo "$num1 / $num2 = $divisao";
        }
        break;
    default:
        echo "por favor utilize operadores validos ex: +, -, *, /";
}

// print_r($_POST);
// $num1 =(int) $_POST["numero1"];
// $operacao = trim($_POST["operacao"]);
// $num2 = (int) $_POST["numero2"];
// if ($operacao == "+") {
//     $soma = $num1 + $num2;
//     echo "$num1 + $num2 = $soma";
// } elseif ($operacao == "-") {
//     $subtracao = $num1 - $num2;
//     echo "$num1 - $num2 = $subtracao";
// } elseif ($operacao == "*") {
//     $multiplicacao = $num1 * $num2;
//     echo "$num1 * $num2 = $multiplicacao";
// } elseif ($operacao == "/") {
//     $divisao = $num1 / $num2;
//     echo "$num1 / $num2 = $divisao";
// } else {
//    echo "presta atenção rapaz.";
// }

