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
        Detail Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Barang</li>
        <li class="active">Detail Barang</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        
        <div class="row">

            <div class="col-md-12">
                <a href="barang.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa  fa-angle-double-left "></i> Kembali ke halaman data barang </button></a>
                <a href=""><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-cart-plus "></i> Pesan </button></a>
            </div>   
            
            
            <div class="col-md-12">
            <br>
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#detail" data-toggle="tab">Detail</a></li>
                        <li><a href="#review" data-toggle="tab">Review</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="detail">
                            <form role="form" action="" method="POST" id="formID" onsubmit="" name="vform">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="">
                                                <label>Id Barang</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                                                    <input class="form-control" placeholder="Id Barang" name="nama" value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="">
                                                <label>Nama Item</label>
                                                <select class="form-control" disabled>
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
                                                    <input class="form-control" placeholder="Warna" name="nama" value="" disabled>
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
                                                    <input class="form-control" placeholder="Url Foto" name="nama" value="" disabled>
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
                                                    <textarea class="form-control" rows="3" placeholder="Kondisi" disabled></textarea>
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
                                                    <input class="form-control" placeholder="Lama Penggunaan" name="nama" value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="">
                                                <label>Pemilik/Penyewa</label>
                                                <select class="form-control" disabled>
                                                    <option>option 1</option>
                                                    <option>option 2</option>
                                                    <option>option 3</option>
                                                    <option>option 4</option>
                                                    <option>option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="review">
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#">Jonathan Burke Jr.</a>
                                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                    </li>
                                    <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                                </ul>

                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>

                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#">Jonathan Burke Jr.</a>
                                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                    </li>
                                    <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                                </ul>

                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>

                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                        <a href="#">Jonathan Burke Jr.</a>
                                        <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                    <span class="description">Shared publicly - 7:30 PM today</span>
                                </div>
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore the hate as they create awesome
                                    tools to help create filler text for everyone from bacon lovers
                                    to Charlie Sheen fans.
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                    </li>
                                    <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                                </ul>

                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>
                        </div>
                    </div>
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