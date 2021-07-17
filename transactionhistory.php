<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Transaction History</title>
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
  style="text-decoration:none;position:relative;left:1200px; top:50px;background:#2482d4;color:white;display:block;width:70px;height:25px;text-align:center;font-size:17px;border-radius:20px;">
  Back</a>
	<div class="container">
        <center><h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-dark table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="color:white">S.No.</th>
                <th class="text-center" style="color:white">Sender</th>
                <th class="text-center" style="color:white">Receiver</th>
                <th class="text-center" style="color:white">Amount</th>
                <th class="text-center" style="color:white">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2 text-center"><?php echo $rows['sno']; ?></td>
            <td class="py-2 text-center"><?php echo $rows['sender']; ?></td>
            <td class="py-2 text-center"><?php echo $rows['receiver']; ?></td>
            <td class="py-2 text-center"><?php echo $rows['balance']; ?> </td>
            <td class="py-2 text-center"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
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