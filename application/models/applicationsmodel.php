<?php

require "db.php";

class ApplicationsModel extends DB{
  
  // Add new application  
  function addApplication($app) {
      $params = [':user_id' => '1', ':title' => $app["title"], ':description' => $app["description"], 
                 ':category_id' => $app["category_id"], ':active' => $app["active"]];
      $sql = 'INSERT INTO applications(user_id, title, description, category_id, active) 
                   VALUES (:user_id, :title, :description, :category_id, :active)';
      $sth = $this->dbh->prepare($sql);
      $result = $sth->execute($params);
      return $sth->rowCount();
  }
    
  function getAll(){
    
    $sql = 'SELECT * FROM applications WHERE active = 1';
    $sth = $this->dbh-> prepare($sql);
    $sth->execute();
    
    return $sth->fetchAll(PDO::FETCH_ASSOC);
    
  }
    
}//class end