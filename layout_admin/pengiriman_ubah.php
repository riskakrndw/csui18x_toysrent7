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
        Ubah Pengiriman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Pengiriman</li>
        <li class="active">Ubah Pengiriman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="pengiriman.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data pengiriman </button></a>
            </div>   

                <div class="col-md-12">
                    <br>
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ubah Data Pengiriman</h3>

                    </div>
                    <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Barang Pesanan</label>
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
                                        <label>Alamat Tujuan</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                            <textarea class="form-control" rows="3" placeholder="Alamat Tujuan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Tanggal Pengiriman</label>
                                        <div class="input-group">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control pull-right" id="datepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Metode</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                            <input class="form-control" placeholder="Metode" name="nama" value="">
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

  <!-- SECTION FOOTER-->
  <?php include '../layout_template/footer.php'; ?>

  <div class="control-sidebar-bg"></div>
</div>

<!-- SECTION JS -->
<?php include '../layout_template/script_js.php'; ?>

</body>
</html>