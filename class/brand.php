<?php
  class brand extends config
  {
    function getBrandName(){
      $con = $this->con();

      $sql = "SELECT * FROM `brand`";
      $data = $con->prepare($sql);
      $data->execute();
      $result = $data->fetchAll(PDO::FETCH_ASSOC);

      foreach ($result as $data) {
        echo "<tr>
                  <td>$data[brand_name]</td>
                  <td>
                      <a class='update' href='brand.php?update=$data[brand_id]'>update</a>
                      <a class='delete' href='brand.php?delete=$data[brand_id]'>delete</a>
                  </td>
              </tr>";
      }
    }

  }

 ?>
