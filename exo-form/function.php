<?php

function  registerUser($name, $family_name, $email, $password, $date_naiss, $genre){
    global $pdo;
    //Hash du mot de passe 
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    //insertion dans la base de donnée 
    
    try {
      $query = "INSERT INTO user 
      (prenom, name_famille, adress_email, password_hash, date_naiss, genre) 
      VALUES (:prenom, :name_famille, :adress_email, :password_hash, :date_naiss, :genre)";
      $stmt = $pdo->prepare($query);
      $stmt->execute([
        'prenom' => $name,
        'name_famille' => $family_name,
        'adress_email' => $email,
        'password_hash' => $password_hash,
        'date_naiss' => $date_naiss,
        'genre' => $genre
      ]);
  
      return true;
    } catch (\Throwable $th) {
      return false;
    }
  }

?>