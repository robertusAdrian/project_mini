<?php
/**
 * Created by PhpStorm.
 * User: Robertus Adrian
 * Date: 2019-03-16
 * Time: 23:16
 */
    include 'koneksi.php';
    $crud = $_GET['crud'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Map - Marker</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

         <link rel="stylesheet" href="assets/scss/style.css">
    </head>
    <body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Features</h3>
                    <!-- /.menu-title -->
                     <li class="menu-item-has-children dropdown">
                        <a href="form_index.php?crud=create"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Input Data</a>    
                        <a href="form_index.php?crud=fitur1"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Input Brand</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>
                    </div>
                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li  class="active">Input data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
          <div class="content mt-3">
            <div class="animated fadeIn">
<!-- SLIDE PAGE 1 -->
            <?php
                if($crud == 'create')
                {
            ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                <form action="action_index.php?action=create" method="post" enctype="multipart/form-data">
                        </div>
                    </div>
                </div>
                 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Input Data</strong> Detail
                      </div>
                            <div class="card-body card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aset</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Spesifikasi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="specification" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="color">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                   <select name="brand_id" class="form-control">
                                       <option value="null" class="form-control">--Pilih Brand--</option>
                                       <?php $brand_name =  $conn->query("SELECT * FROM brand_tb");  
                                       while ($list = mysqli_fetch_array($brand_name)){
                                       ?>   
                                        <option value="<?php echo $list['name']; ?>" class="form-control"><?php echo $list['name']; ?></option>
                                    <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="text" name="stock" class="form-control"></input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image"> </input> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" value="SUBMIT" class="btn btn-success">
                                    <a href="index.php" class="btn btn-danger" onclick="return confirm('Yakin membatalkan proses ini?')">CANCEL</a>
                                </div>
                            </div>
                 </form>
                    </div>
                </div>
            </div>
<!-- SLIDE PAGE 2 -->
            <?php
                }
                else if($crud == 'fitur1')
                {
            ?>    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                <form action="action_index.php?action=fitur1" method="post" enctype="multipart/form-data">
                        </div>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Input Data Brand</strong> Detail
                      </div>  
                        <div class="card-body card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Brand</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" value="SUBMIT" class="btn btn-success">
                                    <a href="index.php" class="btn btn-danger" onclick="return confirm('Yakin membatalkan proses ini?')">CANCEL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
<!-- SLIDE PAGE 3 (Input data customer)-->
            <?php
                }
                else if($crud == 'fitur2')
                {
            ?>    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                <form action="action_index.php?action=fitur2" method="post" enctype="multipart/form-data">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Detail Motor</strong>
                            <?php 
                            $id = $_GET['id'];
                            $sql_detail = $conn->query("SELECT * FROM motorcycle_tb WHERE id = $id");
                            $detail_customer = $sql_detail->fetch_array();   
                            ?>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="<?= $detail_customer['nama']?>">
                                    <img src="wp-contents/images/<?= $detail_customer['image']?>" width="150" height="150">
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>  
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Input Data Customer</strong> Detail
                      </div> 
                        <div class="card-body card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Customer</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <a href="form_index.php?crud=result&id=<?php $detail_customer['id']?>" class="btn btn-success">Confirm</a>
                                    <a href="index.php" class="btn btn-danger" onclick="return confirm('Yakin membatalkan proses ini?')">CANCEL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
<!-- SLIDE PAGE 4 (HASIL GABUNGAN DATA CUSTOMER DAN STOK BARANG)-->
            <?php
                }
                else if($crud == 'result')
                {
            ?>    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                <form action="action_index.php?action=result" method="post" enctype="multipart/form-data">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Detail Transaksi Barang</strong>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="<?= $transaksi['nama']?>">
                                    <img src="wp-contents/images/<?= $transaksi['image']?>" width="150" height="150">
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>  
                </form>
<!--SLIDE Detail Stok -->
                <?php
                }
                else
                {
                    $id = $_GET['id'];
                    $sql_detail = $conn->query("SELECT * FROM motorcycle_tb WHERE id = $id");
                    $detail_data = $sql_detail->fetch_array();
                ?>
                      <div class="card-header">
                        <strong> Data  </strong> Detail
                      </div> 
                      <form action="action_index.php?action=update&id=<?= $detail_data['id']?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Aset</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="<?= $detail_data['nama']?>"
                                    disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Specification</label>
                                <div class="col-sm-10">
                                    <input type="text" name="specification" class="form-control" value="<?= $detail_data['specification']?>"
                                    disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <input type="text" name="brand_id" class="form-control" value="<?= $detail_data['brand_id']?>"
                                    disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <input type="text" name="color" class="form-control" value="<?= $detail_data['color']?>"
                                    disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input type="text" name="stock" class="form-control" value="<?= $detail_data['stock']?>"
                                    disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10" align="center">
                                     <img src="wp-contents/images/<?= $detail_data['image']?>" width="400" height="400">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10" align="center">
                                <a href="form_index.php?crud=fitur2&id=<?= $detail_data['id']?>" class="btn btn-success">Buy</a> 
                                </div>
                            </div>
                        </form>
            <?php
                } 
            ?>
        </div>
    </div>
    </body>
</html>
