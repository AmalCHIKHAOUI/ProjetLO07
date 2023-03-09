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
     echo ("<h3>Confirmation de la creation d'un lien d'union  </h3>");
     echo("<ul>");
     //echo ("<li>id = " . $results . "</li>");
       //echo  "<a href='router1.php?action=lienParentalCreated&individu={$results['individu']->getId()}|{$results['individu']->getId()}'>";
     echo ("<li>famille_id = " . $results['famille_id'] . "</li>");
       echo ("<li>Lien_id = " . $results['id'] . "</li>");
     echo ("<li>Homme _id = " . $results['iid1'] . "</li>");
     echo ("<li>femme_id = " . $results['iid2'] . "</li>");
     echo ("<li>lien_type = " . $_GET['lien_type'] . "</li>");
     echo ("<li>lien_date = " . $_GET['lien_date'] . "</li>");
     echo ("<li>lien_lieu = " . $_GET['lien_lieu'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion d'un lien</h3>");
     echo ("id = " . $_GET['iid1']);
     echo ("id = " . $_GET['iid2']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentGenealogieFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    