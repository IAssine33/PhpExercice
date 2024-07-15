
<?php

// Pour relier ce fichier au fichier controller
require_once('../config/config.php');

// Inserer dans la table "products" des valeurs dans les colonnes 'titre' et 'sous_titre'.

$sql = "INSERT INTO products (titre, sous_titre) VALUES (:titre, :sous_titre)";
$stmt = $pdo->prepare($sql);

// Créer les variables avec la valeur qu'on veut mettre. 
$titre = "Exemple valeur de titre";
$sous_titre = "Exemple valeur de sous-titre";

// ???Nettoyage des valeur mise dans les variables.
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':sous_titre', $sous_titre);

// ???Condition d'execution, de verification d'erreur.
if ($stmt->execute()) {
	echo "Nouveau produit ajouté avec succès";
} else {
	echo "Erreur lors de l'ajout du produit"; // verification d'erreur.
}