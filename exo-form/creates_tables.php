<?php
require_once 'connexion.php';


function createTables()
{
  global $pdo; 

  // Requête pour créer la table Utilisateurs
  $createUsersTable = "
  CREATE TABLE IF NOT EXISTS user  (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(225) NOT NULL,
    name_famille VARCHAR(225) NOT NULL,
    adress_email VARCHAR(225) NOT NULL,
    password_hash VARCHAR (225) NOT NULL,
    date_naiss VARCHAR(225) NOT NULL,
    genre VARCHAR(225) NOT NULL
    );
    ";


  try {
    // Exécution des requêtes pour créer les tables
    $pdo->exec($createUsersTable);
    echo "Tables créées avec succès!";
  } catch (PDOException $e) {
    echo "Erreur lors de la création des tables : " . $e->getMessage();
  }
}

// Appel de la fonction pour créer les tables
createTables();
?>