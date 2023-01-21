<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Capy Looting</title>
</head>
<body>
    <header>
        <div class="logo">Capybara Looting</div>
        <nav class="menu">
            <ul>
                <li><a href="dashboard.php">Accueil</a></li>
                <li><a href="invocation.php">Invocations</a></li>
                <li><a href="profil.php">Profil</a></li>
            </ul>
        </nav>
        <div class="actions">
            <p><?php echo $_SESSION["username"]; ?></p>
            <a href="../../includes/logout.inc.php">Déconnexion</a>
        </div>
    </header>



    <div class="content-container">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" name="loot-btn" value="Loot a Capybara">
            <input type="text" name="result-name" class="result-name">
            <input type="text" name="result-rarity" class="result-rarity">
            <p class="result-stars"></p>
        </div>
    </div>
    

    <script src="../js/loot.js"></script>

    <?php 

        if(isset($_POST['loot-btn'])) {
            echo '<script type="text/javascript"> loot(); </script>';

            $name = $_POST['result-name'];
            $rarity = $_POST['result-rarity'];

        }

    ?>
    
</body>
</html>