<?php

  class category extends config
  {
    //function to get category name in database pielyn_db
    function getCategoryName()
    {
      $con = $this->con();
      $sql = "SELECT `category_name` FROM `category`";
      $data = $con->prepare($sql);
      $data->execute();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    }
  }


 ?>
