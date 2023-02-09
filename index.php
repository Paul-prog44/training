<?php
try{
$database = new PDO('mysql:host=localhost;dbname=voyage;charset=utf8',    //Data Source Name
            'root', //Identifiant
            '',  //mot de passe
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);}

catch (Exception $e)

{
    die('Erreur : '. $e->getMessage());
}


$countriesStatement = $database->prepare('SELECT * FROM pays');
$countriesStatement->execute();
$countries = $countriesStatement->fetchAll();
?>
<?php foreach($countries as $country) : ?>
    <article>
         <h3><?php echo "PAYS : ". $country['nom']; ?></h3>
        <div><?php echo "Population :". $country['population']; ?></div>
        <i><?php echo "Frontière maritime :". $country['frontiere_maritime']; ?></i>
    </article> 

    <?php endforeach ?>
    