<?php
$oldguess = isset($_POST['search']) ? $_POST['search'] : '';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> atm </title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #02FB8E;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		th{
			background:rgba(218, 247, 166,0.5);
			color:white;
			font-family: 'Satisfy', cursive;

		}
		tr:nth-child(even){background: rgba(2, 251, 142,.2); }
		.search-box{
			position: absolute;
			top: 30%;
			left: 40%;
			background: rgba(2, 251, 142,.7);
			height: 40px;
			border-radius: 40px;
			padding: 10px;
		}
		td{
			font-family: 'Cantarell', sans-serif;
			color: #DAF7A6;
		}
		search-txt{
			border:none;
			background:none;
			outline: none;
			float:left;
			padding: 66px;
			color: white;
			font-size: 16px;
			transition: 0.4s;
			line-height: 40px;
			width: 240px;
		}
	</style>
	<link rel="stylesheet" href="css/stylen.css">
	<link rel="icon" href="images/atm.png" type="image/icon type">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital@1&display=swap" rel="stylesheet">
</head> 
<body>
  
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
     			<li><a href="index1.html" class="active">Home</a></li>
     			<li><a href="#">Moods</a></li>
     			<li><a href="#">About</a></li>
     			<li><a href="#">Contact</a></li>
    		</ul>

    			
        <div class="toggle"></div>
    		
		</nav>
        
      </section> 
<p>
    	<h1 style="color:#DAF7A6 ;font-family: 'Great Vibes', cursive; text-align: center;font-size: 3em; font-stretch: ultra-expanded; letter-spacing: 5px ; "> Search </h1>
</p>
	
<form method="post">
	<div class="search-box">
	<input style="border:none; background:none; outline: none; float:left; color: white; font-size:15px;" class="search-txt" type="text" value="<?= htmlentities($oldguess) ?>" name="search" placeholder="Type To Search">
	<input style ="padding:2px 15px; background:#ccc; border:0 none; cursor:pointer;-webkit-border-radius: 5px;border-radius: 5px;"type="submit" name="submit">
</div>
</form>
<br><br><br>
<table>
	<tr>
		<th>Song</th>
		<th>Year</th>
		<th>Link</th>
	</tr>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])){
	$str=$_POST["search"];
	}
$sql = "SELECT sname, year_of_release , link FROM song where year_of_release='$str'";
$result = $conn->query($sql);
$datas=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
          $datas[]=$row;
  }
}
 else {
  echo "0 results";
}
for ($i = 0; $i < count($datas); $i++){
  echo "<tr><td>".$datas[$i]["sname"]."</td><td>".$datas[$i]["year_of_release"]."</td><td>".$datas[$i]["link"]."</td></tr>";
  
}
echo "</table>";
$conn->close();
?>
</table>

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