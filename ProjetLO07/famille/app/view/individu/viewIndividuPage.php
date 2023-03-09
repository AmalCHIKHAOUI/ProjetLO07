
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
        include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';

        //Nom
        echo("<h2 style='color:red'>{$results['individu']->getNom()} {$results['individu']->getPrenom()}</h4>");

        //Informations naissance et décès
        echo('<ul>');
        if (!$results['date_naissance']) {
            $results['date_naissance'] = "?";
        }
        if (!$results['place_naissance']) {
            $results['place_naissance'] = "?";
        }
        echo("<li>Né le {$results['date_naissance']} à {$results['place_naissance']}</li>");

        if ($results['date_deces']) {
            echo("<li>Décès le {$results['date_deces']} à {$results['place_deces']}</li>");
        }
        echo('</ul>');

        //inforamtions Parents
        echo("<h3>Parents</h3>");
        echo("<ul>");
        echo(
        "<li>Père "
        . "<a href='router1.php?action=individuReadOne&individu={$results['pere']->getId()}|{$results['pere']->getFamille_id()}'>"
        . "{$results['pere']->getNom()} {$results['pere']->getPrenom()}"
        . "</a>"
        . "</li>");

        echo(
        "<li>Mère "
        . "<a href='router1.php?action=individuReadOne&individu={$results['mere']->getId()}|{$results['mere']->getFamille_id()}'>"
        . "{$results['pere']->getNom()} {$results['mere']->getPrenom()}"
        . "</a>"
        . "</li>");
        echo("</ul>");

        //information unions et enfants
        echo("<h3>Unions et enfants</h3>");
        echo("<ul>");
        foreach ($results['unions'] as $elem) {
            $conquete = $elem[0];
            $enfants = $elem[1];

            //affichage mari/femme
            echo(
            "<li>Union avec "
            . "<a href='router1.php?action=individuReadOne&individu={$conquete->getId()}|{$conquete->getFamille_id()}'>"
            . "{$conquete->getNom()} {$conquete->getPrenom()}"
            . "</a>"
            . "</li>");

            //affichage enfant
            echo("<ol>");
            foreach ($enfants as $enf) {
                echo(
                "<li> Enfant "
                . "<a href='router1.php?action=individuReadOne&individu={$enf->getId()}|{$enf->getFamille_id()}'>"
                . "{$enf->getNom()} {$enf->getPrenom()}"
                . "</a>"
                . "</li>");
            }
            echo("</ol>");
        }
        echo("</ul>");
        ?>


    </div>
    <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>

    <!-- ----- fin viewAll -->


