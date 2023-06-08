<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/header.css" >
    <link rel="stylesheet" href="styles/footer.css" >
    <link rel="stylesheet" href="styles/class.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>


    <?php require_once('includes/header.php') ?>


    <form action="user.php" method="post" >

        <div>
            <Label for="nom" >Entrez votre nom</Label>
            <input type="text" placeholder="nom" name="nom" id="nom" >
        </div>
        
        <div>
            <Label for="mail" >Entrez votre mail/Label>
            <input type="mail" placeholder="Email" name="mail"  id="nom"  >
        </div>
        
        <div>
            <Label for="pass" >Entrez votre mot de passe</Label>
            <input type="password" placeholder="Password" name="password" id="password"  >
        </div>
        

        <input type="submit" value="Envoyer"  >



    </form>



    <?php require_once('includes/footer.php') ?>



    
</body>
</html>