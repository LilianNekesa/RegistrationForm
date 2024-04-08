
<?php


require 'db.php';

 if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO details (Username, Email, Password) VALUES('$name','$email', '$password')";


    mysqli_query($con, $sql);

    echo "<script> alert('Saved successfully')</script>";
 }
?>


<!Doctype html>
<html>
    <head>
        <meta charset="UTF=8">
        <meta name="viewport" content="devide-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="style.css">
           </head>
                  <body>
                     <form>

                         <div class="container">
                            <div class="img">
                                <div class="form-box">
                                   <div class="form">
                                  <h2> Registration Form</h2>
                                       <div class="input-box">
                                          
                                        <label for="">Username</label><br>
                                        <input type="text" name="name" required></input>
                                        
                                
                                  </div>

                                  <div class="input-box">
                                    
                                     <label for="">Email</label><br>
                                     <input type="text" name="email" required></input><br>
                                
                                 </div>


                                 <div class="input-box">
                                  
                                    <label for="">Password</label><br>
                                    <input type="password" name="passwordS" required><br>
                                
                                 </div>
                                 <div class="links">
                                  <a href="a">Forgot Password?</a>
                                  <a href="a">Log In</a><br>
                                  <button type="submit">Sign Up</button>
                                </div>
                            </div>
                         </div>




    </body>
</html>