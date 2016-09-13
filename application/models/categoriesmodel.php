<?php
    
    require_once "db.php";
    
    class CategoriesModel extends DB {

        // Get categories from db
        function getCategories() {
            $sql = 'SELECT * FROM categories';
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
    
?>
