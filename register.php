<?php
    require_once './controller/userauthcontroller.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="register.php" method="post">
      <h3><strong>User Registration Form</strong></h3>

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

            <div class="form-wrapper">
              <input  type="text"
              id="fname"
              name="fname"
              value="<?php echo $fname; ?>"
              class="form-control"
              required
              placeholder="Enter Firstname"/>
            </div>

            <div class="form-wrapper">
              <input  type="text"
              id="lname"
              name="lname"
              value="<?php echo $lname; ?>"
              class="form-control"
              required
              placeholder="Enter Lastname"/>
            </div>

            <div class="form-wrapper">
              <input  type="text"
              id="address"
              name="address"
              required
              value="<?php echo $address; ?>"
              class="form-control"
              placeholder="Enter Address"/>
            </div>

<!--         User Account     -->
            <div class="form-wrapper">
              <input  type="text"
              id="username"
              name="username"
              required
              value="<?php echo $username; ?>"
              class="form-control"
              placeholder="Enter Username"/>
            </div>

          <div class="form-wrapper">
            <input   type="email"
            id="email"
            name="email"
            required
            value="<?php echo $email; ?>"
            class="form-control"
            placeholder="Enter Email"/>
           </div>

            <div class="form-wrapper">
                <input   type="password"
                id="password"
                required
                name="password"
                class="form-control"
                placeholder="Enter Password"/>
            </div>

            <div class="form-wrapper">
                <input   type="password"
                id="passwordConf"
                name="passwordConf"
                required
                class="form-control"
                placeholder="Confirm Password"/>
            </div>

        <div class="modal-footer">
          <button type="submit"name="signup-btn" class="btn btn-success">Register</button>
        </div>
	    </form>

</body>
</html>