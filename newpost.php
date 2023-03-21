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
            <h1 class="text-center mb-4">New Blog Post</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                    <label for="title">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy" required>
                </div>
                <div class="form-group">
                    <label for="title">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" rows="8" placeholder="Enter content" required></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Tags</label>
                    <input type="text" class="form-control" id="tags" placeholder="#" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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