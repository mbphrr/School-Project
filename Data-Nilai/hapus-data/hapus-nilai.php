<?php
session_start();
require '../function.php';

$id = $_GET["id"];

if( isset($_GET['id'])){

if( nilaihapus($id) > 0){
     echo  "<script>
                alert('data berhasil dihapus');
                document.location.href = '../admin/admin-index.php?#nilai';
            </script>
        ";
}

else{
    echo  "<script>
                alert('data gagal dihapus');
                document.location.href = ../admin/admin-index.php?#nilai';
            </script>
        ";
}
}
?>