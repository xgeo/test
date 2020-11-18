<?php

$valor = 100;
$outro_valor = 200;

if (isset($_POST) && isset($_POST['value_form'])) {
    $valor_form = (int) $_POST['value_form'];
    if ($valor == $valor_form) {
        echo "SUCCESSSSO!!!!";
    } else {
        echo "xaaabLLALAAAAUU!!!!";
    }
}
?>

<html>
<head>
    <title>
        ENTENDENDO ESTRUTURAS DE CONDIÇÃO
    </title>
</head>
<body>

    <form method="POST" action="">
        <input type="number" value="" name="value_form">
        <button>CHUTA UM NÚMERO JOVI!</button>
    </form>

</body>

</html>
