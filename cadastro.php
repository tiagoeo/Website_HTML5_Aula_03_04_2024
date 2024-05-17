<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        
        $nome = $_POST['nomecadastro'];
        $email = $_POST['emailcadastro'];
        $senha = $_POST['senhacadastro'];

        # LOGIN
        try {
            $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $cadastro = "INSERT INTO usuarios (nome, email, senha) VALUES (:param1, :param2, :param3);";
                
            $cadastro = $conn->prepare($cadastro);

            $cadastro->bindValue("param1", $nome);
            $cadastro->bindValue("param2", $email);
            $cadastro->bindValue("param3", $senha);

            $cadastro->execute();

            if (isset($cadastro) and $cadastro != false){
                echo "Cadastro efetuado com sucesso!";
            }else{    
                echo "Falha ao realizar o cadastro!";
            }

            $conn = null;
            exit();
        } catch(PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
        }
        exit();
        
    }
?>
