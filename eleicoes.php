<!DOCTYPE html>
<html>
<head>
<title>Eleições</title>
</head>
<body>
<!--adicionar "?an=" + "ano" na URL para funcionar-->
    <?php 
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo " Quem nasceu em $ano tem $idade anos";
        $tipo = ($idade>= 18 && $idade<=65) ? "  OBRIGATORIO" : "  NÃO OBRIGATORIO";
        echo "<br/>E dessa forma o seu voto é: $tipo";
    ?>  
</body>
</html>