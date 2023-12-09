<?php



    try{
        $conn = mysqli_connect('localhost', 
                                'root', 
                                '', 
                                'businessdb');
    }
    catch(mysqli_sql_exception){
        echo "Could Not Connect!";
    }

       if($conn){
         echo "You are connected!";
       }                

?>