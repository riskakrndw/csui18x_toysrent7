<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <div class="user-panel">
          <li class="text-center">
            <img src="../dist/img/logo.png" alt="User Image" style="width:100%;">
          </li>
        </div>

      <li class="header">MAIN NAVIGATION</li>

      <li <?php echo ($page == 'beranda') ? "class='active'" : ""; ?> ><a  href="index.php"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
      <li <?php echo ($page == 'item') ? "class='active'" : ""; ?> ><a href="item.php"><i class="fa fa-cubes"></i> <span>Item</span></a></li>
      <li <?php echo ($page == 'barang') ? "class='active'" : ""; ?> ><a href="barang.php"><i class="fa fa-cube"></i> <span>Barang</span></a></li>
      <li <?php echo ($page == 'pesanan') ? "class='active'" : ""; ?> ><a href="pesanan.php"><i class="fa fa-cart-plus"></i> <span>Pesanan</span></a></li>
      <li <?php echo ($page == 'level') ? "class='active'" : ""; ?> ><a href="level.php"><i class="fa fa-star"></i> <span>Level</span></a></li>
      <li <?php echo ($page == 'pengiriman') ? "class='active'" : ""; ?> ><a href="pengiriman.php"><i class="fa  fa-shopping-cart"></i> <span>Pengiriman</span></a></li>
      <li <?php echo ($page == 'review') ? "class='active'" : ""; ?> ><a href="review.php"><i class="fa fa-pencil"></i> <span>Review barang</span></a></li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>