<?php 

session_start();

if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center> silahkan login dahulu untuk mengakses modul<br>
	<a href='../../index.php'><b>LOGIN</b></a></center>";

}else{

	include"../../../lib/koneksi.php";
	include"../../../lib/config.php";

	$judul=$_POST['judul'];
    $slug2 = preg_replace("/\s/","-",$judul);
    $slug1 = strtolower($slug2);
    $slug = preg_replace("/[^a-zA-Z0-9-]/","","$slug1");
    $tanggal = $_POST['tanggal'];
	$deskripsi=$_POST['deskripsi'];
	$foto=$_FILES['foto']['name'];
	$foto_temp=$_FILES['foto']['tmp_name'];
	$foto_size=$_FILES['foto']['size'];
	$foto_type=$_FILES['foto']['type'];
	$folder = "../../upload/";

	print_r($_FILES['foto']);
	if ($foto_type =='image/jpg' OR $foto_type =='image/png' OR $foto_type =='image/jpeg') {
		if ($foto_size < 5024000 ) {
			
		   move_uploaded_file($foto_temp, $folder . $foto);
		   $querySimpan= mysqli_query($koneksi,"INSERT INTO berita (judul_berita,tanggal,deskripsi,foto,slug) VALUES ('$judul','$tanggal','$deskripsi','$foto','$slug')");
		   if($querySimpan){
				echo "<script>alert('Data Berhasil Disimpan '); window.location='$admin_url'+'adminweb.php?mod=berita';</script>";
			}else{
				echo "<script>alert('Gagal menyimpan data '); window.location='$admin_url'+'adminweb.php?mod=add_berita';</script>";
			}

		}else{
		   echo "<script>alert('Gagal menyimpan data, ukuran foto/gambar lebih dari 5MB '); window.location='$admin_url'+'adminweb.php?mod=add';</script>";
	   }
   }else{
	   echo "<script>alert('Gagal menyimpan data, Tipe foto bukan jpg/png '); window.location='$admin_url'+'adminweb.php?mod=add_berita';</script>";
   }

	
}

?>