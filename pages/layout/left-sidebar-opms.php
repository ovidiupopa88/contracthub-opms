<?php
  
  function isActive($menu, $mode="full"){
    global $active_menu;
    if ($mode == "partial")
      echo ($active_menu == $menu? "active": "");
    else
      echo ($active_menu == $menu? "class='active'": "");
  }
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fullname']; ?></p>
          <a href="pages/dashboard"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['role']; ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Quick Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>

        <li <?php isActive("home") ?>>
          <a href="../opms/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li <?php isActive("positions") ?>>
          <a href="./positions.php">
            <i class="fa fa-briefcase"></i> <span>Positions</span>
          </a>
        </li>

        <li <?php isActive("candidates") ?>>
          <a href="./candidates.php">
            <i class="fa fa-users"></i> <span>Candidates</span>
          </a>
        </li>

        <li <?php isActive("interviews") ?>>
          <a href="./interviews.php">
            <i class="fa fa-calendar"></i> <span>Interviews</span>
          </a>
        </li>

        <li <?php isActive("clients") ?>>
          <a href="./clients.php">
            <i class="fa fa-user"></i> <span>Clients</span>
          </a>
        </li>

        <li class="header">General</li>

        <li <?php isActive("settings") ?>>
          <a href="./settings.php">
            <i class="fa fa-gear"></i> <span>Settings</span>
          </a>
        </li>

        <li <?php isActive("documentation") ?>>
          <a href="./documentation.php">
            <i class="fa fa-book"></i> 
            <span>Documentation</span>
          </a>
        </li>

        <li <?php isActive("help") ?>>
          <a href="./help.php">
            <i class="fa fa-question-circle"></i> <span>Help</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<script>
  var parent = $("ul.sidebar-menu li.active").closest("ul").closest("li");
  if (parent[0] != undefined)
    $(parent[0]).addClass("active");
</script>