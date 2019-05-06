  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'item';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <!-- Tambah jenis -->
            <div class="col-md-12">
                <a href="item_tambah.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Item </button></a>
            </div>
            <!-- /Tambah rasa -->

            <!-- Data rasa -->
            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Item</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>
                            <span class="label label-primary">Kategori 1</span>
                            <span class="label label-primary">Kategori 2</span>
                            <span class="label label-primary">Kategori 3</span>
                        </td>
                        <td>
                          <a type="button" href="item_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>
                            <span class="label label-primary">Kategori 1</span>
                            <span class="label label-primary">Kategori 2</span>
                            <span class="label label-primary">Kategori 3</span>
                        </td>
                        <td>
                          <a type="button" href="item_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Item 3</td>
                        <td>
                            <span class="label label-primary">Kategori 1</span>
                            <span class="label label-primary">Kategori 2</span>
                            <span class="label label-primary">Kategori 3</span>
                        </td>
                        <td>
                          <a type="button" href="item_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Kategori</th>
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