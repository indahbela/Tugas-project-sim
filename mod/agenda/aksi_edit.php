<?php 

session_start();

if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center> silahkan login dahulu untuk mengakses modul<br>
	<a href='../../index.php'><b>LOGIN</b></a></center>";

}else{

	include "../../../lib/koneksi.php";
	include "../../../lib/config.php";

	$id=$_POST['kd'];
	$nama=$_POST['nama'];
	$ubah = $_POST['ubah_foto'];
	$deskripsi=$_POST['deskripsi'];
	$tanggal = $_POST['tanggal'];
	$foto=$_FILES['foto']['name'];
	$foto_temp=$_FILES['foto']['tmp_name'];
	$foto_size=$_FILES['foto']['size'];
	$foto_type=$_FILES['foto']['type'];
	$folder = "../../upload/";

	print_r($ubah);
	if (isset($_POST['ubah_foto'])) {
		if ($foto_type =='image/jpg' OR $foto_type =='image/png' OR $foto_type =='image/jpeg') {
			if ($foto_size < 5024000 ) {
			   move_uploaded_file($foto_temp, $folder . $foto);
			   $queryEdit= mysqli_query($koneksi,"UPDATE agenda SET nama_agenda='$nama', deskripsi='$deskripsi', tanggal='$tanggal', foto='$foto' WHERE id_agenda='$id'");
				if($queryEdit){
					echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?mod=agenda';</script>";
				}else{
					echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?mod=edit_agenda&agenda='+'$id';</script>";
				}
			}else{
			   echo "<script>alert('Gagal menyimpan data, ukuran foto/gambar lebih dari 1MB '); window.location='$admin_url'+'adminweb.php?mod=add_agenda';</script>";
		   }
	   }else{
		   echo "<script>alert('Gagal menyimpan data, Tipe foto bukan jpg/png '); window.location='$admin_url'+'adminweb.php?module=add_agenda';</script>";
	   }
	}else{
		$queryEdit= mysqli_query($koneksi,"UPDATE agenda SET nama_agenda='$nama', deskripsi='$deskripsi' WHERE id_agenda='$id'");
		if($queryEdit){
			echo "<script>alert('Data Berhasil diubah '); window.location='$admin_url'+'adminweb.php?mod=agenda';</script>";
		}else{
			echo "<script>alert('Gagal mengubah data '); window.location='$admin_url'+'adminweb.php?mod=edit_agenda&agenda='+'$id';</script>";
		}
	}

}

?>