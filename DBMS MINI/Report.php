<?php
include 'index.php';
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title> atm </title>
	<link rel="stylesheet" href="css/stylen.css">
	<link rel="stylesheet" href="css/styleReport.css">
	<link rel="icon" href="images/atm.png" type="image/icon type">
	<style type="text/css">
		table, th, td {
             border: 1px solid black;
               }
		table{

			width: 80%;
			color: #02FB8E;
			font-family: monospace;
			font-size: 15px;
			text-align: center;
			align-items: center;
		}
		th{
			border: 1px solid black;
			background:rgba(218, 247, 166,0.5);
			color:white;
			font-family: 'Satisfy', cursive;
			font-stretch: ultra-expanded; 
			letter-spacing: 3px ; 

		}

		tr:nth-child(even){background: rgba(2, 251, 142,.2); }
		
		td{
			border: 1px solid black;
			font-family: 'Cantarell', sans-serif;
			color: #DAF7A6;
		}
		
		.my_class{
			text-align:center;
			font-family: 'Cantarell', sans-serif;
			color: #DAF7A6;
			font-size: 10px;
		}
		.center {
  margin-left: auto;
  margin-right: auto;
}
	</style>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital@1&display=swap" rel="stylesheet">
</head> 
<body>
   <?php
   $sql = "SELECT count(*) as tSongs FROM song";
   $result = $conn->query($sql);
    
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $NoOfRecords=$row['tSongs'];
  }
}

$sql1 = "SELECT count(*) as tSinger FROM singer";
   $result = $conn->query($sql1);
    
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $NoOfSinger=$row['tSinger'];
  }
}

$sql2 = "SELECT count(*) as tProducer FROM producer";
   $result = $conn->query($sql2);
    
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $NoOfProducer=$row['tProducer'];
  }
}

$sql3 = "SELECT name,count(sungby.singer_id) as tot1 FROM song,singer,sungby WHERE song.sid=sungby.sid and singer.singer_id=sungby.singer_id group by sungby.singer_id order by count(sungby.singer_id) desc";
$result = $conn->query($sql3);
$datas=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datas[]=$row;
  }
}

$sql4 = "SELECT company ,count(producedby.pid) as tot2 FROM song,producer,producedby WHERE producer.pid=producedby.pid and song.sid=producedby.sid group by producedby.pid order by count(producedby.pid) desc";
$result = $conn->query($sql4);
$datap=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datap[]=$row;
  }
}
$sql5 = "SELECT lang,count(lang) as tot3 from song group by lang";
$result = $conn->query($sql5);
$datal=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datal[]=$row;
  }
}
$sql6 = "SELECT year_of_release , COUNT(year_of_release) as tot4 FROM song group BY year_of_release ORDER BY year_of_release ";
$result = $conn->query($sql6);
$datay=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datay[]=$row;
  }
}

$sql7 = "SELECT mname , COUNT(mid) as tot5 FROM song NATURAL JOIN mood group BY mid ORDER BY mid";
$result = $conn->query($sql7);
$datam=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datam[]=$row;
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
    	<h1 style="color:#DAF7A6 ;font-family: 'Great Vibes', cursive; text-align: center;font-size: 3em; font-stretch: ultra-expanded; letter-spacing: 5px ; "> Report </h1>
</p>

<div class="container">
		<div class="box">
		<button>
		<h1 style="font-family: 'Satisfy', cursive;">Total Songs:  <?php echo $NoOfRecords ?></h1>	
		</div>
	</button>

		<div class="box">
			
		   <button>
		 <h1 style="font-family: 'Satisfy', cursive;">Total Singers:  <?php echo $NoOfSinger ?></h1>
			</div></button>

		<div class="box">
			<button>
				<h1 style="font-family: 'Satisfy', cursive;">Total Producers:  <?php echo $NoOfProducer ?></h1>
			</div>
			</button>

		
	</div>

<p>
    	<h1 style="color:#DAF7A6 ;font-family: 'Great Vibes', cursive; text-align: center;font-size: 3em; font-stretch: ultra-expanded; letter-spacing: 5px ; "> Details </h1>
</p>

<p>
    	<h2 style="color:#FFC300 ;font-family: 'Zilla Slab', serif; text-align: center; font-stretch: ultra-expanded; letter-spacing: 3px ; "> No of Songs of Each Language </h2>
</p>
<table class="center">
	<tr>
		<th>Language</th>
		<th>No of Song</th>
		</tr>
		<?php for ($i = 0; $i < count($datal); $i++){
  echo "<tr><td>".$datal[$i]["lang"]."</td><td>".$datal[$i]["tot3"]."</td></tr>"; 
  
}
?>
</table>


<p>
    	<h2 style="color:#FFC300 ;font-family: 'Zilla Slab', serif; text-align: center; font-stretch: ultra-expanded; letter-spacing: 3px ; "> No of Songs of Each Mood </h2>
</p>
<table class="center">
	<tr>
		<th>Mood</th>
		<th>No of Song</th>
		</tr>
		<?php for ($i = 0; $i < count($datam); $i++){
  echo "<tr><td>".$datam[$i]["mname"]."</td><td>".$datam[$i]["tot5"]."</td></tr>"; 
  
}
?>
</table>


<p>
    	<h2 style="color:#FFC300 ;font-family: 'Zilla Slab', serif; text-align: center; font-stretch: ultra-expanded; letter-spacing: 3px ; "> No of Songs of Each Year </h2>
</p>
<table style ="width: 60%;" class="center">
	<tr>
		<th>Year</th>
		<th>No of Song</th>
		</tr>
		<?php for ($i = 0; $i < count($datay); $i++){
  echo "<tr><td>".$datay[$i]["year_of_release"]."</td><td>".$datay[$i]["tot4"]."</td></tr>"; 
  
}
?>
</table>



<p>
    	<h2 style="color:#FFC300 ;font-family: 'Zilla Slab', serif; text-align: center; font-stretch: ultra-expanded; letter-spacing: 3px ; "> No of Songs of Each Singer </h2>
</p>
<table class="center">
	<tr>
		<th>Singer</th>
		<th>No of Song</th>
		</tr>
		<?php for ($i = 0; $i < count($datas); $i++){
  echo "<tr><td>".$datas[$i]["name"]."</td><td>".$datas[$i]["tot1"]."</td></tr>"; 
  
}
?>
</table>

<p>
    	<h2 style="color:#FFC300 ;font-family: 'Zilla Slab', serif; text-align: center; font-stretch: ultra-expanded; letter-spacing: 3px ; "> No of Songs of Each Producer </h2>
</p>
<table class="center">
	<tr>
		<th>Company</th>
		<th>No of Song</th>
		</tr>
		<?php for ($i = 0; $i < count($datap); $i++){
  echo "<tr><td>".$datap[$i]["company"]."</td><td>".$datap[$i]["tot2"]."</td></tr>"; 
  
}
?>
		
</table>
	<br><br><br>

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