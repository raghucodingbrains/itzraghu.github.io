<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Just Job</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/job.css">
  
</head>
<body>
  <div id="wrapper">
    <!--nav-->
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#job-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Just Job</a>
        </div>
        <div class="collapse navbar-collapse" id="job-navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="recruiter-home.html">Home</a></li>
            <li><a class="nav-link" href="../jobs.html">Job Search</a></li>
            <li class="dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                Recruiter Zone<b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="../recruiters.html">All Recruiters</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="php/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
    require_once 'php/database.php';

    $stmt = $db->query("SELECT name,resume FROM user");
    $row = $stmt->fetchall(PDO::FETCH_ASSOC);
    foreach ($row as $value) {
      $filename = $value['resume'];
      $filename = "../" . $filename;

      $name = $value['name'];



      ?>
      <div class="container">
        <table class="table table-bordered">
          <thead>
            <th>Name</th>
            <th>Resume</th>
          </thead>
          <tr>
            <td><?php echo $name ?></td>
            <td><a href="php/download.php?id=<?php echo $filename;?>"><?php echo $filename . "<br>";?></a></td>
            
          </tr>
          
        </table>
      </div>
      <?php }?>

      <footer>
        <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
      </footer>
    </div>

    <script src="../js/jquery-1.10.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

  </body>
  </html>
