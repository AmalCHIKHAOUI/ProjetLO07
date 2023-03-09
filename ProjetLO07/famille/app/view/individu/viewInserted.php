
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
            echo ("<h3>Le nouvel individu a été ajouté </h3>");
            echo("<ul>");
            echo ("<li>id = " . $results['id'] . "</li>");
            echo ("<li>famille_id = " . $results['famille_id'] . "</li>");
            echo ("<li>nom = " . $_GET['nom'] . "</li>");
            echo ("<li>prenom = " . $_GET['prenom'] . "</li>");
            echo ("<li>sexe = " . $_GET['sexe'] . "</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème d'insertion de l'individu</h3>");
            echo ("id = " . $_GET['nom']);
        }

        echo("</div>");
        include $root . '/app/view/fragment/fragmentGenealogieFooter.html';
        ?>
    </div>
        <!-- ----- fin viewInserted -->    


