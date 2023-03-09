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
     echo ("<h3>Confirmation de la creation d'un lien parentale </h3>");
     echo("<ul>");
     //echo ("<li>id = " . $results . "</li>");
    
     echo ("<li>Famille_id = " . $results['famille_id_parents'] . "</li>");
     echo ("<li>Individu_id1 = " . $results['iid1'] . "</li>");
     echo ("<li>Individu_id2=" . $results['iid2'] . "</li>");
     
     echo("</ul>");
    } else {
     echo ("<h3>Problème de rajout de lien parentale </h3>");
     echo ("idd = " . $_GET['famille_id']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentGenealogieFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    
