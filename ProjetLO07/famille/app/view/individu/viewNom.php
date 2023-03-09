
<!-- ----- début viewNom -->
<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
        include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';
        // $results contient un tableau avec la liste des clés.
        ?>
        
        <form role="form" method='get' action='router1.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='individuReadOne'>
                <label for="nom">individu : </label> 
                <select class="form-control" id="individu" name="individu">
                    <?php
                    foreach ($results as $element) {
                        echo ("<option value='{$element->getId()}|{$element->getFamille_id()}'>"
                        . "{$element->getNom()} : {$element->getPrenom()}"
                        . "</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>

    <!-- ----- fin viewNom -->