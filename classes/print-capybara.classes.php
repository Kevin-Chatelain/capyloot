<?php 

class printCapybara extends Dbh {

    private $user_id;

    public function __construct($user_id) {
        $this->user_id = $user_id;
    }

    public function print_user_capybaras() {
        $stmt = $this->connect()->prepare('SELECT * FROM capybaras WHERE user_id = ?');

        if(!$stmt->execute(array($this->user_id))) {
            $stmt = null;
            exit();
        }
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $value) {
            echo "<div class='looted-card'> <div class='card-image'><img src='../img/".$value["image"].".webp' height=500 width=500></div> <div class='card-infos'> <h3>".$value["name"]."</h3> <h4>".$value["rank"]."</h4></div></div>";
        }

        



        
    }
}


?>