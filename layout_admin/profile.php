  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page='profile';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil Pengguna
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profil Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <!-- Data Pribadi -->
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="box">
                    <ul class="nav nav-tabs-custom">
                        <li class="pull-left box-header"><h3 class="box-title">Data Pribadi</h3></li>
                    </ul>

                    <form role="form">
                        <div class="box-body">
                            <label>No KTP</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                <input class="form-control" placeholder="1829291928218" disabled>
                            </div>
                            <br>
                            <label>Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Nanana lalala" disabled>
                            </div>
                            <br>
                            <label>Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Nananalalala@gmail.com" disabled>
                            </div>
                            <br>
                            <label>Tanggal Lahir</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar-plus-o"></i></span>
                                <input class="form-control" placeholder="1993-09-01" disabled>
                            </div>
                            <br>
                            <label>Nomor Telepon</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input class="form-control" placeholder="0811111111" disabled>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
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