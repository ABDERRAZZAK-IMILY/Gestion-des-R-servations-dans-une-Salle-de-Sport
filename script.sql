
CREATE DATABASE sallegym;

USE sallegym;

CREATE TABLE membres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
);

CREATE TABLE activites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    description TEXT,
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    membre_id INT,
    activite_id INT,
    date_reservation DATE,
    FOREIGN KEY (membre_id) REFERENCES membres(id) ON DELETE CASCADE  ON UPDATE CASCADE,
    FOREIGN KEY (activite_id) REFERENCES activites(id) ON DELETE CASCADE  ON UPDATE CASCADE,
);


INSERT INTO activites(nom , description)
VALUES ('yoga' , 'A yoga practice is a lifelong pursuit, giving you plenty of time to explore each asana (pose) and learn sequences of postures') , ('cardio' , 'Le cardio-training est une activité sportive qui sollicite le système cardio-vasculaire');