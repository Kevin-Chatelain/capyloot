<?php 

class SignupContr extends Signup {

    private $username; 
    private $pwd;
    private $pwdRepeat; 
    private $email;

    public function __construct($username, $pwd, $pwdRepeat, $email) {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidusername() == false) {
            header("location: ../index.php?error=username");
            exit();
        }

        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }

        if($this->pwdMatch() == false) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if($this->usernameTakenCheck() == false) {
            header("location: ../index.php?error=emailtaken");
            exit();
        }

        $this->setUser($this->username, $this->pwd, $this->email);

        
    }

    private function emptyInput() {
        $result; 
        if(empty($this->username) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)) {
            $result = false;
        }

        else {
            $result = true;
        }
        return $result;
    }

    private function invalidusername() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }

        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }

        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdRepeat) {
            $result = false;
        }

        else {
            $result = true;
        }
        return $result;
    }

    private function usernameTakenCheck() {
        $result;
        if(!$this->checkUser($this->username, $this->email)) {
            $result = false;
        }

        else {
            $result = true;
        }
        return $result;
    }

}


?>