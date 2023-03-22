<?php
    if(!empty($_POST)) {
        require('include/connection.php');

        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "
            INSERT INTO
                postsubmit
                (username, text, date)
            VALUES
                ('$title', '$content', NOW())
        ";

        $query = $dbConnection->prepare($sql);
        $result = $query->execute();

        if ($result) {
            echo "Dado salvo com sucesso";
        } else {
            echo "Deu Ruim papito";
        }
    } else {
        echo "Você não veio por formulário então não vou fazer nada não";
    }
?>