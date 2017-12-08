<?php
    include('php/connect.php');
    include('php/activeUser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Campus Station | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/colorize.css">
    <link rel="stylesheet" href="css/grid-system.css">

    <!-- JS -->
    <script type="text/javascript" src="js/command.js"></script>

</head>
<body id="top">
  
  
  <div class="fixed">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#mostview">Most View</a></li>
      <li><a href="#topcampaign">Top Campaign</a></li>
      <!-- <li><a href="#news">Explore</a></li> -->
      <?php if($data == null) { ?>
      <li class="dropdown" style="float:left;margin-left:10px">
        <a href="#" class="dropbtn">Auth</a>
        <div class="dropdown-content">
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
        </div>
      </li>
      <?php } else { ?>
        <li class="dropdown" style="float:left;margin-left:10px">
          <a href="#" class="dropbtn">
            <?php echo $data["username"]; ?>
          </a>
          <form action="logout.php" method="POST">
            <div class="dropdown-content">
              <input style="display:none;" value="0" name="session">
              <button id="logout" style="width:100%;background-color:white;">
              <a href="#">
                Logout
              </a>
              </button>
            </div>
          </form>
        </li>
      <?php } ?>
    </ul>
  </div>

  <div class="banner">
    <div class="banner-content">
      <center style="color:white;">
        <div class="banner-image-rounded">
          <img src="image/ico.png" height="100px" alt="" style="margin-top:11px;">
        </div>
        <h2>Campus Station</h2>
        <p><b>$></b> Enterpreneur <b>Start</b> From <b>Campus</b></p>
        <button class="bg-teal white get-start" onclick="window.location.href='#most'">
          Get Stared
        </button>
      </center>
    </div>
  </div>
  <legend id="topcampaign"></legend>
  <div class="container">
    <center>
      <div class="tagline" >
        <b>
          Top Campaign
        </b>
      </div>
    </center>
    <div class="row">

      <script>
        var nama = [
          "Workshop Programming",
          "Normalization City",
          "Interrupted Network",
          "Firebase Data Scrapper",
          "Testing Simulation",
          "Create Bot Hook.io",
          "Network Management",
          "Security Assignment"
        ];

        var tag = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur ea accusamus aspernatur nulla recusandae aperiam vero, illum odio ullam ut, excepturi error";

        for(i=1;i<7;i++){
          cetak("<div class='grid-4' style='padding-bottom:50px;'>");
            cetak("<div class='card' style='width:90%;padding-left:5%;'>");
              cetak("<a href='detail.html'>");
                cetak("<img src='https://ukietech.com/filemanager/BLOG/4_404.jpg' alt='image/4_404.jpg' style='width:100%;'>");
              cetak("</a>");
              cetak("<div class='card-container'>");
                cetak("<h4><b>"+nama[i-1]+"</b></h4>"); 
                cetak("<p style='text-align:justify;font-size:small;'>"+tag+"</p>");
                cetak("<a href='detail.php' style='text-decoration:none;' class='teal'><b>Read More</b></a>")
              cetak("</div>");
            cetak("</div>");
          
            cetak("</div>");
        }
      </script>

    </div>
  </div>
  <div class="grid-12 bg-teal" style="padding-top:5%;">
  <legend id="mostview"></legend>
    <div class="container">
        <center>
            <div class="tagline bg-white teal">
              <b>
                Most Views
              </b>
            </div>
          </center>
          <div class="row">
      
            <script>
              var nama = [
                "Workshop Programming",
                "Normalization City",
                "Interrupted Network",
                "Firebase Data Scrapper",
                "Testing Simulation",
                "Create Bot Hook.io",
                "Network Management",
                "Security Assignment"
              ];
      
              var tag = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur ea accusamus aspernatur nulla recusandae aperiam vero, illum odio ullam ut, excepturi error debitis fugit ratione unde quibusdam odit eius tempore...";
              var past = 0;
              var current = randomize(0,7);
              for(i=1;i<4;i++){
                cetak("<div class='grid-4' style='padding-bottom:50px;'>");
                  
                  var current = randomize(0,7);
                  cetak("<div class='card bg-white' style='width:90%;padding-left:5%;'>");
                    cetak("<img src='https://ukietech.com/filemanager/BLOG/4_404.jpg' alt='image/4_404.jpg' style='width:100%;' onerror=\"this.src=\'image/4_404.jpg\';\">");
                    cetak("<div class='card-container'>");
                      if(current==past){
                        current = randomize(0,7)+1;
                      }
                      cetak("<h4><b>"+nama[current]+"</b></h4>"); 
                      cetak("<p style='text-align:justify;'>"+tag+"</p>");
                      cetak("<a href='detail.html' style='text-decoration:none;' class='teal'><b>Read More</b></a>")
                      cetak("</div>");
                      cetak("</div>");
                      
                  cetak("</div>");
                  past = current;
                }
            </script>
      
          </div>
    </div>
  </div>
  
  <div class="grid-12 upstair">
    <center class="middle-v">
      <div class="banner-image-rounded">
        <img src="image/ico.png" height="100px" alt="" style="margin-top:11px;">
      </div>
      <h1 class="teal"><b>Campus Station</b></h1>
      <p>
        <b>Together</b> we can do <b>Better.</b>
      </p>
    </center>
  </div>

  <div class="grid-12 bg-grey white footer" style="">
    <div class="container row">
      <center>
      <div class="grid-12" style="padding-top:20px;">
        <img onclick="window.location.href='https://github.com/ahmadbasir'" class="rounded-item ico-style bg-white pointer-hover" src="https://hammerjs.github.io/assets/img/github-icon.png" alt="image/github-icon.png" onerror="this.src='image/github-icon.png';">
        <br><br><b>Github</b>
      </div>
      <div class="grid-12">
        <p>&copy; campustation <b>2017</b> by <b>Abas</b></p>
      </div>
      </center>
    </div>
  </div>

  <a href="#top">
    <div class="btn-top bg-teal white">
      UP
    </div>
  </a>
</body>
</html>