<!DOCTYPE html>  
<html lang="en">  

 <head> 
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

      <title>Show Data from database in Table</title>  

      <link rel="stylesheet" href="style_tables.css">
 </head> 

 <body>  
 <div class="container">  

     <h1>Registerations</h1>

     <!-- <input type="button" name="Return" value="Return to Form" href="index.php"> -->

      <!-- <button type="button" onclick="index.php">Return to Form</button> -->


      <table border="1" cellpadding="0">  
           <tr>  
                <th>#</th>  
                <th>Name</th>  
                <th>Email</th>  
                <th>Phone Number</th>  
                <th>Gender</th>   
                <th>Age</th>   
           </tr>  


           <?php   

                include "connection.php";  



                $select = mysqli_query($conn,"SELECT * FROM datainsert");  
                $num = mysqli_num_rows($select);  

                if($num>0) 
                {  
                     while($result= mysqli_fetch_assoc($select))
                     {  
                         echo "  
                               <tr>  
                                    <td>".$result['id']."</td>  
                                    <td>".$result['Name']."</td>  
                                    <td>".$result['Email']."</td>  
                                    <td>".$result['PhoneNumber']."</td>  
                                    <td>".$result['Gender']."</td>  
                                    <td>".$result['Age']."</td> 
                                    <td>  
                                        <a href='Delete_table_data.php?id=".$result['id']."' class='opt'>Delete</a>  
                                        <a href='Edit_table_data.php?id=".$result['id']."' class='opt'>Edit/Update</a>  
                                    </td> 
                               </tr>  
                          ";  
                     }  
                }  

           ?> 


      </table>  

 </div>  
 </body>  

</html>  