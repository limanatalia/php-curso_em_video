<!DOCTYPE html>
<html>
<head>
<title>Situações</title>
</head>
<body>
<!--adicionar ?n1= + "nota" &n2= + "nota" na URL para funcionar-->
    <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A médio entre $nota1 e $nota2 é $m";
        $sit = ($m<6)?"<br/>REPROVADO" : "<br/>APROVADO";
        echo "<br/>A Situação do aluno é $sit"
    ?>  
</body>
</html>