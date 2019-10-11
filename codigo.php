<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <title>Criptografia</title>
</head>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Criptografias do texto que você digitou</h1>
            </div>    
        </div>
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">


<?php

    $senha = $_POST['senha'];

    echo '<h3>'."O texto que você digitou foi: ". $senha;
    echo "<br>";
    echo "<br>";
    echo "A texto $senha em md5 fica: "  .md5($senha);
    echo "<br>";
    echo "<br>";
    echo "A texto $senha em sha1 fica: " .sha1($senha);
    echo "<br>";
    echo "<br>";
    echo "A texto $senha em base64 fica: " .base64_encode($senha);
    echo "<br>";
    echo "<br>";
    echo "A texto $senha em hash fica: " .hash('haval256,5',$senha);
    echo "<br>";
    echo "<br>";
    echo "A texto $senha em cript fica: " .crypt(''.$senha); "</h3>";
?>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="codigo.html"><button type="button" class="btn btn-block btn-danger">Voltar a página inical</button></a>
        </div>
    </div>
</div>        
</body>
</html>