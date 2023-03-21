<!DOCTYPE html>
<html>

<head>
    <title>Lookbook Example</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    /* Custom CSS 
.thumbnail {
  height: 450px;
}

.caption {
  height: 100px;
}

.caption h3 {
  margin-top: 0;
}

.caption p {
  font-size: 14px;
}

@media (max-width: 768px) {
  .thumbnail {
    height: 300px;
  }
  
  .caption {
    height: 80px;
  }
}*/
    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .row {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .thumbnail {
        height: 700px;
        display: flex;
        flex-direction: column;
    }
    .text-center {
        text-align: center;
        width: 100%;
        margin-top: 20px;
        margin-bottom:20px;
    }
    .buttonContainer {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    #homeButton {
        margin-top:50px;
        width: 15%;
        margin-bottom: 50px;
        padding: 10px;
        font-size: 14px;

    }
</style>

<body>
    <div class="container">
        <h1 class="text-center">Lookbook Example</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 1">
                    <div class="caption">
                        <h3>Look 1</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 2">
                    <div class="caption">
                        <h3>Look 2</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 3">
                    <div class="caption">
                        <h3>Look 3</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 4">
                    <div class="caption">
                        <h3>Look 4</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 5">
                    <div class="caption">
                        <h3>Look 5</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./imagens/look3.jpg" class="imgLook" alt="Look 6">
                    <div class="caption">
                        <h3>Look 6</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit
                            massa vel mauris sollicitudin dignissim.</p>
                        <h4>Where to find:</h4>
                        <a class="linkToBuy" href="https://www.cea.com.br">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttonContainer">
        <a class="btn btn-sm btn-outline-secondary" id="homeButton" href="index.php">Back to home</a>
    </div>
    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>