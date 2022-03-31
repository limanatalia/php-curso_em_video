<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preco do produto é R$ ". number_format($preco, 2);
        $preco = $preco += $preco*10/100;
        echo "E o novo preco do produto com 10% de aumento sera " . number_format($preco, 2);
    ?>

</body>
</html>