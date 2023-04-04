<?php   

 include "connection.php";  

 $msg= "";  
 $Name= "";
 $Email= "";
 $PhoneNumber= "";
 $Gender= "";
 $Age= "";

 if (isset($_POST['submit'])) 
 { 

      $Name= $_POST['Name'];
      $Email= $_POST['Email'];
      $PhoneNumber= $_POST['PhoneNumber'];
      $Gender= $_POST['Gender'];
      $Age= $_POST['Age'];

      $id= $_GET['id'];  

      $select= mysqli_query($conn,"SELECT * FROM datainsert WHERE id='$id'");  
      $data= mysqli_fetch_assoc($select);
          
           $insert= 
           mysqli_query($conn,
               "
               INSERT INTO datainsert (Name, Email, PhoneNumber, Gender, Age, Createdtime) 
               VALUES ('$Name','$Email','$PhoneNumber','$Gender','$Age', NOW())
               ");  

           if($insert) 
           {  
             //$msg="Data inserted successfully"; 
             header("location:show_data.php");  
           }
           else
           {  
             $msg="Error, Data not inserted!";  
           }  
  
 }  

?>  



 <!DOCTYPE html>  
 <html lang="en">  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Form</title>  

      <link rel="stylesheet" href="style.css"> 
 </head>

 <body>  
 <div class="container">  

      <h1>Registeration Form</h1>

      <form method="post" action=""> 

          <input type="text" name="Name" placeholder="Enter your Name" class="data-insert" value="<?php echo $Name; ?>">  

          <input type="email" name="Email" placeholder="Enter your Email" class="data-insert" value="<?php echo $Email; ?>">  

          <input type="text" name="PhoneNumber" maxlength="10" placeholder="Enter your Phone Number" class="data-insert" value="<?php echo $PhoneNumber; ?>">  

          Gender: 
          <input type="radio" id="male" name="Gender" value="Male"> 
          <label for="male">Male</label>
          <input type="radio" id="female" name="Gender" value="Female"> 
          <label for="female">Female</label>

          <input type="text" name="Age" maxlength="2" placeholder="Enter your Age" class="data-insert" value="<?php echo $Age; ?>">   

          <br><br> 
          <input type="submit" name="submit" class="sub_btn_Sub" value="Submit"> 
          <br><br>  
          <input type="reset" name="reset" class="sub_btn_Res" value="Reset">
          <br>  

          <span><?php echo $msg; ?></span>  

      </form> 

 </div>  
 </body>  
 </html>  