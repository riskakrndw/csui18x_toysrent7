  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'review';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Review
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Review</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Daftar Review</h3>
                    </div>
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id Pengiriman</th>
                            <th>Barang</th>
                            <th>Review</th>
                            <th>Tanggal Review</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Mahkota merk x warna biru</td>
                        <td>Bagus</td>
                        <td>20 April 2019</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Mahkota merk x warna biru</td>
                        <td>Lumayan Bagus</td>
                        <td>20 April 2019</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Mahkota merk x warna biru</td>
                        <td>Bagus</td>
                        <td>20 April 2019</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id Pengiriman</th>
                            <th>Barang</th>
                            <th>Review</th>
                            <th>Tanggal Review</th>
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