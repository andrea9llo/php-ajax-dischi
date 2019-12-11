<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album php</title>
    <link rel="stylesheet" href="css/style.css">

    <?php

      include "data.php";



     ?>

  </head>
  <body>
    <header>
      <div class="container">
          <img src="img/logo.png" alt="logo" />
      </div>
    </header>

    <div class="cds-container">

        <?php foreach ($database as $album) {?>
          <div class="cd">
            <img src="<?php echo $album["poster"] ?>" alt="">
            <h3><?php echo $album["title"] ?></h3>
            <span class="author"><?php echo $album["author"] ?></span>
            <span class="year"><?php echo $album["year"] ?></span>
          </div>
        <?php } ?>


    </div>


  </body>
</html>
