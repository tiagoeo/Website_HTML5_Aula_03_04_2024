<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //and $senha == '12345'
        if ($email == 'aluno@dominio.com' and md5($senha) == 'e10adc3949ba59abbe56e057f20f883e'){
            echo("Login realizado com sucesso! a senha digitada é: ".$senha);
            echo("<p>A senha criptografada em md5 é: ".md5($senha));
        }else{
            echo("Login incorreto!");
        }
        
    }
?>
