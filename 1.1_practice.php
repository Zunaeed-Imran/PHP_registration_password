<?php
// login Page

include '1_practice.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2>Welcome to Itlogiko</h2><br>
    <input type="text" name="name" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="button">Submit</button>
  </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD' === 'POST']){
    if(empty($_REQUEST['name'])){
      echo 'Please Enter a user name';
    }elseif($_REQUEST['password']){
      echo 'Please Enter a password';
    }else{
      $sql = "INSERT into `practice1` (name, password) VALUES ('{$_REQUEST['name']}', '{$_REQUEST['password']}')";
    }
}


?>