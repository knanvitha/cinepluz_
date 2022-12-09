<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark  ">
    <a class="navbar-brand n-brand" href="#">CINEPLUZ</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
           <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
           </li>
           
           <li class="nav-item">
            <a class="nav-link active" href="quiz1.php">Quizes</a>
           </li>
           <li class="nav-item">
            <a class="nav-link active" href="rank.php">Ranklist</a>
           </li>
           <li class="nav-item">
            <a class="nav-link active" href="aboutus.html">About</a>
           </li>
           <li class="nav-item">
            <a class="nav-link active" href="login.php">Signup</a>
           </li>
        </ul>
    </div>
</nav>
  <?php
    $name=$_SESSION['name'];
    ?>
    <div>
        <h1>
            welcome <?php echo $name ?> to our site;
        </h1>
    </div>
</body>
</html>