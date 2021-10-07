 <!DOCTYPE html>
 <html>
 <head>
      
 </head>
 <body>
    

 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
  user name: <input type="text" name = "name" required><br><br>
  gmail    : <input type="text" name = "email"required ><br><br>
  website  : <input type="text" name = "website" required><br><br>
  comments : <textarea name="comment" required  cols="30" rows="5"></textarea><br><br>

  <input type="radio" name = "gender"   value="female">Female
  <input type="radio" name = "gender"   value="male">male
  <input type="radio" name = "gender"   value="other">Other

  <input type="submit" name="submit" value="Submit">         
  


 </form>
  
  




 <?php
 
 

$name =  $email = $gender = $comment = $website ="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){


    $name = validate($_POST["name"]);
    $email= validate($_POST["email"]);
    $website= validate($_POST["website"]);
    $comment= validate($_POST["comment"]);
    $gender = validate($_POST["gender"]);



  }







echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;



function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
 
 
 
 
  


  
<!-- //  echo $_POST["name"];
//  echo "<br>";
//  echo $_POST["email"];
//  echo $_POST["website"];
//  echo $_POST["ecomments"];
//  echo $_POST["gender"]; -->

  

 <!-- <form action="form_get.php" method="get">
Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
<input type="submit">
</form>
   -->

     
 </body>
 </html>