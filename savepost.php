<?php
    if(!empty($_POST)) {
        require('include/connection.php');

        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        $filePath = '';

        if (isset($FILES['image'])) {

            $fileExplodedName = explode('.',$uploadedFile['name']);
            $fileExtension = $fileExplodeName[count($fileExplodeName) -1];
            $newName = md5(time());
            $diretory = "upload/";
            $filePath = $diretory . $newName . '.' . $fileExtension;

            move_uploaded_file($FILES['image']['tmp_name'], $filePath );
        }
        

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
            echo "Você não veio por formulário então não vou fazer nada não";
        }
    }


?>