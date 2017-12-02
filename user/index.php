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
      
      <div class="col-md-10 pl-0" id="content-wrapper">
        <!-- if no study groups yet -->
        <!-- <div id="suggestion" class="text-center">
          <p class="mb-0"><strong>Oops! It looks like you don't have a study group yet.</strong></p>
          <p>Have a study buddy and learn new things now.</p>
          <a href="#" class="btn btn-custom">Find a group near you.</a>
        </div> -->

        <!-- else -->
        <div class="mx-0 pt-3 row">
          <div class="col-md-6 pr-2">
            <div class="bg-white" id="your-groups">
              <div class="py-2 px-3 bottom-bordered-secondary">
                Your current study groups
                <span class="float-right badge badge-success">1</span>
              </div>
              <div id="your-groups-body">
                <!-- template -->
                <div class="py-2 px-3 hoverable-default bottom-bordered-secondary">
                  <div class="row">
                    <div class="col-md-2">
                      <div id="image" class=""><img src="../assets/user.jpg" height=50></div>
                    </div>
                    <div class="col-md-10">
                      <p class="mb-0"><strong>Study fam</strong></p>
                      <p class="subtitle mb-0">Subject: Physics</p>
                      <p class="subtitle mb-0">Meetup location: Quezon City</p>
                    </div>
                  </div>
                </div>
                <!-- end template -->
                <div class="py-2 px-3 hoverable-default bottom-bordered-secondary">
                  <div class="row">
                    <div class="col-md-2">
                      <div id="image" class=""><img src="../assets/user.jpg" height=50></div>
                    </div>
                    <div class="col-md-10">
                      <p class="mb-0"><strong>Thesis mo</strong></p>
                      <p class="subtitle mb-0">Subject: Physics</p>
                      <p class="subtitle mb-0">Meetup location: Marawi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 pl-2">
            <div class="bg-white" id="your-groups">
              <div class="py-2 px-3 bottom-bordered-secondary">
                Your interactions
                <span class="float-right badge badge-success">1</span>
              </div>
              <div id="your-groups-body">
                <!-- template -->
                <div class="py-2 px-3 hoverable-default bottom-bordered-secondary">
                  <div class="row">
                    <div class="col-md-2">
                      <div id="image" class=""><img src="../assets/user.jpg" height=50></div>
                    </div>
                    <div class="col-md-10">
                      <p class="mb-0"><strong>Pablo Jobs</strong> on Study fam</p>
                      <p class="subtitle mb-0">Putangina magsigawa kayo!!! Sir nolasco ./.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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