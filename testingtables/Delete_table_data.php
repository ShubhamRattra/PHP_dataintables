<?php   

include "connection.php";

 if(isset($_GET['id'])) 
  {  
       $id=$_GET['id'];  

       $delete=mysqli_query($conn,"DELETE FROM datainsert WHERE id='$id'");  
       if ($delete) 
       {  
         header("location:show_data.php"); 
         die();  
       }  
  } 

?>  