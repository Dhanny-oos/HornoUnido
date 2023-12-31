<?php
class Connection {
    private $server = "mysql:host=localhost; 
        dbname=H_U";

    private $username = "root";
    private $password = "romanceshameless";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    protected $conn;

    public function open() {
        try {
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Actualmente existe un error en la base de datos, por favor de verificar".$e->getPrevious();
        }
    }

    public function close() {
        $this->conn = null;
    }
}
?>