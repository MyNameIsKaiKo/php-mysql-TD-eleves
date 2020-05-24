<?php
    try
{
    $bdd = new PDO('mysql:host=localhost;dbname=td-sin;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$request = $bdd->query('SELECT * FROM famille_tbl');
echo '<h1>Exercice un : </h1> <br/>';
while ($donnees=$request->fetch())
{
    echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$request->closeCursor();

$request = $bdd->query('SELECT * FROM famille_tbl ORDER BY prenom');
echo '<h1>Exercice Deux : </h1> <br/>';
while ($donnees=$request->fetch())
{
    echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$request->closeCursor();

$request = $bdd->query('SELECT * FROM famille_tbl WHERE date<\'1960-01-01\'');
echo '<h1>Exercice Trois : </h1> <br/>';
while ($donnees=$request->fetch())
{
    echo $donnees['nom'].' '.$donnees['prenom'].' ('.$donnees['statut'].'), date de naissance : '.$donnees['date'].'<br/>';
}
$request->closeCursor();
?>

