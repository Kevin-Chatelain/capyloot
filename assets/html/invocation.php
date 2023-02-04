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

    <main class="invocations">
        <div class="invocated-pannel">
            <div class="invocation-card-container">
                <div class='card-image'>
                    <img src='../img/pulling-up-capy.webp' height=500 width=500>
                </div>
                <div class='card-infos'>
                    <h3>Pulling-up Capy</h3>
                    <h4>Rare</h4>
                </div>
            </div>
            <button class="close-pannel">Fermer</button>
        </div>


        <h1>Les invocations</h1>
        <p>L'heure est venue de tester notre chance</p>
        <div class="content-container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="result-name" class="result-name">
                <input type="hidden" name="result-rarity" class="result-rarity">
                <input type="hidden" name="result-image" class="result-image">
                <p style="display: none;" class="result-stars"></p>

                <input type="submit" name="loot-btn" class="loot-btn" value="Loot">
        </div>
        </div>

    </main>


    <script src="../js/loot.js"></script>

    <script>
        document.querySelector('.loot-btn').addEventListener('click', function (e) {
            e.preventDefault();
            loot();
        });
    </script>

</body>

</html>