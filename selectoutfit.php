<?php
    require('include/connection.php');

    $sql = "
        SELECT
            id,
            title,
            description,
            image
            
        FROM
            outfitsubmit

    ";

    if(isset($_GET['id'])) {
        $sql .= "
            AND id = {$_GET['id']}
        ";
    }

    $query = $dbConnection->prepare($sql);
    $query->execute();
    $allPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>