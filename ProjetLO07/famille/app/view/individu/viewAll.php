
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
        include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';

        if (isset($_SESSION["nom"])) {
            echo('<table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">famille_id</th>
                    <th scope = "col">id</th>
                    <th scope = "col">nom</th>
                    <th scope = "col">prenom</th>
                    <th scope = "col">sexe</th>
                    <th scope = "col">pere</th>
                    <th scope = "col">mere</th>
                </tr>
            </thead>
            <tbody>');
            // La liste des familles est dans une variable $results             
            foreach ($results as $element) {
                echo("<tr>"
                . "<td>" . $element->getFamille_id() . "</td>"
                . "<td>" . $element->getId() . "</td>"
                . "<td>" . $element->getNom() . "</td>"
                . "<td>" . $element->getPrenom() . "</td>"
                . "<td>" . $element->getSexe() . "</td>"
                . "<td>" . $element->getPere() . "</td>"
                . "<td>" . $element->getMere() . "</td>"
                . "</tr>");
            }
            echo('</tbody>
            </table>');
        } else {
            echo("<h4>Veulliez choisir une famille</h4>");
            echo("<a class='btn btn-primary' href='router1.php?action=familleReadNom'>Choisir famille</a>");
        }
        ?>


    </div>
    <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>

    <!-- ----- fin viewAll -->


