<?php
    require_once './controller/userauthcontroller.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="public/css/register.css">

</head>
<?php include './includes/header.php';?>
<body>

<div class="wrapper">
			<div class="inner">
				<img src="public/images/main/image-1.png" alt="" class="image-1">
				<form action="register.php" method="post">
					<h3>New Account?</h3>
					
					
<!-- register validation error -->
						<?php if(count($errors) > 0): ?>
						<?php foreach($errors as $error): ?>
						<div class="alert alert-danger alert-dismissible fade show" type="button" class="close" data-dismiss="alert" aria-label="Close" style="    font-size: 12px;">
							<strong><?php echo $error?></strong>
						</div>
						<?php endforeach; ?>
						<?php endif ?>
						<!-- 
						personal information -->

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text"               id="fname"
						name="fname"
						value="<?php echo $fname; ?>"
						class="form-control"
						required 
						placeholder="First Name">
					</div>

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" 
						id="lname"
						name="lname"
						value="<?php echo $lname; ?>"
						class="form-control"
						required
						placeholder="Last Name">
					</div>

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" 
						id="address"
						name="address"
						required
						value="<?php echo $address; ?>"
						class="form-control"
						placeholder="Address">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" 
						id="username"
						name="username"
						required
						value="<?php echo $username; ?>"
						class="form-control"
						placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email"
						id="email"
						name="email"
						required
						value="<?php echo $email; ?>"
						class="form-control"
						placeholder="Mail">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password"                
						id="password"
						required
						name="password"
						class="form-control"
						 placeholder="Password">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password"          
						id="passwordConf"
						name="passwordConf"
						required
						class="form-control"
						placeholder="Confirm Password">
					</div>

						<button type="submit" name="signup-btn" class="btn btn-success">Register</button>
            <p>Already Registered? <a href="index.php">Login Here</a></p>
				</form>
        
				<img src="public/images/main/image-2.png" alt="" class="image-2">
			</div>

		</div>

    <?php include './includes/footer.php';?>