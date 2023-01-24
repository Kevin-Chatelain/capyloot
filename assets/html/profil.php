<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/dashboard.css">
    <title>Document</title>
</head>
<body>
<header>
        <h3 class="logo">Crazy Looting</h3>
        <nav class="menu">
            <ul>
                <li><a href="dashboard.php">Accueil</a></li>
                <li><a href="invocation.php">Invocations</a></li>
                <li class="current-page"><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="actions">
            <a href="../../includes/logout.inc.php">Déconnexion</a>
        </div>
    </header>

    <main class="profil">

        <h1>Mon profil</h1>
        <p>C'est ici qu'on peut voir et gérer nos loots</p>

        <div class="loot-container">
            <?php 

                include "../../classes/dbh.classes.php";
                include "../../classes/print-capybara.classes.php";

                $capyData = new printCapybara($_SESSION["user_id"]);
                $capyData->print_user_capybaras();     

            ?>
        </div>

    </main>

    
    
</body>
</html>