<?php
    class Connection {
        private $servername;
        private $port;
        private $dbname;
        private $charset;
        private $username;
        private $dbpassword;
        
        public function __construct (string $servername, string $port, string $dbname, string $charset, string $username, string $dbpassword) {
            $this->servername = $servername;
            $this->port = $port;
            $this->dbname = $dbname;
            $this->charset = $charset;
            $this->username = $username;
            $this->dbpassword = $dbpassword;
        }

        protected function makeConnection (): PDO {
            try {
                $connection = new PDO("mysql:host=" . $this->servername . "; port=" . $this->port . "; dbname=" . $this->dbname . "; charset=" . $this->charset . ", " . $this->username . ", " . $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                return $connection;
            } catch (PDOException $e) {
                echo "Error: Conexión fallida!!! <br>" . $e->getMessage() . "<br>";
            }
        }
    }
?>