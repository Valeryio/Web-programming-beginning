
<?php

    try
    {
        $db = new PD0('mysql:host=localhost; dbname="quotes"; charset=utf-8', 'root', 'root');
    }
    catch(EXCEPTION $e)
    {
        die('Erreur' . $e->getMessage());
    }

?>