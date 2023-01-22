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

        echo '<pre>';
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $value) {
            echo $value["name"], "<br>", $value["rank"];
            echo "<br>", "<br>";

         
        }
    }
}


?>