<!-- Fetches -->

<?php

class UsersView extends Users {
    public function showUser($nameArr) {
        $results = $this->getUser($nameArr); // Got the rows
        echo "Username: " . $results[0]['username'] . "<br>" . $results[0]["created_at"];
    }
}