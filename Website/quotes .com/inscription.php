<?php 

    session_start();

    $_ENROLLED = 0;

    if(isset($_POST['nom']) && isset($_POST['prenom']) && filter_var($_POST['mail']) && isset($_POST['passwrd'])  )
    {
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['mail'] = $_POST['mail'];
        $_SESSION['passwrd'] = sha1($_POST['passwrd']);

        include_once('includes/config.php');

        $InscriptionQuerry = $db->prepare('INSERT INTO users(first_name, last_name, email, passwrd) VALUES (:prenom, :nom, :email, :passwrd)');

        $InscriptionQuerry->execute([
        ':prenom' => $_SESSION['prenom'], 
        ':nom' => $_SESSION['nom'], 
        ':email' => $_SESSION['mail'], 
        ':passwrd' => $_SESSION['passwrd'] 
        ]);
    
        $_ENROLLED = 1;

    }

        

    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/header.css" >
    <link rel="stylesheet" href="styles/footer.css" >
    <link rel="stylesheet" href="styles/class.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

    <?php require_once('includes/header.php'); ?>

    <?php if($_ENROLLED == 0):  ?>

    <form action=""  method="post"  >

        <div>
            <input type="text"  name="nom" >
        </div>

        <div>

            <?php 
            
                if( isset($_POST['nom']) )
                {
                    echo("Veuillez entrer un nom valide !"); 
                }

            ?>

        </div>

        <div>
            <input type="text" placeholder="Prenom" name="prenom">
        </div>

        <div>

            <?php 
            
                if( isset($_POST['prenom']) )
                {
                    echo("Veuillez entrer un prénom valide !"); 
                }

            ?>

        </div>


        <div>
            <input type="email" placeholder="Mail" name="mail">
        </div>

        <div>

            <?php 
            
                if( isset($_POST['mail']) )
                {
                    echo("Veuillez entrer un mail valide !"); 
                }

            ?>

        </div>

        <div>
            <input type="password" placeholder="password" name="passwrd">
        </div>


        <div>
            <input type="submit" placeholder="S'inscrire" name="envoi" >
        </div>

        

    </form>

    <?php else:  ?>
    
        <div>
            Bienvenu sur le site. Veuillez vous connecter pour accéder aux différentes fonctionnalités
        </div>

    <?php endif; ?>


</body>
</html>