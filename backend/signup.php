<?php
    include('db/db_config.php');


?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Here</title>
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="mainzone">
        <ul class="mainnav">
            <li><a class="link increasefont" href="index.php">RemDev</a></li>
            <li class="push sourcefont"><a class="link" href="index.php">Home</a></li>
            <li class="sourcefont"><a class="link" href="search.php">Browse developers</a></li>
            <li class="pushleft sourcefont"><a class="link" href="">About Us</a></li>

        </ul>
    </nav>

<?php
        // HERE IS VALIDATING THE SIGNUP FORM
            $error = "";
            
            if(array_key_exists('submit', $_POST)){
                
              
                
                $fname = mysqli_real_escape_string($db, $_POST['fname']);   
                
               
                $lname = mysqli_real_escape_string($db, $_POST['lname']);   
               
                $pnum = mysqli_real_escape_string($db, $_POST['pnum']);   
            
                
            
                $email = mysqli_real_escape_string($db, $_POST['email']); 
    
                
                $pwd = mysqli_real_escape_string($db, $_POST['pwd']);   
               

                
                $cpwd = mysqli_real_escape_string($db, $_POST['cpwd']);   
                
               
            
                if ($pwd != $cpwd) {
                           $error = "Passwords do not match";
                                    
                                    }
 

                else{
                
            
            //THE QUERY BELOW IS TO CHECK THAT THE DETAILS SUPPLIED BY THE USER DOESN'T ALREADY EXIST IN OUR DATABASE
            
            $check = mysqli_query($db, "SELECT * FROM developer WHERE email = '".$email."' || password = '".md5($pwd)."'") or die(mysqli_error($db));
            
                if(mysqli_num_rows($check) == 0){ 
                    $insert = mysqli_query($db, "INSERT INTO developer(developer_First_Name, developer_Last_Name, email, password, phone_Number) VALUES (
                                                                    '".$fname."',
                                                                    '".$lname."',
                                                                    '".$email."',
                                                                    '".md5($pwd)."',
                                                                    '".$pnum."'
                                                                
                                                                    )") or die(mysqli_error($db));
                        $reg = "You have successfully registered";
                        header("Location:login.php?reg=$reg");
                    
                } else {
                    
                    $incorrect = "Email or Password Already Exists";
                    header("Location:signup.php?incorrect=$incorrect"); 
                    
                }
                    
            } 

        }
          
        
        //Validate error messages
            if(isset($_GET['incorrect'])){
            $incorrect = $_GET['incorrect'];
        echo '<p align="center">*'.$incorrect."</p>";    

            }
        
            if(isset($_GET['reg'])){
            
                $register = $_GET['reg'];
              echo '<p align="center">*'.$register."</p>";  
                
            }
        
        ?>



    <div class="signup-page">
        <h2 class="center">Create account</h2>
        <div class="form">
            <form class="register-form" action="" method="post">
                <p class="hiredev">Do you want to hire a developer? Go <a class="rmvline" href="">here!</a></p>
                <input type="text" name="fname" placeholder="First name" required="">
                <input type="text" name="lname" placeholder="Last name" required="">
                <input type="email" name="email" placeholder="Email Address" required="">
                 <input type="text" name="pnum" placeholder="Phone Number" required="">
                <input type="password" name="pwd" placeholder="Password" required="">
                <?php
                        echo '<p style="color:#001F3F;">'.$error.'</p>';

                ?>
                <input type="password" name="cpwd" placeholder="Confirm password" required="">
              <input type="submit" name="submit" value="Submit">
                <p class="message">Already have an account? <a class="login" href="login.php">Log In</a></p>
            </form>
        </div>
    </div>
</body>

</html>