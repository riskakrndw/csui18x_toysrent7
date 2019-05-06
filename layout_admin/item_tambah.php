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
        Tambah Item
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Item</li>
        <li class="active">Tambah Item</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="item.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data item </button></a>
            </div>   

            <!-- Tambah Jenis -->
                <div class="col-md-12">
                    <br>
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Item</h3>

                    </div>
                    <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                            <input class="form-control" placeholder="Nama" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Deskripsi</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Rentang Usia</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <input type="text" class="form-control" placeholder="Usia Minimal">
                                            </div>
                                            <div class="col-xs-3">
                                                <input type="text" class="form-control" placeholder="Usia Maksimal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Bahan</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-balance-scale"></i></span>
                                            <input class="form-control" placeholder="Satuan" name="satuan" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-group{{ $errors->has('satuan') ? ' has-error' : '' }}">
                                        <label>Kategori</label>
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