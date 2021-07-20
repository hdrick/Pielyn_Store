<?php

  class login extends config{
    public $username;
    public $password;

    public function __construct($username, $password){
      $this->username = $username;
      $this->password = $password;
    }

    public function addminLogin(){
      $con = $this->con();

      // $sql = "SELECT * FROM admin WHERE username=? AND password=?";
      // $data = $con->prepare("SELECT * FROM admin WHERE username=? AND password=?");
      // $data->execute([$username, $password,]);
      // $user = $data->fetch();
      // $total = $data->rowCount();

      $stmt = $con->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
      $stmt->execute([$this->username, $this->password,]);
      // $user = $stmt->fetch(); // to have access on users information
      $total = $stmt->rowCount();


      if ($total >0) {
        header("Location: index.php");
      }else{
              echo "Failed!";
      }
    }
  }
?>
