<?php
  /**
   *
   */
  class delete extends config
  {
    public $id;
    public function __construct($id)
    {
      $this->id = $id;
    }

    public function deleteBrand(){
      $con = $this->con();
      $sql = "DELETE FROM `brand` WHERE `brand_id` = $this->id";
      $data = $con->prepare($sql);

      if($data->execute()){
        return true;
      }else{
        return false;
      }
    }
  }

 ?>
