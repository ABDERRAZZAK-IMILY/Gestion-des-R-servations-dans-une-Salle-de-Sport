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
