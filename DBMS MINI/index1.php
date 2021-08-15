<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="keywords" content="footer, address, phone, icons" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/sty.css">
<link rel="icon" href="images/atm.png" type="image/icon type">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    </head>



<body>
  <section>
     <!--navigation------->
      <nav>
        
      <a class="navbar-brand" href="#"> 
            <img src= "images/atm.png"
            width="90" height="50" alt=""> 
        </a>

        <a href="index1.html"></a>
        <div class="logo">Music recommendation system</div>

      
      
        <ul>
          <li><a href="index1.php" class="active">Home</a></li>
          <li><a href="Search.html" class="active">Search</a></li>
          <li><a href="#About-Header">About</a></li>
          <li><a href="#Contact-Header">Contact</a></li>
        </ul>

          
        <div class="toggle"></div>
        
        
    </nav>
        
      </section> 


   <!--mood tiles---------->
   <div class="container">
        <div class="row1">
          <div class="box-1">
            <span>1</span>
                    <p class="heading">Happy</p>
                 
                    <a href="languageHappy.php"><button>Explore</button></a>
             </div>

             <div class="box-3">
                    <span>2</span>
                    <p class="heading">Sad</p>
                    
                    <a href="languageSad.php"><button>Explore</button></a>
            </div>

        </div>
        <!-----row 1 ends------------->
        

        <div class="row2">
          <div class="box-4">
              <span>3</span>
                    <p class="heading">Energetic & Workout</p>
                    
                    <a href="languageWorkout.php"><button>Explore</button></a>
             </div> 


            <div class="box-5">
              <span>4</span>
              <p class="heading">Travel and chill</p>
              
              <a href="languageTravel.php"><button>Explore</button></a>
            </div>

            <div class="box-6">
              <span>5</span>
              <p class="heading">Trending</p>
              
              <a href="languageTrending.php"><button>Explore</button></a>
            </div>
        </div>
        <!------row 2 ends--------->    
    </div>
<!--mood tiles end---->

<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Music Recommendation System</h3>

        
        <p class="footer-company-name">ATM &copy; 2020</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>KKWIEER</span> Nashik, India</p>
        </div>


        <div id="Contact-Header">
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">contactatm@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p id="About-Header" class="footer-company-about">
          <span>About the company</span>
          <a href="Report.php" target="_blank"><span style="text-decoration: underline;">Report</span></a>
          ATM is a group of web developers &amp; being music lovers, we bring upto you awesome songs from our very own playlist.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>



<!--JQuery-->
        

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
