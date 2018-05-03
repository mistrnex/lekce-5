<?php
require 'Programators/Objekty/DvourozmerneObjekty/Obdelnik.php';

require 'Programators/Objekty/DvourozmerneObjekty/Kruh.php';
require 'Programators/Objekty/DvourozmerneObjekty/Ctverec.php';
require 'Programators/Objekty/DvourozmerneObjekty/DvourozmernyObrazec.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>

      <?php
      
      
      ?>
      
      <?php
        $obdelnik = new Obdelnik(5, 7);
      
      $obdelnik2 = new Obdelnik(10,15);
      $obdelnik3=$obdelnik;
      var_dump($obdelnik2);
    var_dump($obdelnik);
      var_dump($obdelnik3);
      ?>
      <?php
        $kruh = new Kruh(5);
      $ctverec = new Ctverec(10);
   
    
       ?>
 
     
       <h1>
       <?=$kruh->ziskejObsah()?>
      </h1> 
      
      <div class="container">
        <h1>Obdelník</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$obdelnik->ziskejStranuA()?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$obdelnik->ziskejStranuB()?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?=$obdelnik->ziskejObsah()?></td>
          </tr>
        </table>
      </div>

            <div class="container">
        <h1>Kruh</h1>
        <table class="table">
          <tr>
            <th>Poloměr</th>
            <td><?=$obdelnik->ziskejStranuA()?></td>
          </tr>
  
          <tr>
            <th>Obsah</th>
            <td><?=$kruh->ziskejObsah()?></td>
          </tr>
        </table>
      </div>
      
          <div class="container">
        <h1>Čtverec</h1>
        <table class="table">
          <tr>
            <th>Strana</th>
            <td>10</td>
          </tr>
  
          <tr>
            <th>Obsah</th>
            <td><?=$ctverec->ziskejObsah()?></td>
          </tr>
        </table>
      </div>
    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
