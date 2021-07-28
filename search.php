<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles CSS -->
    <style>
        .sujet {
            display: flex;
            flex-direction: column;
            margin: 1em 0;
            padding: 1em;
            background: #eee;
            cursor: pointer;
            transition: .5s;
        }

        .sujet:hover {
            background: #ddd;
        }

        .sujet h3 {
            margin: 0;
        }

        .sujet .infos {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=onlefait;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $bdd->exec("SET CHARACTER SET utf8");
        }
        catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
        }

        $q = $_GET['q'];

        if(isset($q) && trim($q) != null) {
            $sql="SELECT * FROM `sujets` WHERE LOWER(`libelle`) LIKE LOWER(:search) OR LOWER(`description`) LIKE LOWER(:search) collate utf8_general_ci;;";
            $sujets = $bdd->prepare($sql);
            $sujets->bindValue(':search','%'.$q.'%');
            $sujets->execute();
            if($sujets->rowCount() > 0) {
                ?>
                <h1>Recherche sur <span><?php echo "'$q'" ?></span>, <span><?php echo $sujets->rowCount() ?></span> résultat<?php echo $sujets->rowCount() == 1 ? '' : 's' ?> trouvé<?php echo $sujets->rowCount() == 1 ? '' : 's' ?></h1>
                <?php
            } else {
                ?>
                <h1>Aucun résultat trouvé sur <span><?php echo "'$q'" ?></span></h1>
                <a href="sujets/create.php?libelle=<?php echo $q ?>">Cliquez sur ce lien pour en faire un sujet</a>
            <?php
            }
            // echo '<ul>';
                while ($donnees = $sujets->fetch()){
                    ?>
                    <div class="sujet"> 
                        <h3 class="libelle"><?php echo $donnees['libelle'] ?></h3>
                        <div class="infos">
                            <span class="auteur"><?php echo $donnees['auteur'] ?></span>
                            <span class="publication"><?php echo $donnees['date_publication'] ?></span>
                        </div>
                        <div class="description"><?php echo $donnees['description'] ?></div>
                    </div>
                <?php
                }
            // echo '</ul>';

            $sujets->closeCursor();

        } else {
            var_dump(0);
        }

    ?>

</body>
</html>