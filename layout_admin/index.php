  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'beranda';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Beranda</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="callout callout-info">
          <h4>Halo XXXX!</h4>
          <p>Selamat Datang di Halaman Admin RENT TOYZ</p>
        </div>
    </section>

  </div>

  <!-- SECTION FOOTER-->
  <?php include '../layout_template/footer.php'; ?>

  <div class="control-sidebar-bg"></div>
</div>

<!-- SECTION JS -->
<?php include '../layout_template/script_js.php'; ?>

</body>
</html>