<?php
    
    require_once "db.php";
    
    class ApplicationModel extends DB {

        // Add new application  
        function addApplication($app) {
            $params = [':user_id' => $app["user_id"], ':title' => $app["title"], ':description' => $app["description"], ':category_id' => $app["category_id"], ':active' => $app["active"]];
            $sql = 'INSERT INTO applications(user_id, title, description, category_id, active) VALUES (:user_id, :title, :description, :category_id, :active)';
            $sth = $this->dbh->prepare($sql);
            $result = $sth->execute($params);
            return $sth->rowCount();
        }
        
    }
    
?>