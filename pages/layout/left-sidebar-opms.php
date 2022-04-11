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
          <p>Ovidiu Popa</p>
          <a href="pages/dashboard"><i class="fa fa-circle text-success"></i> Admin</a>
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

        <li class="treeview">
          <a href="/opms.php/pages/opms/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="/opms.php/pages/positions/">
            <i class="fa fa-briefcase"></i> <span>Positions</span>
          </a>
        </li>

        <li class="treeview">
          <a href="/opms.php/pages/candidates/">
            <i class="fa fa-user"></i> <span>Candidates</span>
          </a>
        </li>

        <li class="treeview">
          <a href="/opms.php/pages/interviews/">
            <i class="fa fa-calendar"></i> <span>Interviews</span>
          </a>
        </li>

        <li class="treeview">
          <a href="/opms.php/pages/clients/">
            <i class="fa fa-users"></i> <span>Clients</span>
          </a>
        </li>

        <li class="header">General</li>

        <li class="treeview">
          <a href="/opms.php/pages/settings/">
            <i class="fa fa-gear"></i> <span>Settings</span>
          </a>
        </li>

        <li <?php isActive("documentation") ?>>
          <a href="../../pages/documentation/documentation.php">
            <i class="fa fa-book"></i> 
            <span>Documentation</span>
          </a>
        </li>

        <li class="treeview">
          <a href="/opms.php/pages/help/">
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