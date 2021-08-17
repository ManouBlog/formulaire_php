<?php
    $serveurnom = "localhost";
    $username = "root";
    $passwword = "";
    $dbname = "formulaire";

    $connect = mysqli_connect( $serveurnom,$username,$passwword,$dbname);

    if ( $connect === false) {
       die("ERREUR: REVOIR TON CODE PHP" .mysqli_connect_error());
    }else{
        echo "connexion running....";
    }

    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $email = $_REQUEST['email'];
    $mot_de_passe = $_REQUEST['mot_de_passe'];

    $query = "INSERT INTO form VALUES ('$nom','$prenom','$email','$mot_de_passe')";

    if (mysqli_query($connect,$query)) {
        echo "Parfait vos donnees sont stockeès";
    }else {
        echo "ERREUR" .$query .mysqli_error($connect);
    }
?>