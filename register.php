<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap-grid.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap-reboot.min.css" /> 
  <link rel="stylesheet" href="css/style.css" /> 
  <title>Document</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4 mt-5 d-sm-none d-md-block" id="image-wrapper">
        <img src="assets/learnity.png" height=300>
      </div>
      <div class="col-md-4 mt-md-5 mt-sm-2">
        <div id="login-wrapper">
          <div id="login-form" class="mt-2 px-sm-3">
            <div class="row mt-4">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <h3><strong>Be a study buddy.</strong></h3>
                <p>Register now to be a part of the community.</p>
                <form method = 'post' action ='register-user.php'>
                  <div class="form-group">
                    <input name="first-name" type="text" class="form-control" placeholder="First name" required>
                  </div>
                  <div class="form-group">
                    <input name="last-name" type="text" class="form-control" placeholder="Last name" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <input name="username" type="text" id='username' class="form-control" placeholder="Username" required>
                      </div>
                      <div class="col-md-12">
                        <div class="text-danger" id='user-hint'></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <input name="email" type="email" id='email' class="form-control" placeholder="Email" required>
                      </div>
                      <div class="col-md-12">
                        <div class="text-danger" id='email-hint' ></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input name="contact" type="text" class="form-control" placeholder="Contact number" required>
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" name = 'btn-submit' class="btn btn-block btn-outline-success">Register</button>
                  </div>
                </form>
                <p><span>Are you already a study buddy?</span> <a href="login.php"><strong>Log in here.</strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>
<script src = 'js/jquery/jquery.min.js'></script>
<script src = 'js/form-validate.js'></script>