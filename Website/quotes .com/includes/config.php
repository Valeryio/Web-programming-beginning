
<?php

    try
    {
        $db = new PD0('mysql:host=localhost, quotes, utf8', 'root', 'root');
    }
    catch(EXCEPTION $e)
    {
        die('Erreur' . $e->getMessage());
    }

?>