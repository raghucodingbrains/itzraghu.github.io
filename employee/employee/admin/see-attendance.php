<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Employee Management System</title>
  <!-- Sets initial viewport load and disables zooming  -->
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/ems.css">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div id="wrapper">
        <!--nav-->
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Employee Management System</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a class="nav-link" href="php/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <section class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel-group" id="accordion">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                        <i class="fa fa-search"></i> Search Attendance
                      </a>  
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body text-center">
                      <form id="" class="form-horizontal" role="form">
                        <div class="form-group">
                          <div class="col-md-3">
                            <label for="empId">Select Employee Id:-</label>
                          </div>
                          <div class="col-md-8">
                            <select id="empId" name="empId" class="form-control">
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h4 class="panel-title"><i class="fa fa-book"></i> Attendance Details</h4>
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                   <table id="attendanceTable" class="table table-bordered table-hover">
                     <form class="form" role="form">
                      <div class="form-group">
                        <thead>
                          <tr>
                            <td ><label>Emp ID</label></td>
                            <td ><label>Date</label></td>
                            <td ><label>Sign In Time</label></td>
                            <td ><label>Sign Out Time</label></td>
                          </tr>
                        </thead> 
                        <tbody>  
                        </tbody>  
                      </div>
                    </form>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br><br>


      <footer>
        <p>Copyright &copy; 2015 <a href="http://zorrofoxtech.com/">zorrofox technologies pvt. ltd.</a></p>
      </footer>
    </div>

    <script src="../js/jquery-1.10.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/employee-list.js"></script>
    <script src="js/view-attendance.js"></script>
    <script src="js/attendance.js"></script>

  </body>
  </html>
