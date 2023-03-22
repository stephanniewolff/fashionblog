<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Fashion Blog</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width:100%;
        background-color: red;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      #startWritingButton{
        margin-left: 20px;
      }

      .lookimg {
        padding-bottom: 10px;
        width:400px;
      }

      #submitLook {
        margin-top: 10px;
      }
      #outfitSubmit {
        margin-left: 20px;
      }

    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="signup.php">Sign Up</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">My Fashion Blog</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" id="loginButton" href="login.php">Login</a>
        <a class="btn btn-sm btn-outline-secondary" id="startWritingButton"href="newpost.php">Start Writing</a>
        <a class="btn btn-sm btn-outline-secondary" id="outfitSubmit"href="outfitsubmit.php">Outfit Submit</a>
      </div>
      
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Looks</a>
      <a class="p-2 link-secondary" href="#">Opinions</a>
      <a class="p-2 link-secondary" href="#">Decor</a>
      <a class="p-2 link-secondary" href="#">LifeStyle</a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
      <a class="p-2 link-secondary" href="#"></a>
    </nav>
  </div>
</div>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">About Me</h1>
      <p class="lead my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium dolorem provident eveniet culpa sed in repellendus quo labore perferendis obcaecati sint saepe consectetur, delectus, quis excepturi asperiores magni quidem velit.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Stephannie Wolff
      </h3>
<?php
      require('selectpost.php'); 
                
                foreach($allPosts as $post) {
                    
                    echo "
                    <article class='blog-post'>
                    <h2 class='blog-post-title mb-1'>{$post['username']}</h2>
                    <p class='blog-post-meta'><a href='#'>{$post['date']}</a><a href='#' id='authorName'>Stephannie</a></p>  
                    <div class='col-auto d-none d-lg-block'>
                      <img class='imgteste' src='./imagens/post1.jpg'>
                      
                    </div>
                    <p>{$post['text']}</p>
                    <a type='submit' class='btn btn-primary' id='readMoreButton' href='firstpost.php'>Read More</a>
                  </article>
                             ";
                }

            ?>
      <!--<article class="blog-post">
        <h2 class="blog-post-title mb-1">{$post['username']}</h2>
        <p class="blog-post-meta"><a href="#">{$post['date']}</a><a href="#" id="authorName">Stephannie</a></p>  
        <div class="col-auto d-none d-lg-block">
          <img class="imgteste" src="./imagens/post1.jpg">
          
        </div>
        <p>{$post['text']}</p>
        <a type="submit" class="btn btn-primary" id="readMoreButton" href="firstpost.php">Read More</a>
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav>-->

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <h4 class="fst-italic">Outfit of The Day</h4>
        <p class="mb-0">Submit All your best outfits</p>
        <a type="submit" class="btn btn-primary" id="submitLook" href="lookbook.php">Lookbook</a>
        <div class="p-4 mb-3 bg-light rounded">
          <img class="lookimg" src="imagens/look1.jpg">
          <img class="lookimg" src="imagens/look2.jpg">
          <img class="lookimg" src="imagens/look3.jpg">
          <img class="lookimg" src="imagens/look4.jpg">
          
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>
