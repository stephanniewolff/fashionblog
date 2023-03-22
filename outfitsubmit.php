<?php

$title = "Criação de Post";
$action = 'saveoutfit.php';
$buttonValue = "Criar Publicação";
$buttonClass = "btn-success";

if (isset($_GET['id'])) {
    require('selectoutfit.php');

    if ($allPosts) {
        $post = $allPosts[0];
    } else {
        echo "<div class='alert alert-danger'> Essa publicação não existe </div>";
    }

    $action = "saveoutfit.php?id=" . $_GET['id'];
    $buttonValue = "Atualizar Publicação";
    $buttonClass = "btn-primary";
    $title = "Editando Publicação";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog Post</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    button {
        margin-bottom: 20px;
    }
</style>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <h1 class="text-center mb-4">Submit your Look</h1>
            <form enctype="multipart/form-data" action="saveoutfit.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="content">Look Description</label>
                    <textarea class="form-control" name="description" rows="8" placeholder="Enter content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tags">Where to find</label>
                    <input type="text" class="form-control" name="tags" placeholder="Link" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <button type="submit" class="btn btn-primary"<?php echo $buttonClass; ?> value="<?php echo $buttonValue; ?>">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
