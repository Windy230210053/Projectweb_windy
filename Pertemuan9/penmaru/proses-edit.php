<?php 

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

  // ambil data dari formulir
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jk = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah_asal'];

  // buat query update
  $sql = "update calon_siswa set nama = '$nama', alamat = '$alamat', jenis_kelamin='$jk', agama= '$agama', sekolah_asal = '$sekolah' where id=$id";
  $query = mysqli_query($koneksi, $sql);

  // apakaah query update berhasil?
  if( $query) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: list_calon_siswa.php');
  } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
  }
}else {
  die("Akses dilarang...");
}
?>