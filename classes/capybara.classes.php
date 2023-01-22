<?php 

class Capybara extends Dbh {

    private $name;
    private $rank;
    private $user_id;

    public function __construct($name, $rank, $user_id) {
        $this->name = $name;
        $this->rank = $rank;
        $this->user_id = $user_id;
    }

    public function register_capybara() {
        $stmt = $this->connect()->prepare('INSERT INTO capybaras (name, rank, user_id) VALUES (?, ?, ?);');

        if(!$stmt->execute(array($this->name, $this->rank, $this->user_id))) {
            $stmt = null;
            exit();
        }
    }
}

?>