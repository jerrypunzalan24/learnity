<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" /> 
  <link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap-grid.min.css" /> 
  <link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap-reboot.min.css" /> 
  <link rel="stylesheet" href="../css/style.css" /> 
  <title>Document</title>
</head>
<body>
  <div class="container-fluid pl-0">
    <div class="row">
      <?php require_once('../includes/sidebar.php') ?>

      <div class="col-md-10 px-0" id="content-wrapper">
        <div class="m-3">
          <div class="row">
            <div class="col-md-10 pr-2">
              <form class="mb-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Search groups">
                </div>
              </form>
            </div>
            <div class="col-md-2 pl-2">
              <a href="#" class="btn btn-success btn-block">Create request</a>
            </div>
          </div>
        </div>
        <div class="mx-0 row">
          <div class="col-md-6 pr-2">
            <!-- template -->
            <div class="bg-white hoverable-custom p-3 my-1 mb-3 group">
              <div class="row">
                <div id="image" class="col-md-2"><img src="../assets/user.jpg" height=60></div>
                <div class="col-md-10">
                  <strong>Geology</strong>
                  <p class="subtitle mb-2">Flat earth is true.</p>
                  <p class="subtitle mb-2"><strong>Number of related requests:</strong> 5</p>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 pr-2"></div>
                    <div class="col-md-6 pl-2">
                      <a href="#" class="btn btn-outline-primary btn-sm btn-block">View requests</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end template -->
          </div>
          <div class="col-md-6 pl-2">
            <!-- template -->
            <div class="bg-white hoverable-custom p-3 my-1 mb-3 group">
              <div class="row">
                <div id="image" class="col-md-2"><img src="../assets/user.jpg" height=60></div>
                <div class="col-md-10">
                  <strong>Miscellaneous</strong>
                  <p class="subtitle mb-2">Flat earth is true.</p>
                  <p class="subtitle mb-2"><strong>Number of related requests:</strong> 5</p>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 pr-2"></div>
                    <div class="col-md-6 pl-2">
                      <a href="#" class="btn btn-outline-primary btn-sm btn-block">View requests</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end template -->
          </div>
        </div>

        <div class="text-center" id="suggestion-uncentered">
          <p class="mb-0"><strong>Why don't you explore more? The more, the merrier, right?</strong></p>
          <p>Join other study groups now.</p>
          <a href="#" class="btn btn-custom">Find a group near you.</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>