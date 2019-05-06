  <!-- SECTION HEADER -->
  <?php include '../layout_template/header.php'; ?>

  <!-- SECTION SIDEBAR -->
    <?php 
        $page = 'pesanan';
        include '../layout_template/sidebar.php';
    ?>

  <!-- SECTION CONTENT -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Pesanan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Pesanan</li>
        <li class="active">Tambah Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="pesanan.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data pesanan </button></a>
            </div>   

            <!-- Tambah Jenis -->
                <div class="col-md-12">
                    <br>
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Pesanan</h3>

                    </div>
                    <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Anggota</label>
                                        <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Barang</label>
                                        <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Lama Sewa</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" placeholder="Lama Sewa" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer pull-right">
                            <br>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"> Simpan</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </section>


    
  </div>
  <!-- /.content-wrapper -->

  
  
  <!-- SECTION FOOTER-->
  <?php include '../layout_template/footer.php'; ?>

  <div class="control-sidebar-bg"></div>
</div>

<!-- SECTION JS -->
<?php include '../layout_template/script_js.php'; ?>

</body>
</html>