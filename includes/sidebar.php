<div class="col-md-2 pr-0">
  <div id="sidebar-wrapper" style="word-wrap: break-word" class="text-white">
    <div id="sidebar" class="p-3">
      <div class="text-center" id="header">
        <div id="image" class="mb-2"><img src="../assets/user.jpg" height=100></div>
        <h4 class="mb-0">Clive Fuentebella</h4>
        <p class="subtitle">@clff_</p>
      </div>

      <div id="body" class="pt-3">
        <div class="subtitle">
          Navigate to other pages
        </div>
        <!-- template -->
        <div class="hoverable-custom px-2 my-1">
          <div class="row">
            <div class="col-md-2"><i class="fa fa-home"></i></div>
            <div class="col-md-10"><a href = '../index.php'>Home</a></div>
          </div>
        </div>
        <!-- end template -->
        <div class="hoverable-custom px-2 my-1">
          <div class="row">
            <div class="col-md-2"><i class="fa fa-users"></i></div>
            <div class="col-md-10">Groups</div>
          </div>
        </div>
        <!-- end template -->
        <div class="hoverable-custom px-2 my-1">
          <div class="row">
            <div class="col-md-2"><i class="fa fa-binoculars"></i></div>
            <div class="col-md-10">Requests</div>
          </div>
        </div>
      </div>

      <?php if (!($_SERVER['PHP_SELF'] === '/uhack/group/index.php')) { ?>

      <div id="groups" class="pt-4">
        <div class="subtitle mb-1">
          Navigate to other pages
        </div>
        <form class="mb-2">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search groups">
          </div>
        </form>
        <!-- template -->
        <div class="hoverable-custom px-3 my-1">
          <div class="row">
            <div id="image" class="mb-2"><img src="../assets/user.jpg" height=25></div>
            <div class="col-md-10">Black group</div>
          </div>
        </div>
        <!-- end template -->
        <div class="hoverable-custom px-3 my-1">
          <div class="row">
            <div id="image" class="mb-2"><img src="../assets/user.jpg" height=25></div>
            <div class="col-md-10">Other group</div>
          </div>
        </div>
        <div class="hoverable-custom px-3 my-1">
          <div class="row">
            <div id="image" class="mb-2"><img src="../assets/user.jpg" height=25></div>
            <div class="col-md-10">The group</div>
          </div>
        </div>
      </div>

      <?php } ?>
    </div>
  </div>
</div>