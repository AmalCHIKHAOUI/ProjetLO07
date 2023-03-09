
<!-- ----- début viewInsert -->

<?php
require ($root . '/app/view/fragment/fragmentGenealogieHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentGenealogieMenu.html';
        include $root . '/app/view/fragment/fragmentGenealogieJumbotron.php';

        if (isset($_SESSION["nom"])) {
            echo('<form role="form" method="get" action="router1.php">
            <div class="form-group">
                <input type="hidden" name="action" value="individuCreated">
                <label for="id">nom : <input type="text" name="nom" value="' . $_SESSION["nom"]. '"></label>                           
                <label for="id">prenom : <input type="text" name="prenom" value=""></label>
                <p style="font-weight: bold">sexe :</p>
                <label class="radio-inline">
                    <input type="radio" name="sexe" id="inlineRadio1" value="H"/>Masculin   
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexe" id="inlineRadio2" value="F"/>Féminin   
                </label>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>');
        } else {
            echo("<h4>Veulliez choisir une famille</h4>");
            echo("<a class='btn btn-primary' href='router1.php?action=familleReadNom'>Choisir famille</a>");
        }
        ?> 


        <p/>
    </div>
<?php include $root . '/app/view/fragment/fragmentGenealogieFooter.html'; ?>

    <!-- ----- fin viewInsert -->



