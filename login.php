<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        # LOGIN
        try {
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
        exit();
        
    }
?>
