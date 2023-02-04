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
    <title>Crazy Looting</title>
</head>
<body class="accueil">
    <header>
        <h3 class="logo">Crazy Looting</h3>
        <nav class="menu">
            <ul>
                <li class="current-page"><a href="dashboard.php">Accueil</a></li>
                <li><a href="invocation.php">Invocations</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="actions">
            <a href="../../includes/logout.inc.php">Déconnexion</a>
        </div>
    </header>
    <main>
    <div class="left">
        <h1>Bonjour <span><?php echo $_SESSION["username"]; ?></span> !</h1>
        <p>N'est-ce pas un magnifique jour pour quelques loots ?</p>
        <a href="./invocation.php">C'est parti <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="butt" stroke-linejoin="round"><path d="M5 12h13M12 5l7 7-7 7"/></svg></a>
    </div>

    <div class="right">
        <h2>Les nouveautés <h2>
        <div class="news-container">
            <div class="news">
                <h3>La naissance</h3>
                <h4>24 Janv. 2023</h4>
                <p>L'appli vient juste de naître (on compte l'appeler Thierry). On peut encore la considérer comme une beta, beaucoup d'évolutions sont à venir. Le système de loot et de profil sont a un état primitif, unga bunga, malgré ça on peut admirer de magnifiques capybaras un peu partout, ce qui rend la navigation super agréable.</p>
            </div>

            <div class="news">
                <h3>Les invocations !</h3>
                <h4>4 Febr. 2023</h4>
                <p>La page Profil ainsi que la page Invocation sont en phase de finalisation, on a maintenant une petite animation d'invocation qui permet aussi de ne pas spamer comme un porc, puis admirer notre loot dans Profil, là où sont rangées les informations sur l'utilisateur et ses tirages</p>
            </div>
        </div>
    </div>  
         
    </main>
    
</body>
</html>