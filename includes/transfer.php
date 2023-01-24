<?php 

session_start();

$data = file_get_contents('php://input');
$result = json_decode($data, true);

include "../classes/dbh.classes.php";
include "../classes/capybara.classes.php";

$lootedCapybara = new Capybara($result["name"], $result["rank"], $_SESSION["user_id"], $result["image"]);
$lootedCapybara->register_capybara();           
            

?>