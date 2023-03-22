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
      width: 100%;
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

    #startWritingButton {
      margin-left: 20px;
    }

    .lookimg {
      padding-bottom: 10px;
      width: 400px;
    }

    #submitLook {
      margin-top: 10px;
    }

    #outfitSubmit {
      margin-left: 20px;
    }

    .position {
      text-align: center;
      justify-content: center;
    }

    
  </style>


  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="blog.css" rel="stylesheet">
</head>

<body>
  <div class="col-4 text-center" style="margin-left:450px;">
    <a class="blog-header-logo text-dark" href="#">My Fashion Blog</a>
  </div>
  <div class="container">
    <header class="blog-header lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">

        <div class="col-4 d-flex justify-content-end align-items-center" style="margin-left:800px; margin-bottom:20px;">
          <a class="btn btn-sm btn-outline-secondary" id="startWritingButton" href="newpost.php">Start Writing</a>
          <a class="btn btn-sm btn-outline-secondary" id="outfitSubmit" href="outfitsubmit.php">Outfit Submit</a>
        </div>

      </div>
    </header>

  </div>

  <main class="container">
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom" style="margin-top:20px;">
          Stephannie Wolff
        </h3>
        <?php
        require('selectpost.php');

        foreach ($allPosts as $post) {

          echo "
                    <article class='blog-post'>
                    <h2 class='blog-post-title mb-1'>{$post['username']}</h2>
                    <p class='blog-post-meta'><a href='#'>{$post['date']}</a><a href='#' id='authorName'> Stephannie</a></p>  
                    <div class='col-auto d-none d-lg-block'>
                      <img class='image w-100' src={$post['image']}>
                      
                    </div>
                    <p>{$post['text']}</p>
                    <a type='submit' class='btn btn-primary' id='readMoreButton' href='firstpost.php'>Read More</a>
                  </article>
                             ";
        }

        ?>
      </div>
      <div class='col-md-4'>
        <div class='position' style='top: 2rem; margin-top:10px; margin-left:80px;'>
          <h4 class='fst-italic'>Outfit of The Day</h4>
          <p class='mb-0'>Submit All your best outfits</p>
          <a type='submit' class='btn btn-primary' id='submitLook' href='lookbook.php'>Lookbook</a>
        </div>
        <?php
        require('selectoutfit.php');

        foreach ($allPosts as $post) {

          echo "

                      <div class='p-4 mb-3 bg-light rounded'>
                        <img class='lookimg' src={$post['image']}>
                        
                      </div>
                             ";
        }

        ?>
      </div>
    </div>
  </main>

  <footer class="blog-footer">
    <p>Blog template built by Sté</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>



</body>

</html>