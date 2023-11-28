<?php
// Server database page



try{
  $conn  = mysqli_connect('localhost', 'root', '', 'practice1');
}catch(mysqli_sql_exception){
  echo 'Could Not Connect';
}if($conn){
  echo 'You are Connected';
}

?>