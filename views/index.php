<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SALLEGYM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="overflow:hidden;">

<nav class="navbar navbar-expand-lg bg-body-tertiary pt-3">
    <div class="container-fluid">
        <h1><a class="navbar-brand" href="index.php">RESERVATIONS DE ACTIVITES DANS SALLE DE GYM</a></h1>
        <a class="btn btn-outline-success mx-2" href="affichage page.php">LISTE DE RESERVATION</a>
    </div>
</nav>

<form method="POST">
    <div class="form-group">
        <label for="nome">Nom</label>
        <input type="text" class="form-control" name="nome" placeholder="Enter le nom" required>
    </div>
    <div class="form-group">
        <label for="prenome">Prenom</label>
        <input type="text" class="form-control" name="prenome" placeholder="Enter le prenom" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
    <div>
    <select name="activity" class="form-group" >
               
            </select>
    </div>
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>