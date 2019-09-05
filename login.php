<?php
    include('db/db_config.php');



?>

<!DOCTYPE html>

<html>

<head>

</head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Here</title>
    <link rel="stylesheet" href="Login page CSS style.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<body>
    <nav class="mainzone">
        <ul class="mainnav">
            <li class="link increasefont" href="index.html">RemDev</li>
            <li class="push sourcefont"><a class="link" href="index.html">Home</a></li>
            <li class="sourcefont"><a class="link" href="search.html">Browse developers</a></li>
            <li class="pushleft sourcefont"><a class="link" href="">About Us</a></li>
        </ul>
    </nav>
    <div class="login-page">
        <h2 class="center">Welcome Back</h2>

<?php
if(array_key_exists('login', $_POST)) {
    //I INITIALIZED MY ERROR ARRAY
    $error = array();
    
        
        
        $email = mysqli_escape_string($db, $_POST['email']);
      
        
            $pword = mysqli_escape_string($db, $_POST['pword']);
           
    
                  
                        
            $query = mysqli_query($db, "SELECT * FROM developer WHERE email= '".$email."' AND password= '".md5($pword)."'")or die(mysqli_error($db));
                        
                        
                        if(mysqli_num_rows($query) == 1){
                            
                            $row = mysqli_fetch_array($query);
                                
                                $_SESSION['dev_id'] = $row['developer_ID'];
                                $_SESSION['dev_name'] = $row['developer_Firstname'].' '.$row['developer_Lastname'];
                                $_SESSION['e_addy'] = $row['email'];
                                header("Location: profilepage.php");
                            
                            
                        } else {
                            
                            $invalid = "Invalid email and/or password. Please try again";
                            header("Location:login.php?invalid=$invalid"); 
                        }
                        
                  
                        
                   
            
    
    } // CLOSE OF GENERAL IF


if(isset($_GET['invalid'])){
            
                $invalid = $_GET['invalid'];
                echo '<p class="error">*'.$invalid."</p>";  
                
            }



?>


        <div class="form">
            <form class="login-form" method="post" action="">

                <input type="email" placeholder="Email Address" name="email">
                <input type="password" placeholder="Password" name="pword">

                <input type="submit" name="login">
              <p class="forgotpsw"><a class="login" href="forgotpsw.html">Forgot password</a></p>
                <p class="message">New here?  <a class="login" href="Create Account.html">Create Account</a></p>
            </form>
        </div>
    </div>
</body>

</html>
