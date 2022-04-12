<?php
  session_start();

  $active_menu = "profile";
  include_once "../layout/header.php";

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // LOGGED IN, DO NOTHING
  } else {
    header('location: ../auth/login-opms.php');
  }
?>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Put Page-level css and javascript libraries here -->
  
  <!-- ChartJS -->
  <script src="../../plugins/chartjs/Chart.min.js"></script>

  <div class="wrapper">

    <?php include_once "../layout/topmenu-opms.php"; ?>
    <?php include_once "../layout/left-sidebar-opms.php"; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Profile 
        </h1>
        <ol class="breadcrumb">
          <li><a href="."><i class="fa fa-user"></i> Account</a></li>
          <li class="active">Profile</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <?php include_once("content/content-profile.php") ?>
        
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    
  </div><!-- ./wrapper -->

<?php include_once "../layout/footer.php" ?>

<script src="script.js"></script>