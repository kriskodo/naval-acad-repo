<!-- Updates(Inserting, updating, creating...)[DDL, DML] -->
<!--
*   We are doing this because we have to make sure
*   our Users class only interacts with the
*   database and does not do anything else.
-->

<?php

class UsersController extends Users {
    public function createUser($un, $password, $fname, $lname, $age) {
        $this->setUser($un, $password, $fname, $lname, $age);
    }

    public function checkUser($name) {
        return $this->getUser($name);
    }
}