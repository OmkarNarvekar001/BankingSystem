<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> TSFBank</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="stylesheet" href="index.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> -->

  <!-- AOS  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body onload="loader()">
  <!-- loader for splash screen -->
  <div id="loading"></div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="./images/img1.png" alt="" width="30" height="24" class="d-inline-block align-text-top"><a class="navbar-brand" style="color: white;">
       &nbsp; TSFBANK</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right ml-auto">
          <li>
            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customers.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- BODY -->
  <div class="container-fluid hero-content">
    <div class="row align-items-center">
      <div class="col-md-6 col-sm-12 text-center" id="box1" data-aos="fade-up">
        <h1>Fastest way to <span id="sp" class="font-weight-bold">Transfer Money</span></h1>
        <h3 class="lead muted"><b>TRANSFER MONEY </b><span id="sp" class="font-weight-bold">WITHIN A FEW SECONDS</span></h3>
        <br>
        <br>
        <a href="transactionhistory.php"><button type="button" class="btn btn-lg b1">Transaction
        history</button>
        </a> &nbsp
        <a href="transfer.php"><button type="button" class="btn btn-lg b2" >Transfer
        Money</button>
        </a>
      </div>
      <div class="col-md-6 col-sm-12 text-center" id="box2" data-aos="fade-left">
        <div class="hero-img-div">
          <img class="hero-img" src="./images/img2.png" alt="img-showing-money-transfer" height="500px" width="700px">
        </div>
      </div>
    </div>
  </div>
  
  <!-- ABOUT  -->
  <section class="about section " id="about">
    <div class="aboutcontainer bd-grid">  
        <div><center> 
            <h1 class="about__subtitle" >WELCOME TO TSFBANK</h1>
            <h4 class="about__text"><marquee direction="right" width="60%" scrollamount="12">WHERE TRANSACTIONS ARE DONE AT <span class="color">SPEED OF LIGHT</span></marquee></h4> 
        </div><br><br><br><br><br>

                                      
    </div>
</section>
  <!-- FOOTER -->
  <footer id='contact'> <center>
    <h1> Contact Us</h1>
          <div class="icons"> 
              <a href = "mailto: onarvekar90@yahoo.com"target="_blank" rel="noopener noreferrer" id="gmail"><img src="./images/gmail.png" height="40" width="40"></a>
              <a href="https://www.linkedin.com/in/omkar-narvekar-9b36671aa" target="_blank" rel="noopener noreferrer" id="linkedin"> <img src="./images/linkedin.jpg" height="40" width="40"></a>
          </div>
    </footer>

  <!-- spalsh screen js -->
  <script>
    var preloader = document.getElementById("loading");
    function loader() {
      preloader.style.display = 'none';
    }
  </script>

  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

  <!-- aos data  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 700,
    });
  </script>

</body>

</html>