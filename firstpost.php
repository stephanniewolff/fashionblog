<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>First Post</title>

    <style>
    
    
    .headerContainer {
        margin:15px;
    }
    .row {
        margin: 15px;
        display: flex;
        flex-direction: row;
     
    }  
    #imgContainer {
        display: flex;
        flex-direction: row;
        justify-content: center;
      
    }
    .imgTeste {
        width: 400px;
        height: 400px;
    
    }
    #textContainer {
        display: flex;
        flex-direction: row;
        justify-content: left;
       
    }
    
    .buttonContainer {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    #homeButton {
        margin-top:50px;
        width: 15%;

    }

    </style>
</head>
<body>
    <div class="headerContainer">
        <h2 class="blog-post-title mb-1">My first post</h2>
        <p class="blog-post-meta"><a href="#">December 14, 2020 by </a><a href="#" id="authorName">Stephannie</a></p>
    </div>
    <article class="row">

        <div class="col-6" id="imgContainer">
            <img class="imgTeste" src="./imagens/post1.jpg">
        </div>
        <div class="col-6" id="textContainer">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet asperiores reiciendis officia totam corrupti, amet tempore reprehenderit nostrum, assumenda vel dolores, iusto porro. Soluta autem pariatur laborum quae quis aliquam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet asperiores reiciendis officia totam corrupti, amet tempore reprehenderit nostrum, assumenda vel dolores, iusto porro. Soluta autem pariatur laborum quae quis aliquam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet asperiores reiciendis officia totam corrupti, amet tempore reprehenderit nostrum, assumenda vel dolores, iusto porro. Soluta autem pariatur laborum quae quis aliquam.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet asperiores reiciendis officia totam corrupti, amet tempore reprehenderit nostrum, assumenda vel dolores, iusto porro. Soluta autem pariatur laborum quae quis aliquam.
            </p>
        </div>
        <div class="buttonContainer">
            <a class="btn btn-sm btn-outline-secondary" id="homeButton" href="index.html">Back to home</a>
        </div>
    </article>
</body>
</html>