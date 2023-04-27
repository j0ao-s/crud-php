<?php
    require 'config.php';

    $razaoSocial = filter_input(INPUT_POST, 'razaoSocial');
    $nomeFantasia = filter_input(INPUT_POST, 'nomeFantasia');
    $cnpj = filter_input(INPUT_POST, 'cnpj');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $telefone = filter_input(INPUT_POST, 'telefone');

    //este if verifica se foi inserido algo na variável

    if($razaoSocial && $nomeFantasia && $cnpj && $endereco && $telefone) {
        
        //valida o CNPJ
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE cnpj = :cnpj");
        $sql->bindValue(':cnpj', $cnpj);
        $sql->execute();

        if($sql -> rowCount() === 0){  //valída

            $sql = $pdo->prepare("INSERT INTO usuarios (razaoSocial, nomeFantasia, cnpj, endereco,telefone) VALUES (:razaoSocial, :nomeFantasia, :cnpj, :endereco, :telefone)");
    
            $sql->bindValue(':razaoSocial', $razaoSocial);
            $sql->bindValue(':nomeFantasia', $nomeFantasia);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->bindValue(':endereco', $endereco);
            $sql->bindValue(':telefone', $telefone);
    
            $sql->execute();
            header("Location: index.php");
            exit;
    
            
        } else {
            header("Location: cadastrar.html");
            exit;
        }


    } else {
        header("Location: cadastrar.html");
        exit;
    }

    /*Este código é responsável por receber os dados de um formulário de cadastro enviado pelo usuário, filtrar esses dados usando a função filter_input e, em seguida, inseri-los em um banco de dados MySQL.*/
?>