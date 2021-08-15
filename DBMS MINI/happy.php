<?php
include 'index.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> atm </title>
	<link rel="stylesheet" href="css/stylen.css">
	<link rel="icon" href="images/atm.png" type="image/icon type">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
</head> 
<body>
   <?php
   $sql = "SELECT sname , name , company , year_of_release , link FROM song,singer,producer,sungby,producedby WHERE mid=1 and lang='English' and song.sid=sungby.sid and singer.singer_id=sungby.singer_id and producer.pid=producedby.pid and song.sid=producedby.sid order by rand() limit 6 ";
   $result = $conn->query($sql);
    $datas=array();
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datas[]=$row;
  }
}

    ?>
	<section>
     <!--navigation------->
    	<nav>
    		
    	<a class="navbar-brand" href="#"> 
            <img src= "images/atm.png"
            width="90" height="50" alt=""> 
        </a>

        <a href="happy.html"></a>
        <div class="logo">Music recommendation system</div>

     	
     	
     		<ul>
     			<li><a href="index1.php" class="active">Home</a></li>
     			<li><a href="Search.html" class="active">Search</a></li>
     			<li><a href="index1.php#About-Header">About</a></li>
     			<li><a href="index1.php#Contact-Header">Contact</a></li>
    		</ul>

    			
        <div class="toggle"></div>
    		
		</nav>
        
      </section> 
<p>
    	<h1 style="color:#DAF7A6 ;font-family: 'Great Vibes', cursive; text-align: center;font-size: 3em; font-stretch: ultra-expanded; letter-spacing: 5px ; "> Happy </h1>
</p>
	<div class="container">
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/1-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[0]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[0]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive; color: powderblue;"><?php echo $datas[0]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[0]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[0]["link"] ?></p>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/22-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[1]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[1]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive; color: powderblue;"><?php echo $datas[1]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[1]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[1]["link"] ?></p>
				</div>
				
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/33-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[2]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[2]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive; color: powderblue;"><?php echo $datas[2]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[2]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[2]["link"] ?></p>
				</div>
				
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/4-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[3]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[3]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive; color: powderblue;"><?php echo $datas[3]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[3]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[3]["link"] ?></p>
				</div>
				
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/55-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[4]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[4]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive; color: powderblue;"><?php echo $datas[4]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[4]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[4]["link"] ?></p>
				</div>
				
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="happyimages/6-.jpg">
			</div>
			<div class="details">
				<div class="content">
				<h2><?php echo $datas[5]["sname"] ?></h2>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[5]["name"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;color: powderblue;"><?php echo $datas[5]["company"] ?></p>
				<p style="font-family: 'Balsamiq Sans', cursive;"><?php echo $datas[5]["year_of_release"] ?></p>
				<p class="play"><?php echo $datas[5]["link"] ?></p>
				</div>
				
			</div>
		</div>
	</div>


	<script text="text/javascript" src="js/jquery.js"></script>
        <script text="text/javascript">
            $(document).ready(function(){
                $('.toggle').click(function(){
                    $('.toggle').toggleClass('active')
                    $('nav').toggleClass('active')
                })
            })
        </script>
    
</body>
</html>