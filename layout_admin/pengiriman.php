  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'pengiriman';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengiriman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengiriman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="pengiriman_tambah.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Pengiriman </button></a>
            </div>

            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Pengiriman</h3>
                    </div>
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id Pengiriman</th>
                            <th>Daftar Barang - Id Pemesanan</th>
                            <th>Harga Total</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>
                            <span class="label label-primary">A - 1</span>
                            <span class="label label-primary">B - 1</span>
                            <span class="label label-primary">C - 1</span>
                        </td>
                        <td>50000</td>
                        <td>Dikirim</td>
                        <td>
                          <a type="button" href="pengiriman_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>
                            <span class="label label-primary">A - 1</span>
                            <span class="label label-primary">B - 1</span>
                            <span class="label label-primary">C - 1</span>
                        </td>
                        <td>55000</td>
                        <td>Dikirim</td>
                        <td>
                            <a type="button" href="pengiriman_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>
                            <span class="label label-primary">A - 1</span>
                            <span class="label label-primary">B - 1</span>
                            <span class="label label-primary">C - 1</span>
                        </td>
                        <td>60000</td>
                        <td>Dikirim</td>
                        <td>
                          <a type="button" href="pengiriman_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                        </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id Pengiriman</th>
                            <th>Daftar Barang - Id Pemesanan</th>
                            <th>Harga Total</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Aksi</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
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