<?php
require 'Programators/Objekty/DvourozmerneObjekty/DvourozmernyObrazec.php';
require 'Programators/Objekty/DvourozmerneObjekty/TrojrozmernyObrazec.php';
require 'Programators/Objekty/DvourozmerneObjekty/Kvadr.php';
require 'Programators/Objekty/DvourozmerneObjekty/Krychle.php';
require 'Programators/Objekty/DvourozmerneObjekty/Obdelnik.php';
require 'Programators/Objekty/DvourozmerneObjekty/Koule.php';
require 'Programators/Objekty/DvourozmerneObjekty/RotacniKuzel.php';
require 'Programators/Objekty/DvourozmerneObjekty/Jehlan.php';

require 'Programators/Objekty/DvourozmerneObjekty/Kruh.php';
require 'Programators/Objekty/DvourozmerneObjekty/Ctverec.php';

require 'Programators/Objekty/DvourozmerneObjekty/PravouhlyTrojuhelnik.php';
require 'Programators/Objekty/DvourozmerneObjekty/Mnohouhelnik.php';
require 'Programators/Objekty/DvourozmerneObjekty/Sedmiuhelnik.php';

function vypisObsah(DvourozmernyObrazec $obrazec) {
  echo $obrazec->ziskejObsah();
  }
  
  function vypisObjem(TrojrozmernyObrazec $obrazec) {
  echo $obrazec->ziskejObjem();
    }
    
      function vypisPovrch(TrojrozmernyObrazec $obrazec) {
  echo $obrazec->ziskejPovrch();
    
}
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
            <a class="nav-link" href="/lekce-5/index2.php">About</a>
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
        $obdelnik = new Obdelnik(5, 7);
      
      $obdelnik2 = new Obdelnik(10,15);
      $obdelnik3=$obdelnik;
      var_dump($obdelnik2);
    var_dump($obdelnik);
      var_dump($obdelnik3);
      ?>
      <?php
        $kruh = new Kruh(10);
          $kruh2 = new Kruh(5);
      $ctverec = new Ctverec(10);
   $trojuhelnik= new PravouhlyTrojuhelnik(3,4,5);
       $mnohouhelnik= new Mnohouhelnik(50,7);
      $sedmiuhelnik= new Sedmiuhelnik(50);
    $kvadr = new Kvadr(10,5,1);
      $krychle = new Krychle (5);
      $koule= new Koule(10);
      $rotacniKuzel= new RotacniKuzel(8,5);
      $jehlan= new Jehlan(10);
       ?>
 
     
       <h1>
       <?=$kruh->ziskejObsah();
         ?>
      </h1> 
            <h1> Kvádr:
       <?=$kvadr->ziskejObjem();
         ?>
               <br> <?=$kvadr->ziskejPovrch();
         ?>
      </h1> 
        <h2> Krychle:
       <?=$krychle->ziskejObjem();
         ?>
               <br> <?=$krychle->ziskejPovrch();
         ?>
      </h2> 
      
      <h2> Krychle - vypiš:
       <?= vypisObjem($krychle);
         ?>
               <br> <?= vypisPovrch($krychle);
         ?>
      </h2> 
       <h2> Koule:
       <?=$koule->ziskejObjem();
         ?>
               <br> <?=$koule->ziskejPovrch();
         ?>
      </h2> 
      <h2> Rotační kužel:
       <?=$rotacniKuzel->ziskejObjem();
         ?>
               <br> <?=$rotacniKuzel->ziskejPovrch();
         ?>
      </h2> 
      
      <h2> Jehlan - vypiš:
       <?= vypisObjem($jehlan);
         ?>
               <br> <?= vypisPovrch($jehlan);
         ?>
      </h2> 
             <h1> Vypis obsah - kruh:
       <?=vypisObsah($kruh);
         ?>
      </h1> 
       <h1> Vypis obsah - kruh:
       <?=vypisObsah($kruh2);
         ?>
      </h1> 
      
       <h1> Vypis obsah - čtverec:
       <?=vypisObsah($ctverec);
         ?>
      </h1> 
      
             <h1>Trojúhelník-
       <?=$trojuhelnik->ziskejObsah();
         ?>
      </h1> 
      
       <h1>
         Mnohoúhelník:
       <?=$mnohouhelnik->ziskejObsah();
         ?>
      </h1> 
      
       <h1>
         Sedmiúhelník:
       <?=$sedmiuhelnik->ziskejObsah();
         ?>
      </h1>
      
      <div class="container">
        <h1>Obdelník</h1>
        <table class="table">
          <tr>
            <th>Strana A</th>
            <td><?=$obdelnik->ziskejStranuA(); ?></td>
          </tr>
          <tr>
            <th>Strana B</th>
            <td><?=$obdelnik->ziskejStranuB(); ?></td>
          </tr>
          <tr>
            <th>Obsah</th>
            <td><?= vypisObsah($obdelnik2); ?></td>
          </tr>
        </table>
      </div>

            <div class="container">
        <h1>Kruh</h1>
        <table class="table">
          <tr>
            <th>Poloměr</th>
            <td><?=$obdelnik->ziskejStranuA(); ?></td>
          </tr>
  
          <tr>
            <th>Obsah</th>
            <td><?=$kruh->ziskejObsah(); ?></td>
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
            <td><?=$ctverec->ziskejObsah(); ?></td>
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
