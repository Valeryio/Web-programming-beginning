<?php 

/* Ecrire un simple programme de détection de navigateur */

// echo($_SERVER['HTTP_USER_AGENT']);

//Écrire un code pour avoir l'adresse IP du client 

//  echo($_SERVER['REMOTE_ADDR']);

//Écrire un code pour avoir des informations sur le fichier en cours 

// $this_path = $_SERVER['PHP_SELF'];

// $name_of_file = basename($this_path);

// echo("Le nom du fichier actuel est : " . $name_of_file);


/*List of components : Scheme, Host, Path
Expected Output :
Scheme : http
Host : www.w3resource.com
Path : /php-exercises/php-basic-exercises.php*/

// $mon_url = parse_url('https://www.w3resource.com/php-exercises/php-basic-exercises.php');

// echo('Scheme : ' . $mon_url['scheme']) . "<br>" ;
// echo('Host : ' . $mon_url['host'] . "<br>" );
// echo('Path : ' . $mon_url['path'] . "<br>" );


//Un code qui est capable de changer la première lettre du premier caractère d'un mot

function split($var) 
{

    $var .= " ";

    $a = 0;

    $dict = [];

    for($i = 0; $i < strlen(($var)); $i++)
    {
        if($var[$i] == " ")
        {
            
            $word = "";

            for( $j= $a; $j< $i; $j++)
            {
                $word .= $var[$j];
            }
            array_push($dict, $word);

            $a = $i + 1;

        }
    }

    return $dict;

}


$chain = "Je prends votre chaine";

$result = split($chain);

//  print_r($result);

?>

<?php foreach($result as $word): ?> 

    <span style="color: red;" > <?php echo($word[0])  ?> </span>
    
    <?php for($i=1; $i<strlen($word); $i++): ?> 

        <?php echo($word[$i]) ?>

    <?php endfor; ?>

    <span>  </span>
    <?php echo("  ") ?>


<?php endforeach; ?>



