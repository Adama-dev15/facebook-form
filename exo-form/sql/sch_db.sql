CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        prenom VARCHAR(225) NOT NULL,
        name_famille VARCHAR(225) NOT NULL,
        adress_email VARCHAR(225) NOT NULL,
        password_hash VARCHAR (225) NOT NULL,
        date_naiss VARCHAR(225) NOT NULL,
        genre VARCHAR(225) NOT NULL
    );