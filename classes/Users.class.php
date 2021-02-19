<!-- !!!Only this class interacts with the database regarding Users!!! -->

<?php

class Users extends Dbh {
    protected function getUser($name, $password) {
        $sql = "SELECT * FROM users WHERE username = ? && password = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $password]);

        $results = $stmt->fetchAll();
        return $results; // Returning an assoc array.
    }

    protected function setUser($un, $password, $fname, $lname, $age) {
        $sql =
            "INSERT INTO users (
                   username,
                   password,
                   first_name, 
                   last_name, 
                   age)
                   
                   VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$un,
            $password,
            $fname,
            $lname,
            $age]);
    }
}