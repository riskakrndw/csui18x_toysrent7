  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'level';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Level
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Level</li>
      </ol>
    </section>

    <section class="content">

        
        <div class="row">
            <div class="col-md-12">
                <a href="level_tambah.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Level </button></a>
            </div>

            <div class="col-xs-12">
                <br>
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Data Level</h3>
                    </div>
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Level</th>
                          <th>Deskripsi</th>
                          <th>Minimum Poin</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Gold</td>
                        <td>Level Tertinggi</td>
                        <td>1000</td>
                        <td>
                          <a type="button" href="level_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Gold</td>
                        <td>Level Tertinggi</td>
                        <td>1000</td>
                        <td>
                          <a type="button" href="level_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Gold</td>
                        <td>Level Tertinggi</td>
                        <td>1000</td>
                        <td>
                          <a type="button" href="level_ubah.php" class="btn btn-sm btn-default"> <i class="fa fa-edit"></i> Ubah</a>
                          <a type="button" href="" class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Apakah anda yakin akan menghapus?')"><i class="fa fa-trash-o"></i> Hapus</button>
                        </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama Level</th>
                          <th>Deskripsi</th>
                          <th>Minimum Poin</th>
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