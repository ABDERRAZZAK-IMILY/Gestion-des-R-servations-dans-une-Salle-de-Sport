# SalleGym Reservation System

This project is a simple web-based reservation system for a gym, allowing members to book activities. It's built using PHP, MySQL, and basic HTML/tailwind/Bootstrap for the front-end.

## Features

*   Member registration (name, surname, email)
*   Activity selection from a database
*   Reservation management (recording reservations with date)
*   Display of registered members

## Technologies Used

*   PHP
*   MySQL
*   HTML
*   tailwindcss
*   Bootstrap

## Setup and Installation

1.  **Prerequisites:**
    *   PHP (version 7.0 or higher recommended)
    *   MySQL (or MariaDB)
    *   Web server (Apache or Nginx) - XAMPP or WAMP is recommended for local development.

2.  **Database Setup:**
    *   Create a MySQL database named `sallegym` (or your preferred name).
    *   Import the provided SQL schema (see `database/schema.sql` - create this file with the SQL create table statements below) to create the necessary tables:

    ```sql
    CREATE TABLE `membres` (
      `membre_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `nom` VARCHAR(255) NOT NULL,
      `prenom` VARCHAR(255) NOT NULL,
      `email` VARCHAR(255) NOT NULL UNIQUE
    );

    CREATE TABLE `activites` (
      `activite_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `nom` VARCHAR(255) NOT NULL
    );

    CREATE TABLE `reservations` (
      `reservation_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `membre_id` INT NOT NULL,
      `activite_id` INT NOT NULL,
      `date_reservation` DATE NOT NULL,
      FOREIGN KEY (membre_id) REFERENCES membres(membre_id),
      FOREIGN KEY (activite_id) REFERENCES activites(activite_id)
    );
    ```

3.  **Project Files:**
    *   Clone the repository or download the ZIP file.
    *   Place the project files in your web server's document root (e.g., `htdocs` for XAMPP, `www` for WAMP).

4.  **Configuration:**
    *   Create a file named `db_connect.php` in the same directory as `index.php` and `affichage_page.php`.
    *   Add the following code to `db_connect.php`, replacing the placeholders with your database credentials:

    ```php
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "sallegym";

    $conn = mysqli_connect($host, $username, $password, $db);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

   ?>
    ```

6.  **Access the Application:**
    *   Open your web browser and navigate to the project's URL (e.g., `http://localhost/sallegym-reservations/index.php`).

## Usage

*   Fill in the registration form on `index.php` to create a new member and make a reservation.
*   View the list of registered members on `affichage_page.php`.

# Système de Réservation SalleGym

Suivez les étapes ci-dessous pour configurer le **Système de Réservation SalleGym** sur votre machine locale ou un serveur en ligne.

## Prérequis

- PHP (version 7.0 ou supérieure recommandée)
- MySQL (ou MariaDB)
- Serveur web (Apache ou Nginx) — XAMPP ou WAMP est recommandé pour le développement local.

## 1. Installation Locale (Utilisation de XAMPP/WAMP/LAMP)

### 1.1 Installer XAMPP/WAMP (Windows) / LAMP (Linux)

1. **XAMPP (Windows)** :
   - Téléchargez et installez [XAMPP](https://www.apachefriends.org/index.html).
   - Ouvrez le panneau de contrôle XAMPP et lancez les services **Apache** et **MySQL**.

2. **WAMP (Windows)** :
   - Téléchargez et installez [WAMP](http://www.wampserver.com/en/).
   - Démarrez le serveur WAMP et assurez-vous que l'icône devient verte (indiquant qu'il fonctionne).

3. **LAMP (Linux)** :
   - Installez Apache, MySQL, et PHP :
     ```bash
     sudo apt update
     sudo apt install apache2 mysql-server php php-mysqli libapache2-mod-php
     sudo systemctl start apache2
     sudo systemctl start mysql
     ```

### 1.2 Configurer la Base de Données

1. Ouvrez **phpMyAdmin** (`http://localhost/phpmyadmin/`).
2. Créez une nouvelle base de données nommée `sallegym`.
3. Importez le schéma SQL (`database/schema.sql`) dans la base de données.

### 1.3 Cloner le Projet

1. Clonez ce dépôt ou téléchargez le projet sous forme de fichier ZIP.

   ```bash
   git clone https://github.com/your-username/sallegym-reservations.git

