  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'barang';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <!-- Tambah jenis -->
            <div class="col-md-12">
                <a href="barang_tambah.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Barang </button></a>
            </div>
            <!-- /Tambah rasa -->

            <!-- Data rasa -->
            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Barang</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Item</th>
                          <th>Warna</th>
                          <th>Kondisi</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>Merah</td>
                        <td>Tersedia</td>
                        <td>
                          <a href="barang_detail.php" class="btn btn-sm btn-default btnLihatBahan"><i class="fa fa-eye"></i> Lihat Detail</a>
                          <a type="button" href="barang_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>Hitam</td>
                        <td>Tersedia</td>
                        <td>
                          <a href="barang_detail.php" class="btn btn-sm btn-default btnLihatBahan"><i class="fa fa-eye"></i> Lihat Detail</a>
                          <a type="button" href="barang_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Item 3</td>
                        <td>Ungu</td>
                        <td>Tersedia</td>
                        <td>
                          <a href="barang_detail.php" class="btn btn-sm btn-default btnLihatBahan"><i class="fa fa-eye"></i> Lihat Detail</a>
                          <a type="button" href="barang_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Item</th>
                          <th>Warna</th>
                          <th>Kondisi</th>
                          <th>Aksi</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.box-body -->
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