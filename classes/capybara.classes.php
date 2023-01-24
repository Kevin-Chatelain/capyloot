<?php 

class Capybara extends Dbh {

    private $name;
    private $rank;
    private $user_id;
    private $image;

    public function __construct($name, $rank, $user_id, $image) {
        $this->name = $name;
        $this->rank = $rank;
        $this->user_id = $user_id;
        $this->image = $image;
    }

    public function register_capybara() {
        $stmt = $this->connect()->prepare('INSERT INTO capybaras (name, rank, user_id, image) VALUES (?, ?, ?, ?);');

        if(!$stmt->execute(array($this->name, $this->rank, $this->user_id, $this->image))) {
            $stmt = null;
            exit();
        }
    }
}

?>