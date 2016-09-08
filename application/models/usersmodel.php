<?php
    
    require_once "db.php";
    
    class UsersModel extends DB {

        // Add new user  
        function addUser($user) {
            $params = [':name' => $user["name"], ':town' => $user["town"], ':email' => $user["email"], ':password' => $user["password"], ':role' => $user["role"]];
            $sql = 'INSERT INTO users(name, town, email, password, role) VALUES (:name, :town, :email, :password, :role)';
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }

    }
    
?>