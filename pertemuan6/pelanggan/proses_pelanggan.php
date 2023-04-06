<?php 
require_once '../dbkoneksi.php';


   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_jk = $_POST['jk'];
   $_tmp_lahir = $_POST['tmp_lahir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_kartu_id = $_POST['kartu_id']; 
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_jk;// 3
   $ar_data[]=$_tmp_lahir;
   $ar_data[]=$_tgl_lahir;
   $ar_data[]=$_email;
   $ar_data[]=$_kartu_id; // ? 7


  // Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
   // Jika Simpan, buat SQL INSERT
   $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,
   kartu_id) VALUES (?,?,?,?,?,?,?)";
}else if($_proses == "Update"){
   // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
   $ar_data[]=$_POST['id'];
   $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,
   tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_pelanggan.php');
?>
