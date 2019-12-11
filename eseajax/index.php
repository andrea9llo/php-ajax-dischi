<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <title>Album ajax</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
          <img src="img/logo.png" alt="logo" />
      </div>
    </header>

    <div class="cds-container ">

    </div>



    <!-- blocco template -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img src={{poster}} alt="">
        <h3>{{title}}</h3>
        <span class="author">{{author}}</span>
        <span class="year">{{year}}</span>
      </div>

    </script>

    <script type="text/javascript" src="js/script.js"></script>


  </body>
</html>
