<?php
    include 'header.php';
    include 'sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-plus mr-1"></i>
                  Formulir Ubah Produk
                </h3>
                <div class="card-tools">
                  
                  
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php
                  include 'koneksi.php';
                  // mengambil ID dari GET
                  $id_produk = $_GET['id_produk'];
                  
                  // mengambil data dari database
                  $hasil = $db->query("SELECT * FROM produk
                  WHERE id_produk = $id_produk");
                  
                  //data yang di ambil diubah jadi array
                  $produk = $hasil->fetch_assoc();
                  ?>

                <form action="ubah_produk_aksi.php"  method="POST">
                <input type="hidden" name="id_produk" 
                  value="<?= $produk['id_produk'] ?>">
                  <div class="form-group">
                    
                  <label for="nama_produk">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk"
                      class="form-control"
                      value="<?= $produk['nama_produk'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="text" id="harga" name="harga"
                      class="form-control"
                      value="<?= $produk['harga'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="deskripsi">deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"
                      class="form-control" rows="5"><?= $produk['deskripsi'] ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="foto">foto produk</label>
                    <input id="deskripsi" id="foto" name="foto"
                      class="form-control"
                      value="<?= $produk['foto_produk'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="status_produk">status produk</label>
                    <input type="text" id="status_produk" name="status_produk"
                      class="form-control"
                      value="<?= $produk['status_produk'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="stock">stock</label>
                    <input type="text" id="stock" name="stock"
                      class="form-control"
                      value="<?= $produk['stock'] ?>">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">simpan</button>
                    <a href="daftar_produk.php" class="btn btn-danger">kembali</a>
                  </div>

                </form>
              </div><!-- /.card body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php'; ?>