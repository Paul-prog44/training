<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=voyage;charset=utf8', 
    'root', 
    '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//Préparation de la requête
$insertCountry = $db->prepare('INSERT INTO pays (nom, population, frontiere_maritime) VALUES (:nom, :population, :frontiere_maritime)');

//Execution de la requête
$insertCountry->execute([
    'nom' => $_POST['name'],
    'population' => $_POST['population'],
    'frontiere_maritime' => $_POST['frontiere_maritime']
]);
?>

<h1>Pays ajouté avec succès !<h1>
<h3>Nom du pays ajouté : <?php echo $_POST['name'];?></h3>
<h4>Population : <?php echo $_POST['population'];?></h4>
<h4>Présence d'une frontière maritime : 
    <?php if ($_POST['frontiere_maritime']=== 0) 
    {
        echo "oui";
    } 
else 
{
    echo 'non';
    }
    ?><h4>
