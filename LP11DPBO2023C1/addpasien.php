<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/Tambahpasien.php");

$tp = new DataPasien();

if (isset($_POST['add'])) {
    $tp->tambahData($_POST);
    header('location: index.php');

}
else if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];
    if($tp->hapusData($id)>0)
    {
        echo "<script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>";
    }
    
    

}else if (isset($_GET['id_edit']) && isset($_POST['update'])) {
    $tp->ubahData($_GET['id_edit'], $_POST);
    header('location: index.php');

}else if (isset($_GET['id_edit'])) {
    $tp->tampilEdit($_GET['id_edit']);

}else {
    $tp->tampil();
}



?>