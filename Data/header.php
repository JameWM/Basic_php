<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="image1.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bitkub</title>
    <style>
        *{
            font-family: 'Kanit', sans-serif;
            box-sizing: border-box;
            
            
        }
        i.IO{
            margin-right: 20px;
            /* font-size: 25px; */
        }
        img.IO{
          /* width: 1920px; */
          /* height: 1080px; */
          width:100%;
          height: 100%;
        }
        video{
            /* object-fit: cover; */
            position: absolute;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
        }
        
    </style>
</head>
<body>

<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light ">
<nav class="navbar navbar-light ">
  <a class="navbar-brand" href="#">
    <img src="image.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Bitkub
  </a>
</nav>
  <div class="container-fluid">
    <!-- <a style="font-size: 30px;" font-size 30px;" class="navbar-brand text-white" href="#">Bitkub</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link active " aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link  text-white" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white" href="#">Pricing</a>
        </li> -->
        <li class="nav-item">
          <a style="font-size: 15px;" class="nav-link " href="formregister.php" tabindex="-1" aria-disabled="true">สมัครสมาชิก <i class="bi bi-wallet2"></i></a>
        </li>
      </ul>
    </div>
    <!-- <i class="bi bi-people"></i> -->
    <button class="btn btn-outline-success" type="submit"> <i class="IO"><i class="bi bi-person-plus"></i></i>Login</button>
  </div>
</nav>


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"> <!-- carousel-fade-->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="8000"> <!-- data-bs-interval="4000"-->
      <img src="https://www.matichon.co.th/wp-content/uploads/2022/04/1-25.jpg" class="IO d-block w-100" alt="..."></div>
      <video autoplay muted loop id="Video">
            <source src="Bitkub2.mp4" type="video/mp4">
        </video>

    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://scontent.fbkk29-2.fna.fbcdn.net/v/t1.6435-9/120611407_622717221728907_6040253510849287195_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG3vHw4qYnJ63nrG9r-O6ddsA7ssGGZilOwDuywYZmKU_tKekb8kQHO2Xw2LRZHirdisvEe5AzjaahyTf2OteL4&_nc_ohc=gLWMoMCIlx0AX9Iam2R&_nc_ht=scontent.fbkk29-2.fna&oh=00_AT-84KC9cG7XiV092Q84XgP40RDHnlN0jPc4Q8vv08jadg&oe=6311697F" class="IO d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div> -->
    </div>
    <div class="carousel-item"data-bs-interval="2000" >
      <img src="https://scontent.fbkk29-1.fna.fbcdn.net/v/t1.6435-9/120791876_622717211728908_1615426014656370631_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHNQDZny6otl1vg1HFFmXZx_knnQe1oZH_-SedB7Whkf84_ZBfyeF4fCGW4DvR6Esnw9ubKOEZy8dDlEPukjgvz&_nc_ohc=tq5WcSTEX0UAX8ZS4cx&_nc_ht=scontent.fbkk29-1.fna&oh=00_AT_Qfk10byP2c4aoX5xXsuc8fSOSMbtsGXboMDz_-dfWFg&oe=6311815C" class="IO d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>