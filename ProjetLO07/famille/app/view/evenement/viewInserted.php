<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
    include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Confirmation de la creation d'un evenement </h3>");
     echo("<ul>");
     //echo ("<li>id = " . $results . "</li>");
    // echo  "<a href='router1.php?action=evenementCreated&individu={$results->getId()}'>";
     echo ("<li>Famille_id = " . $results['famille_id'] . "</li>");
     echo ("<li>Individu_id = " . $results['iid'] . "</li>");
     echo ("<li>event_id = " . $results['id'] . "</li>");
     echo ("<li>Event_type = " . $_GET['event_type'] . "</li>");
     echo ("<li>Event_date = " . $_GET['event_date'] . "</li>");
     echo ("<li>Event_lieu = " . $_GET['event_lieu'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion d'evenement</h3>");
     echo ("idd = " . $_GET['individu']);
    }
    ?>
<!-- ----- Fin ViewInserted -->

