<?php

class Signup extends Dbh {

    protected function setUser($username, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, email, password, user_id) VALUES (?, ?, ?, ?);');

        function get_guid() {
            $data = PHP_MAJOR_VERSION < 7 ? openssl_random_pseudo_bytes(16) : random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);    // Set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);    // Set bits 6-7 to 10
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        $hashedPwd = crypt($pwd);
        $uuid = get_guid();

        if(!$stmt->execute(array($username, $email, $hashedPwd, $uuid))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;


    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email =?;');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }

        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}