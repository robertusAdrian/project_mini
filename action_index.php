<?php
    include 'koneksi.php';

    //nentuin action-nya, bisa CREATE, UPDATE, ataupun DELETE
    $action = $_GET['action'];

    //Parameter Form, pakai POST
    $nama = $_POST['nama'];
    $specification = $_POST['specification'];
    $color = $_POST['color'];
    $brand_id = $_POST['brand_id'];
    $stock = $_POST['stock'];

    //---Untuk upload image---  
    $namaFile = $_FILES['image']['name'];
    $namaSementara = $_FILES['image']['tmp_name'];
    //Isikan dengan direktori tujuan upload
    $dest_file = 'wp-contents/images/'.$namaFile;
    move_uploaded_file($namaSementara, $dest_file);
    //chmod($nama_file, 0777);

    //File ke-2 
    $nama_brand = $_POST['name'];
    
    //File ke-3
    $nama_customer = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    //File ke-4
    $id_customer = $_POST['id_customer'];
    $id_stock = $_POST['id_stock'];
    $image = $_POST['image'];
    $stock = $_POST['stock'];
    
    //Cek action
    if($action == 'create')
    {
        //Insert to DB
        $conn->query("INSERT INTO motorcycle_tb(nama, specification, color, brand_id,  stock, image) 
            VALUES ('$nama', '$specification', '$color','$brand_id','$stock','$namaFile ')");
    }
        
    else if($action == 'fitur1')
    {
        $conn->query("INSERT INTO brand_tb(name )VALUES ('$nama_brand')");
    }

    else if($action == 'fitur2')
    {
        $conn->query("INSERT INTO customer_tb(name, address, phone)VALUES 
        ('$nama_customer','$address','$phone')");
    }

    else if($action == 'result')
    {
        $conn->query("INSERT INTO combine_tb(id_customer, id_stock, image, stock)
        VALUES ('$id_customer','$id_stock', '$image', '$stock')");
    }
    
    else if($action == 'delete')
    {
        //Ambil ID
        $id = $_GET['id'];

        //Ambil nama file untuk delete file di server. unlink() digunakan untuk menghapus file di server
        $sql_namaFile = $conn->query("SELECT * FROM motorcycle_tb WHERE id = $id");
        $fetch_namaFile = $sql_namaFile->fetch_array();
        $nama_ambil  = $fetch_namaFile['image'];
        unlink('wp-contents/images/'.$nama_ambil);

        //Delete data in DB
        $conn->query("DELETE FROM motorcycle_tb WHERE id = $id");
    }
    else
    {
        //Ambil ID
        $id = $_GET['id'];
        
        //Cek jika file ingin diganti atau tidak
        if(empty($nama_file))
        {
            //Jika syarat ini terpenuhi, maka tidak ada pengharuhnya dengan file
            $conn->query("UPDATE motorcycle_tb SET nama = '$nama', specification = '$specification'");
        }
        else
        {
            //Jika syarat ini tidak terpenuhi, maka file akan di-update
            $sql_namaFile = $conn->query("SELECT * FROM motorcycle_tb WHERE id = $id");
            $fetch_namaFile = $sql_namaFile->fetch_array();
            $nama_ambil  = $fetch_namaFile['gambar'];
            unlink('wp-contents/images/'.$nama_ambil);
            $conn->query("UPDATE motorcycle_tb SET nama = '$nama', specification = '$specification'");
        }
    }

    header("Location: index.php");
?>
