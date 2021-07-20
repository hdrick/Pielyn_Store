<?php

function login(){
  if (isset($_POST['submit'])) {
    // code...
    $password = md5($_POST['password']);
    $username = $_POST['username'];

    $login = new login($username, $password);
    $login->addminLogin();
  }
}

function displayBrand(){
  $d = new brand();
  $d->getBrandName();
}

function delete_brand(){
  if(!empty($_GET['delete'])){
    $d = new delete($_GET['delete']);
    if($d->deleteBrand()){
      echo "Brand Deleted successfully!";
    }else{
      echo "Brand Delete Error!";
    }
  }
}

function displayCategory(){
  $d = new category();

  foreach($d->getCategoryName() as $data){
    echo "<tr>
              <td>$data[category_name]</td>
              <td>
                <a class='update' href='#'>update</a>
                <a class='delete' href='#'>delete</a>
              </td>
          </tr>";
  }
}

?>
