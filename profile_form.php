<!DOCTYPE = "html">
<?php
if (isset($_POST['submit'])) {
	$hostname = 'localhost';
	$username = 'user';
	$password = '';

	try {
		$dbh = new PDO("mysql:host=$hostname;dbname=remdev", $username, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO teammembers (name, sheet_no, image_Url, specialization, cv_link) VALUES ('".$_POST["name"]."', '".$_POST["shn"]."','".$_POST["photo_url"]."', '".$_POST["specialization"]."', '".$_POST["cv_link"]."')";
		if ($dbh->query($sql)) {
			echo "record inserted successfully";
		} else {
			echo "error inserting record";
		}
		$dbh = null;
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

?>


<html lang="en">
<head>
	<title>Profile form</title>
	<meta name="description" content ="">
	<meta name="author" content = "">
	<meta name ="viewport" content = "width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<style type="text/css">
	body{
		background-color: #001F3F;
		padding:0 5rem 1rem;
		color:#ffffff;
		}
		.mainnav {
    display: flex;
    list-style: none;
    margin: 0;
	}
	.mainnav li {
    padding: 20px;
	}
	.link {
    color: white;
    text-decoration: none;
	}
	.increasefont {
    font-size: 35px;
    font-family: 'Pacifico', cursive;

	}
	.push {
    margin-left: auto;
	}

	.pushleft {
	    padding-right: 50px;
	}
		form{
			display: flex;
			flex-direction:column;
		}
		form input, form h2{
			margin:1rem auto;
			padding: .5rem 0;
		}
		form input{
			width: 50%
		}
		input[type="text"]{
			color: #001F3F;
		}
		.prof-form .btn{
			font-size: 1.2rem;
			cursor: pointer;
			padding: 1.2rem;
			color: #000000;
			border: none;
			background: linear-gradient(to right, #001F3F, #c0c0c0, #001F3F);
			transition:all 0.9s ease-in-out;
	}
	.prof-form .btn:hover{

		color: #ffffff;
		background: linear-gradient(to right,  #c0c0c0, #001F3F, #c0c0c0);
	}
</style>
</head>
<body>
		 <nav class="mainzone">
        <ul class="mainnav">
            <li><a class="link increasefont"href="index.html">RemDev</a></li>
            <li class="push sourcefont"><a class="link" href="index.html">Home</a></li>
            <li class="sourcefont"><a class="link" href="search.html">Browse developers</a></li>
            <li class="pushleft sourcefont"><a class="link" href="about.html">About Us</a></li>

        </ul>
    </nav>
	<div>
		<form class="prof-form" id="prof-form">
			<h2>Upload your membership details</h2>
			<input type="text" name = "name" Placeholder="Full name" required>
			<input type="text" name = "shn" placeholder="Sheet no e.g shn99877" required>
			<input type="text" name ="specialization" placeholder="specialization eg backend" required>
			<input type="text" name="cv_link" placeholder = "profile link" required>
			<input type = "text" name="photo_url" placeholder = "Cloudinary Photo Url" required>
			<input type="submit" value="Submit" name ="submit" class="btn">
		</form>
	</div>
</body>
</html>