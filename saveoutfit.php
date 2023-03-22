<?php
    if(!empty($_POST)) {
        require('include/connection.php');

        $title = $_POST['title'];
        $description = $_POST['description'];
        $filePath = '';

        if (isset($_FILES['image'])) {

            $fileExplodeName = explode('.',$_FILES['image']['name']);
            $fileExtension = $fileExplodeName[count($fileExplodeName) -1];
            $newName = md5(time());
            $diretory = "uploadoutfit/";
            $filePath = $diretory . $newName . '.' . $fileExtension;

            move_uploaded_file($_FILES['image']['tmp_name'], $filePath );
        }
        

        $sql = "
            INSERT INTO
                outfitsubmit
                (title, description, image)
            VALUES
                ('$title', '$description', '$filePath')
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