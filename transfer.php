<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer</title>
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
          <!-- <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link"  href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <a href="index.php" 
  style="text-decoration:none;position:relative;left:1200px; top:40px;background:#2482d4;color:white;display:block;width:70px;height:25px;text-align:center;font-size:17px;border-radius:20px;">
  Back</a>

<div class="container">
        <center><h1>Transfer Money</h1>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-dark table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2" style="color:white;">Id</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Name</th>
                            <th scope="col" class="text-center py-2" style="color:white;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Balance</th>
                            <th scope="col" class="text-center py-2" style="color:white;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transact.php?id= <?php echo $rows['id'] ;?>"> <center><button type="button" class="btn btn-success" style="background-color:green;color:white;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

  <!-- FOOTER -->
  <footer id='contact'> <center>
    <h1> Contact Us</h1>
          <div class="icons">
              <a href = "mailto: onarvekar90@yahoo.com"target="_blank" rel="noopener noreferrer" id="gmail"><img src="./images/gmail.png" height="40" width="40"></a>
              <a href="https://www.linkedin.com/in/omkar-narvekar-9b36671aa" target="_blank" rel="noopener noreferrer" id="linkedin"> <img src="./images/linkedin.jpg" height="40" width="40"></a>
          </div>
    </footer>
</body>
</html>
