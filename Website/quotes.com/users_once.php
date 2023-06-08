<?php session_start()  ?>


<?php
    
    $users = [];

    $user1 = [
        'nom' => 'Tom',
        'email' => 'tommagoma23@gmail.com',
        'password' => 'valerydoumate'
    ];

    $user2 = [
        'nom' => 'Fadil',
        'email' => 'fadilmoussi@gmail.com',
        'password' => 'fadil'
    ];

    $user3 = [
        'nom' => 'Linson',
        'email' => 'linson@gmail.com',
        'password' => 'linson'
    ];

    $user4 = [
        'nom' => 'Rocky',
        'email' => 'rocky@gmail.com',
        'password' => 'rocky'
    ];

    $users[0] = $user1;
    $users[1] = $user2;
    $users[2] = $user3;
    $users[4] = $user4;

    $loggedUser = false;

    if(!isset($_POST['nom']) || empty($_POST['password']) || !filter_var($_POST['mail']))
    {
        echo("Vous avez besoin de rentrer toutes les informations pour pouvoir vous connecter");
        return;
    }

    foreach ($users as $user)
    {

        if(($user['nom'] == $_POST['nom']) && ($user['password']  == $_POST['password']) && ($user['email'] == $_POST['mail']) )
        {
            $loggedUser = true;

            $_SESSION['name'] = $_POST['nom'];
            $_SESSION['mail'] = $_POST['mail'];
        }
                
    }

    setcookie(
        strip_tags(htmlspecialchars($_SESSION['name'])), 
        strip_tags(htmlspecialchars($_SESSION['mail'])), 
        [
        'expires' => time() + 24 * 365 * 3600,
        'secure' => true, 
        'httponly'=> true,
        ]
        );


    
?>



<?php

    $db = new PDO('mysql:host=localhost; dbname="myinfos"; charset=utf-8 ', 'root', 'root')

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/header.css" >
    <link rel="stylesheet" href="styles/footer.css" >
    <link rel="stylesheet" href="styles/user.css" >
    <link rel="stylesheet" href="styles/styles.css" >
    <link rel="stylesheet" href="styles/class.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index </title>
</head>

<body>
    
    <?php include_once('includes/header.php') ?>


        <?php if($loggedUser): ?>

            <div class="container">

                <img src="images/galilee.png" alt="galilee faisant des expériences" class="galilee" >


                    <main>
                        
                        <h2>Bienvenue Nouvel Apprenti penseur !</h2>

                        <h4>Votre nom :</h4>

                        <h5><?php echo strip_tags($_COOKIE['name']); ?></h5>


                    </main>


                <img src="images/pythagore.png" alt="Pythagore faisant des expériences" class="pythagore" >


            </div>

        <?php else: ?>

            <form action="connexion.php" >
                <input type="submit" value="Retour" class="back"  >
            </form>
            
            <div class="php_error" >
                <?php { echo("Les informations que vous avez entrées ne permettent pas d'identifier l'utilsateur en cours !"); } ?>
        </div>

        <?php endif; ?>
       

   
    <?php include_once('includes/footer.php')  ?>



</body>
</html>