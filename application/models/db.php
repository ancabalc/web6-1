<?php

// Set DB configs
    define("MySQL_USER", getenv('C9_USER'));
    define("MySQL_PASSWORD", "");
    define("MySQL_DB_NAME", "webapp");
    define("MySQL_HOST", getenv('IP'));

    class DB {
        protected $dbh;
        
        function __construct() {
            try {
                // Set connection on class property
                // include(APPPATH.'config/database'.EXT);
                // $conn = mysql_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password']);

                // mysql_select_db($db['default']['database'], $conn);
                
                $this->dbh = new PDO('mysql:host=' . MySQL_HOST .';dbname=' . MySQL_DB_NAME, MySQL_USER, MySQL_PASSWORD);
            } catch (PDOException $e) {
                print "Error!:" . $e->getMessage() . "<br/>";
            die();
            }
        }
    }
    
?>