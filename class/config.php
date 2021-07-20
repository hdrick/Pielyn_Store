<?php

  class config{
    private $user = "root";
    private $password = "123456";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE =>
    PDO::FETCH_ASSOC);
    public $pdo = null;

    public function con(){
      try {
        $this->pdo = new PDO ("mysql:host=localhost;dbname=pielyn_db", $this->user, $this->password, $this->options);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
      return $this->pdo;
    }
  }

 ?>
