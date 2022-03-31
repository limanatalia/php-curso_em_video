<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento</title>
    </head>
<body>
<!--adicionar "?aa=" + "ano" na URL para funcionar-->
    <?php
        $atual = $_GET["aa"];  //Essa linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
    ?>
</body>
</html>