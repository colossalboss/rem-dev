<!DOCTYPE = "html">
<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';


	try{
	$conn = new PDO("mysql:host=$hostname;dbname=remdev", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e)
	{
		echo $conn . "<br>" .$e->getMessage();
	}
?>


<html lang="en">
<head>
	<title>Our team</title>
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

	.sourcefont {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 17px;
    line-height: 25px;
	}
	.content{
		display: flex;
		justify-content:center;
	}
	.container{
		width: 70%;
		text-align: center;
		font-family: 'calibri';
		font-size: 1.5rem;
	}
	section{
		padding-bottom: 4rem;
	}
	section:first-child{
		padding-bottom: 0;
	}
	section:last-child{
		padding-bottom: 0;
	}
	#main-head hr{
		width: 10rem;
	}
	 #main-head h2{
	 	letter-spacing: 0.3rem;
	 }
	img{
		width: 150px;
		height: 150px;
		border-radius: 100%;
		padding: 0 4rem;
	}

	.pics-tab{
		display: flex;
		flex-wrap:wrap;
		justify-content:center;
		text-align: center;
		padding: 0;
		margin: 0;
		
	}
	.pics-tab div{
		padding:0;
		width: 33.33%;
		margin: 0;
	}
	.pics-tab a{
		color: #ffffff;
		text-decoration: none;
		text-align: center;
	}

	.pics-tab p{

		text-align: center;
	}
	.pics-tab:last-child{
		display: flex;
		justify-content:center;
	}
	.last-pcs{
		display: flex;
		justify-content:space-between;
		text-align: space-around;
	}

	@media only screen and (max-width: 600px){
		.pics-tab div{
			width: 100%;
		}
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
    <div class="content">
		<div class="container">
			<section id="main-head">
				<hr>
				<h2>OUR TEAM</h2>
				<hr>
			</section>
			<section id="ui">
				<h3>UI/UX DESIGNERS - DIGITAL MARKETING-MOBILE-PROJECT MANAGER</h3>
				<div class="team-pics-tab">
					<div class="ui-team">
						<div class="pics-tab">

							<?php 
							$spec1 = "UX/UX";
							//$spec2 ="Backend";
							$stmt = $conn->prepare("SELECT * FROM teammembers WHERE specialization = ?");	
							$stmt->bindParam(1, $spec1, PDO::PARAM_STR);
							//$stmt->bindParam(2, $spec2, PDO::PARAM_STR);
							$stmt->execute();		
							while ($row = $stmt->fetch()) {
								echo "<div><a href='".$row['cv_Link']."'><img src='".$row['image_Url']."'><p>".$row['name']."</p></a></div>";
							
						};
						?>
						</div>
						
					</div>
				</div>
			</section>
			<section id="frontend">
				<h3>FRONTEND  DEVELOPERS</h3>
				<div class="team-pics-tab">
					<div class="ui-team">
						<div class="pics-tab">
														<?php 
							$spec1 = "Frontend";
							//$spec2 ="Backend";
							$stmt = $conn->prepare("SELECT * FROM teammembers WHERE specialization = ?");	
							$stmt->bindParam(1, $spec1, PDO::PARAM_STR);
							//$stmt->bindParam(2, $spec2, PDO::PARAM_STR);
							$stmt->execute();		
							while ($row = $stmt->fetch()) {
								echo "<div><a href='".$row['cv_Link']."'><img src='".$row['image_Url']."'><p>".$row['name']."</p></a></div>";
							
						};
						?>
						</div>
					</div>
				</div>
			</section>
			<section id="backend">
				<h3>BACKEND  DEVELOPERS</h3>
				<div class="team-pics-tab">
					<div class="ui-team">
						<div class="pics-tab">	
						<?php 
							//$spec1 = "Frontend";
							$spec2 ="Backend";
							$stmt = $conn->prepare("SELECT * FROM teammembers WHERE specialization = ?");	
							//$stmt->bindParam(1, $spec1, PDO::PARAM_STR);
							$stmt->bindParam(1, $spec2, PDO::PARAM_STR);
							$stmt->execute();		
							while ($row = $stmt->fetch()) {
								echo "<div><a href='".$row['cv_Link']."'><img src='".$row['image_Url']."'><p>".$row['name']."</p></a></div>";
							
						};
						?>	
						</div>
				
			
					</div>
				</div>
			</section>
		</div>
	</div>	
</body>
</html>