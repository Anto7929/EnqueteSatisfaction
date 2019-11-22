<?php include 'header.php'?>

<body>
            <label class="en-teteDivCo">Espace administrateur</label><br>
            <label class="en-teteDivCo">Enquête satisfaction</label><br />
        <div id="connexion">
            <form method="POST" action="traitement_connexion.php">
                <label id="label-co" class="connexion">Identifiant</label>
                <input id="champ" class="connexion" type="text" placeholder="" name="adm_pseudo" required><br>
                <label id="label-co" class="connexion">Mot de passe</label>
                <input id="champ" class="connexion" type="password" placeholder="" name="password" required><br>
                <input id="bt_connection" type="submit" id='submit' value='Connexion'>
            </form>
        </div>

    </body>
</html>
 

