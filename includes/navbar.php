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
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="#">Reservation</a>
								<a class="dropdown-item" href="#">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link"  data-toggle="modal" data-target="#register">Register</a></li>
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
        <form action="" method="post">
			<label for="Username">Username</label>
			<div class="form-wrapper">
                <input  type="text"
                id="username"
                name="username"
                class="form-control"
                placeholder="Enter Username"/>
            </div>

			<label for="password">Password</label>
			<div class="form-wrapper">
                <input  type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="Enter Password"/>
            </div>
			<div class="modal-footer">
        <button type="submit" class="btn btn-success">Login</button>
      	</div>
		</form>
      </div>

    </div>
  </div>
</div>
	






<!-- Modal for Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel"><strong>Register User</strong></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
			<label for="Username">Username</label>
			<div class="form-wrapper">
                <input  type="text"
                id="username"
                name="username"
                class="form-control"
                placeholder="Enter Username"/>
            </div>

			<label for="password">Password</label>
			<div class="form-wrapper">
                <input  type="password"
                id="password"
                name="password"
                class="form-control"
                placeholder="Enter Password"/>
            </div>
			<div class="modal-footer">
        <button type="submit" class="btn btn-success">Register</button>
      	</div>
		</form>
      </div>

    </div>
  </div>
</div>

<!-- End header -->


