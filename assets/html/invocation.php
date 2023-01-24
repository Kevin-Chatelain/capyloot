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
    <title>Capy Looting</title>
</head>
<body>
    <header>
    <h3 class="logo">Crazy Looting</h3>
        <nav class="menu">
            <ul>
                <li><a href="dashboard.php">Accueil</a></li>
                <li class="current-page"><a href="invocation.php">Invocations</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="actions">
            <a href="../../includes/logout.inc.php">Déconnexion</a>
        </div>
    </header>



    <div class="content-container">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="result-name" class="result-name">
            <input type="text" name="result-rarity" class="result-rarity">
            <input type="text" name="result-image" class="result-image">
            <p class="result-stars"></p>

            <input type="submit" name="loot-btn" class="loot-btn" value="Loot a Capybara">
        </div>
    </div>
    

    <script src="../js/loot.js"></script>

    <script>
        document.querySelector('.loot-btn').addEventListener('click', function(e) {
            e.preventDefault();
            loot();
        });
    </script>
    
</body>
</html>