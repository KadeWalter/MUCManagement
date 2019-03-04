<?php

include_once('db_config.php');

class Database{
    private $host;
    private $user;
    private $pass;
    private $dbname;

    private $conn;
    private $error;

    private $stmt;

    public function __construct($host=DBHOST, $user=DBUSER, $pass=DBPASS, $dbname=DBNAME) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;

        // Set pdo connection string
        $conn_string = 'mysql:host='.$this->host.';dbname='.$this->dbname;

        // Set options
        $options = array (
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
        );

        // Create new PDO instance
        try {
            $this->conn = new PDO($conn_string, $this->user, $this->pass, $options);
        }
        catch(PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->stmt = $this->conn->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if(is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function resultset() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function lastInsertId() {
        return $this->conn->lastInsertId();
    }
}

?>