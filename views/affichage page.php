<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage de rservatyions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<?php
include('/xampp/htdocs/brief/Gestion-des-R-servations-dans-une-Salle-de-Sport/views/db_connect.php');

$sq = "SELECT * FROM membres";

$rm = mysqli_query($conn, $sq);
?>


    <div class="overflow-x-auto p-4 bg-white rounded-lg shadow-md">
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead class="bg-orange-700 text-white">
            <tr>
                <th class="px-4 py-2 border border-gray-300">ID Membre</th>
                <th class="px-4 py-2 border border-gray-300">Nom</th>
                <th class="px-4 py-2 border border-gray-300">Prenom</th>
                <th class="px-4 py-2 border border-gray-300">Email</th>
                <!-- <th class="px-4 py-2 border border-gray-300">nom de resivation</th>
                <th class="px-4 py-2 border border-gray-300">description de l'activity</th> -->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rm as $membre) :?>
            <tr class="odd:bg-purple-50 even:bg-purple-100 hover:bg-purple-200">
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['membre_id']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['nom']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['prenom']) ?></td>
                <td class="px-4 py-2 border border-gray-300"><?= htmlspecialchars($membre['email']) ?>    
            </tr>
        <?php endforeach; ?>
           
    </table>
</div>
</body>
</html>
