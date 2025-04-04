<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dados</title>
</head>
<body>
 
<h1>Dados Recebidos</h1>
 
<?php
    echo "Nome: ";
    echo $_GET['nome'];
    echo "<br>"; 
 
    echo "Email: ";
    echo $_GET['email'];
    echo "<br>";
 
    echo "Nascimento: ";
    echo $_GET['nascimento'];
    echo "<br>";
 
    echo "Idade: ";
    echo $_GET['idade'];
    echo "<br>";
 
    echo "Senha: ";
    echo $_GET['senha'];
    echo "<br>";
 
    echo "SO: ";
    echo $_GET['so'];
    echo "<br>";
 
    echo "Tecnologias: ";
    echo implode(', ', $_GET['tecnologias']);
    echo "<br>";
 
    echo "Experiência: ";
    echo $_GET['experiencia'];
    echo "<br>";
 
    echo "<hr>";
    echo "Conteúdo completo de \$_GET:<br>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
?>
 
<br>
<a href="form.php">Voltar</a>
 
</body>
</html>