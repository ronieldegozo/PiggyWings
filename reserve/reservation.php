

<?php include '../includes/header.php';?>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Piggy Wings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type ="text" required name="rcode" class="form-control" placeholder="Reservation Code">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div class="container">
  <h2 class="text-center">Reserve</h2>
  <form class="form-horizontal" role="form" action="reservation_save.php" method="post">
              
              <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="first" required>
              </div>

              <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="last" required>
              </div>

              <div class="form-group">
                    <label class="control-label">Address</label>
                    <textarea class="form-control" rows="5" placeholder="Complete Address" name="address" required></textarea>
              </div>

              <div class="form-group">
                    <label class="control-label">Contact #</label>
                    <input type="text" class="form-control" placeholder="Contact #" name="contact" required>
              </div>

              <div class="form-group">
                    <label class="control-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Email Address" name="email">
              </div>

              <button type="reset" class="btn btn-default">Clear</button>

              <button type="submit" class="btn  btn-primary">Next</button>
          </form>
  </div>

    <?php include '../includes/footer.php';?>
</body>
</html>



