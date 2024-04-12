<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ($email == 'aluno@dominio.com' and $senha == '12345'){
            echo("Login realizado com sucesso!");
        }else{
            echo("Login incorreto!");
        }
        
    }
?>