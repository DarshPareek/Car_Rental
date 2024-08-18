<header>
  <div class="default-header">
    <div class="container">
      <div class="row align-items-center">
        <div href="index.php class="col-sm-3 col-md-2">
          <a href="index.php"> <h1 href="index.php" class="logo">Prabhav</h1></a>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_content d-flex justify-content-between align-items-center">
            <!-- Centered Search Bar -->
            <div class="header_search">
              <form action="search.php" method="post" id="header-search-form" class="d-flex justify-content-center">
                <input type="text" placeholder="Search..." name="searchdata" class="form-control" required>
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- Right-Aligned User Icon or Login/Signup -->
            <div class="user_login">
            </div>
            <div class="user_login">
              <ul class="nav navbar-nav">
                <?php if(strlen($_SESSION['login']) == 0) { ?>
                  <li>
                    <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">
                      <i class="fa fa-user-circle" aria-hidden="true"></i> Login / Register
                    </a>
                  </li>
                <?php } else { ?>
                  <li class="dropdown">
                    <a href="#loginform" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-user-circle" aria-hidden="true"></i>
                      <?php 
                        $email = $_SESSION['login'];
                        $sql = "SELECT FullName FROM tblusers WHERE EmailId=:email";
                        $query = $dbh->prepare($sql);
                        $query->bindParam(':email', $email, PDO::PARAM_STR);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        if($query->rowCount() > 0) {
                          foreach($results as $result) {
                            echo htmlentities($result->FullName);
                          }
                        }
                      ?>
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="profile.php">Profile Settings</a></li>
                      <li><a href="update-password.php">Update Password</a></li>
                      <li><a href="my-booking.php">My Booking</a></li>
                      <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation end -->
  <?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$results->FullName;
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
  <!-- Login Form Modal -->
  <div id="loginform" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login / Register</h4>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <input type="submit" name="login" value="Login" class="btn btn-block">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>


