<?php

session_start();
include('./db/db_config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Browse Developers</title>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400i,700,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/search.css" />
</head>

<body>
    <div class="search-page">
        <nav class="search-nav">
            <div>
                <h3><a class="link increasefont" href="index.php">RemDev</a></h3>
            </div>
            <div class="search-right">
                <ul class="search-ul">
                    <li class="search-li">
                        <a href="search.php">Browse developers</a>
                    </li>
                    <li class="search-li"><a href="#">About Us</a></li>
                    <li class="search-li"><a href="#">Login</a></li>
                    <li class="search-li signup">
                        <a href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <hr class="hr" />
        <section class="search-section">
            <div class="search-header">
                <div>
                    <p class="search-header_primary">Browse Developers</p>
                </div>

                    <?php

                   
                            if(array_key_exists('search', $_GET)){
                      
                    
              
                
                $search = $_GET['search']; 

                            // '%' enables your search return anything that looks like tha value that was entered. Eg HTML returns html, HTML, htmL.

                            $skills = mysqli_query($db, "SELECT * FROM skills WHERE skill_Name LIKE '%".$search."'")or die(mysqli_error($db)); 
                            if( mysqli_num_rows($skills) > 0){
                                     
                                while($show = mysqli_fetch_array($skills))
                                        { 

                                                   echo  "yasss";

                                    break;



                                        }
                                // End while loop...
                             

                            } else{
                                echo "Search returned no results";

                                    }





                    }




                            ?>







                   


                <div class="search-header_secondary">
                <form action="" method="get">
                    <input class="header-inp" type="text" name="search" placeholder="What skills are you looking for?">
                    <input type="submit" name="search" value="Find Developers"</>
                </div>
                </form>
            </div>
        </section>
    </div>
    <section class="developers-section">
        <div class="developers">
            <div class="developers-filter">
                <div class="filter-left">
                    <div class="filter-1">
                        <p class="filter-1_header">Filter by:</p>
                        <select name="country" id="">
                            <option value="Nigeria">Nigeria</option>
                            <option value="canada">canada</option>
                        </select>
                    </div>
                    <div class="filter-1">
                        <select class="input-icon" name="country" id="">
                            <option value="$15/hr">$15/hr</option>
                            <option value="$20/hr">$20/hr</option>
                        </select>
                    </div>
                    <div class="filter-1">
                        <select name="country" id="">
                            <option value="Front-end...">Front-end...</option>
                            <option value="Back-end...">Back-end...</option>
                        </select>
                    </div>
                </div>
                <div class="filter-right">
                    <div class="filter-2">
                        <p class="filter-2_header">Sort by:</p>
                        <select class="input-icon" name="rating" id="">
                            <option value="Top rated">Top rated</option>
                            <option value="Completed Projects">Completed Projects</option>
                        </select>
                    </div>
                </div>
            </div>
            <?php

             $devs = mysqli_query($db, "SELECT * FROM developer LIMIT 4")or die(mysqli_error($db)); ?>
                 <?php  while ($row = mysqli_fetch_array($devs)) { ?>

            <div class="developer-details">
          
               
           
                <div class="developer-img">
                    <img src="<?php echo $row[12];?>" alt="developer picture" class="developer-img_main">
                </div>
                <div class="developer-detail">
                    <p class="developer-name"><?php echo $row[1].' '.$row[2];?></p>
                    <ul class="developer-list">
                        <li class="developer-list_frontend"><?php echo $row[13];?></li>
                        <li class="developer-list_item"><?php echo $row[9];?></li>
                        <li class="developer-list_item"><?php echo $row[8];?></li>
                        <li class="developer-list_item yellow-item"> <i class="fa fa-star" aria-hidden="true"></i> 5.0
                            <span class="number">(400)</span></li>
                    </ul>
                    <p class="developer-text"><?php echo $row[6];?></p>
                    <div class="developer-skills">
                        <ul class="developer-skills_list">
                            <li class="developer-skills_item">HTML</li>
                            <li class="developer-skills_item">CSS</li>
                            <li class="developer-skills_item">Javascript</li>
                            <li class="developer-skills_item">PHP</li>
                            <li class="developer-skills_item">Python</li>
                            <li class="developer-skills_item">Django</li>
                            <li class="developer-skills_item">React</li>
                            <li class="developer-skills_item">Vue JS</li>
                            <li class="developer-skills_item">Node JS</li>
                            <li class="developer-skills_item">Lorem Ipsum</li>
                            <li class="developer-skills_item">+10 more</li>
                        </ul>
                    </div>
                </div>

                <div class="view-profile">
                    <a href="profile.php?<?php echo $row[0];?>" > View profile</a>
                </div>

            
         
             </div><hr>  <?php  } ?> </div>
            <div class="developers-signup">
                <p class="signup-header">Want to browse more developers?</p>
                <input type="submit" name="signup" value="Signup">
            </div>
        </div>
        <div class="company-logos">
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#slack'></use>
            </svg>
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#facebook'></use>
            </svg>
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#tesla'></use>
            </svg>
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#twitter'></use>
            </svg>
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#search'></use>
            </svg>
            <svg class="company-logo">
                <use xlink:href='./asset/sprite.svg#netflix'></use>
            </svg>
        </div>
    </section>
    <section class="bottom-section">
        <div class="footer">
            <div class="footer-1">
                <div class="footer-1_primary">
                    <p class="footer-1_header">What are you waiting for?</p>
                    <p class="footer-1_text">Lets help you bring your dream to life</p>
                </div>
                <div class="footer-search">
                    <div>
                        <input class="footer_inp" type="text" placeholder="What skills are you looking for?">
                    </div>
                    <div class="footer-1_btns">
                        <button class="footer-1_register">Register as developer</button>
                        <p class="footer-1_or">or</p>
                        <button class="footer-1_find">Find developers</button>
                    </div>
                </div>
            </div>
            <div class="footer-2">
                <div class="footer-2_left">
                    <p>&copy; 2019 <span class="footer-2_remdev">RemDev</span></p>
                </div>
                <div class="footer-2_right">
                    <svg class="footer-2_icons">
                        <use xlink:href='./asset/sprite.svg#facebook-1'></use>
                    </svg>
                    <svg class="footer-2_icons">
                        <use xlink:href='./asset/sprite.svg#twitter-1'></use>
                    </svg>
                    <svg class="footer-2_icons">
                        <use xlink:href='./asset/sprite.svg#github'></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
