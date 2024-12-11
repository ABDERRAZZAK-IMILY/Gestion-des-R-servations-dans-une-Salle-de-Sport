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
    FOREIGN KEY (membre_id) REFERENCES membres(id),
    FOREIGN KEY (activite_id) REFERENCES activites(id)
);
