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
        Tambah Level
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Level</li>
        <li class="active">Tambah Level</li>
      </ol>
    </section>

    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="level.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data level </button></a>
            </div>   

                <div class="col-md-12">
                    <br>
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Level</h3>

                    </div>
                    <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Nama Level</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                            <input class="form-control" placeholder="Nama Level" name="nama" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="">
                                        <label>Minimum Poin</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                                            <input class="form-control" placeholder="Minimum Poin" name="nama" value="">
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