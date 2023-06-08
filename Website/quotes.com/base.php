<?php

try
{
    $db = new PDO(
        'mysql:host=localhost;dbname=quotes.com;charset=utf8mb4',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

    $myquerry = $db->prepare('DELETE FROM users WHERE first_name = :first_name');

     $myquerry->execute([':first_name' => 'Linson']);

    // $querry = $myquerry->fetchAll();

    // foreach ($querry as $requetes)
    // {
    //     echo($requetes['email']);
    // }





?>
