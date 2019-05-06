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
        Tambah Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Barang</li>
        <li class="active">Tambah Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="barang.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data barang </button></a>
            </div>   

            <!-- Tambah Jenis -->
                <div class="col-md-12">
                    <br>
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Barang</h3>

                    </div>
                    <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Id Barang</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                                            <input class="form-control" placeholder="Id Barang" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Nama Item</label>
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
                                        <label>Warna</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-glass"></i></span>
                                            <input class="form-control" placeholder="Warna" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Url Foto</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                            <input class="form-control" placeholder="Url Foto" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Kondisi</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                            <textarea class="form-control" rows="3" placeholder="Kondisi"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Lama Penggunaan</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" placeholder="Lama Penggunaan" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group{{ $errors->has('satuan') ? ' has-error' : '' }}">
                                        <label>Pemilik/Penyewa</label>
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