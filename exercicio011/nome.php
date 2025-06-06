<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = htmlspecialchars($_POST["nome"]); 

        echo "<h1>Olá, $nome!</h1>";
    } else {
        echo "<p>Por favor, envie o formulário primeiro.</p>";
    }
?>