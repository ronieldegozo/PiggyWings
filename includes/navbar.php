<?php
    require_once './controller/userauthcontroller.php';
?>

<!-- Start header -->  
  <header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="./public/images/logo/piggy.png" class="ml-5" style="width: 80px;" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="#">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="register.php" >Register</a></li>
						<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#login">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>



<!-- Modal for Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel"><strong>Login User</strong></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="index.php" method="POST">
  
  <!-- //validation error -->
    <!-- register validation error -->
            <?php if(count($errors) > 0): ?>
                <?php foreach($errors as $error): ?>
            <div class="alert alert-danger alert-dismissible fade show" type="button" class="close" data-dismiss="alert" aria-label="Close" style="    font-size: 12px;">
                    <strong><?php echo $error?></strong>
            </div>
            <?php endforeach; ?>
            <?php endif ?>


            <div class="form-group">
              <label for="exampleInputEmail1"><strong>Email address</strong></label>
              <input type="text" name="username" value="<?php echo $username ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><strong>Password</strong></label>
              <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="login-btn" class="btn btn-success float-right">Sign in</button>
          </form>
          
      </div>
    </div>
  </div>
</div>
	

<!-- End header -->


