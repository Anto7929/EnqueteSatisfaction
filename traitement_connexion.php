<?php

include 'header.php';

    $requete = "SELECT * FROM E2K19_Admin WHERE login = :login"; // Stockage de la requête dans une variable
    $statment = $db->prepare($requete); // Préparation de la requète
    $statment->bindParam(':login', $_POST['adm_pseudo']);
    $statment->execute(); // Exécution de la requête
    $user = $statment->fetch(PDO::FETCH_OBJ);
    
    $hash = '$2y$10$ilRv.BBpau9WfJlflcoBPuQXRxthh/xdvrMstjJRx4w/wshpcDrqm';
    
    
    if(!$user){
        echo 'Compte non trouvé';
        header('Location: index.php');
    } else{

        
        // Vérification du mot de passe
        if(password_verify($_POST['password'], $hash)){ 
            
            $_SESSION['est_admin'] = 1;
            
            echo 'Connecté.';   
            
            
            header('Location: accueilStatistiques.php');
        }
        else{
            header('Location: index.php');
            echo 'Erreur de mot de passe'.'</br>';   
        }
    }
    
    
?>


