<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moteur de recherche</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Espace de recherche pour sujets</h1>
    <form action="search.php" method="GET">
        <input type="text" class="search" name="q" placeholder="Entrez ce que vous cherchez">
        <button type="submt"><i class="fa fa-search"></i> Rechercher</button>
    </form>
</body>
</html>