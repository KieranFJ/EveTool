
  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url(); ?>">Eve Tool</a>
          <div class="nav-collapse">
            <ul class="nav">
                <li><a href="<?php echo site_url("auth/login"); ?>">Login</a></li>
              <li><a href="<?php echo site_url("auth/new_account"); ?>">Create Account</a></li>
              <li><a href="<?php echo site_url("auth/logout"); ?>">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>