<?php

require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
      include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';
      ?>
<h3>Liste ds liens</h3>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">famille_id</th>
          <th scope = "col">id</th>
          <th scope = "col">iid1</th>
          <th scope = "col">iid2</th>
          <th scope = "col">lien_type</th>
          <th scope = "col">lien_date</th>
          <th scope = "col">lien_lieu</th>
          
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des liens            
          foreach ($results as $element) {
           echo("<tr><td>" . $element->getFamille_id() ."</td><td>" . $element->getId() . "</td><td>" . $element->getIid1() ."</td><td>" . $element->getIid2() . "</td><td>" . $element->getLien_type() ."</td><td>" . $element->getLien_date() . "</td><td>" . $element->getLien_lieu() ."</td></tr>");
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>
