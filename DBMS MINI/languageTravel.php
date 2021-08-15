
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Language</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="images/atm.png" type="image/icon type">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    </head>


<body>
	<section>
     <!--navigation------->
    	<nav>
    		
    	<a class="navbar-brand" href="#"> 
            <img src= "images/atm.png"
            width="90" height="50" alt=""> 
        </a>

        <a href="page2.html"></a>
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


      <div class="container1">
            <a href="travelHindi.php"><div class="boxes">
                <div class="content">
                    <h2> HINDI </h2>
                </div>
            </div></a>
           
           <a href="travel.php"><div class="boxes">
                <div class="content">
                    <h2> ENGLISH </h2>
                </div>
            </div> </a>   
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