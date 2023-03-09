
<!-- ----- debut ViewEvent -->
<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
  <div class="container">
      <?php  
      include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
      include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Famille_id</th>
         <th scope = "col">id</th>
        <th scope = "col">iid</th>
        <th scope = "col">event_type</th>
        <th scope = "col">event_date</th>
        <th scope = "col">event_lieu</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des evenement pour une famille selectionnes             
          foreach ($results as $element) {
           echo("<tr><td>" . $element->getFamille_id() . "</td><td>" . $element->getId() . "</td><td>" . $element->getIid() ."</td><td>" . $element->getEvent_type() . "</td><td>" . $element->getEvent_date() ."</td><td>" . $element->getEvent_lieu() . "</td></tr>");
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>
<!-- ----- debut viewEvent -->