  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>SIS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>JHIT</b>SIS</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

		<!-- Student Searching Function Starts Here -->
		<li class="dropdown-menu">
             <form method="get" action="{{route('enrolemnt.course')}}">
<input type="text" class="form-control" name="id" required> <button type="submit" class="btn btn-primary">Go</button>
                 </form>
		<!-- Student Searching Function Ends Here -->
		
		<li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span>Staff</span>
            </a>
            <ul class="dropdown-menu">
               <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><a href="#"><span>Support Team</span></a></li>
                  <li><a href="#"><span>Support Team</span></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span>System</span>
            </a>
            <ul class="dropdown-menu">
               <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><a href="#"><span>Support Team</span></a></li>
                  <li><a href="#"><span>Support Team</span></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span>Personalise</span>
             </a>
            <ul class="dropdown-menu">
               <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><a href="#"><span>Support Team</span></a></li>
                  <li><a href="#"><span>Support Team</span></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>

    </nav>
</header>