<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //and $senha == '12345'
        if ($email == 'aluno@dominio.com' and md5($senha) == 'e10adc3949ba59abbe56e057f20f883e'){
            echo("Login realizado com sucesso! a senha digitada é: ".$senha);
            echo("<p>A senha criptografada em md5 é: ".md5($senha));
        }else{
            echo("Login incorreto!");
        }

        # LOGIN
        /*try {
            $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $login = "SELECT usuarios.nome FROM usuarios WHERE email = :param1 && senha = :param2;";
            
            $login = $conn->prepare($login);

            $login->bindValue("param1", $email);
            $login->bindValue("param2", $senha);

            $login->execute();

            $result = $login->fetch();

            if (isset($result) and $result != false){
                header('Content-Type: text/html; charset=utf-8');
                echo "Login efetuado com sucesso!, seja bem vindo <b>".mb_convert_case(($result['nome']), MB_CASE_TITLE, 'UTF-8');
            }else{    
                echo "Falha ao realizar o login!";
            }

            $conn = null;
            exit();
        } catch(PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
        exit();*/
        
    }
?>
