<?php require_once './controller/userauthcontroller.php';

//verify using token
if(isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

//protected for the registered student only
if(!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php require_once './includes/header.php'; ?>

<body>


<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
    <?php if($_SESSION['verified']): ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Welcome Customer <?php echo $_SESSION['username']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  href="reserve.php">Reserve A Table </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
        <?php endif; ?>


        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong><?php echo $_SESSION['username']; ?></strong></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas ti-power-off fa-sm fa-fw mr-2 text-black-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

            <div class="container-fluid">
                    
            
            <!-- Reserve new Customer  -->
                
            <?php if($_SESSION['verified']): ?>
                <h1 class="text-center"><strong>Reserve a Table</strong></h1>
                
                <form action="reserve_save.php" method="post">
                    <div class="form-group">
                        <label for="Name">Full Name</label>
                        <input type="text" class="form-control" required name="fname" placeholder="Full name">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" required class="form-control" placeholder="Complete Address" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="cnumber">Contact Number</label>
                        <input type="number" class="form-control" required name="cnumber" placeholder="Contact Number">
                    </div>

                    <div class="form-group">
                        <label for="Customer">Number of Customer</label>
                        <input type="number" class="form-control" required name="customer"  required placeholder="Number of Customer" min="2" max="20">
                    </div>
                    
                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="date" class="form-control" required name="date"  required>
                    </div>

                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="time" class="form-control" required name="time"  required>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="reserve"  class="btn btn-success">Submit</button>
                    </div>
                </form>

            <?php endif; ?>

            


                <?php if(isset($_SESSION['message'])): ?>
                                    <div class="alert alert-success alert-dismissible fade show" type="button" class="close" data-dismiss="alert" aria-label="Close" style="    font-size: 12px;">
                                        <?php 
                                            echo $_SESSION['message']; 
                                            unset($_SESSION['message']);
                                            unset($_SESSION['alert-class']);
                                        ?>
                                    </div>
                <?php endif; ?>


                    <?php if(!$_SESSION['verified']): ?>
                        <div class="card " style="width: 20rem; margin: 0 auto; /* Added */float: none; /* Added */ margin-bottom: 10px; /* Added */">
                            <div class="card-body">
                    
                                <div class="alert alert-danger text-center">
                                    <strong><h3>Verify your email First...</h3></strong>
                                    <!-- <strong><?php echo $_SESSION['email']; ?></strong> -->
                                </div>
                        
                            </div>
                        </div>
                    <?php endif; ?>
            </div>

        </div>
    </div>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  
                    <a  class="btn btn-primary" href="homepage.php?logout=1" class="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>