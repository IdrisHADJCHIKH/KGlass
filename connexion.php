<!-- connection to db -->
<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'kglassbdd';

    try {
        $dns = 'mysql:host='.$host.';dbname='.$dbname;
        $pdodbcon = new PDO($dns,$user,$password);

        $pdodbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        echo'enfin !';

    } 
    catch (PDOException $error) 
    {
        $error->getMessage();
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $pdodbcon->query("SET NAMES UTF8");
?>