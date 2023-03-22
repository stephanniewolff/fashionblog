<?php
    if(!empty($_POST)) {
        require('include/connection.php');

        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        $image = $_POST['image'];

        $sql = "
            INSERT INTO
                postsubmit
                (username, text, date, image)
            VALUES
                ('$title', '$content', '$date', '$image')
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
    $msg = false;

if (isset($FILES['image'])) {
    $extensao = strtolower(substr($FILES['image']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload/";

    move_uploaded_file($FILES['image']['tmp_name'], $diretorio.$novo_nome);
    $sql_code = "INSERT INTO postsubmit (username, text, date, image) VALUES ($title', '$content', '$date', '$novo_nome')";
    if($mysqli->query($sql_code)) {
    $msg = "arquivo enviado com sucesso";}
    else {
    $msg = "falhou";

    }
}
?>