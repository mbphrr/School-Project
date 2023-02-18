<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Siswa</title>

<!--Style.css-->
<link rel="stylesheet" href="style.css">

<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!--Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/0921561578.js" crossorigin="anonymous"></script>

</head>
<body>
<?php 

require '../function.php';

$nisn = $_GET['nisn'];

$sws = query("SELECT * FROM siswa WHERE nisn =$nisn")[0];

if(isset($_POST['submit'])){
    if(siswaedit($_POST) > 0){
        echo "
                <script>
                    alert('data has been edited');
                    location.href='../admin/admin-index.php?#dasis';
                </script>
        ";
    }else{
        echo "
                <script>
                    alert('data faileed to edit');
                    location.href='../admin/admin-index.php?dasis';
                </script>
        ";
    }
}

?>

<div>
                <form class="align-middle" action="" method="POST" >
                <div class="col-6">
                    <label for="nisn" class="form-label">NISN :</label>
                    <input type="text" class="form-control" name="nisn" id="nisn" required 
                    value="<?= $sws["nisn"];?>">
                </div>

                <div class="col-md-6">
                <label for="nama" class="form-label">NAMA :</label>
                <input type="text" class="form-control" name="nama" id="nama" required 
                value="<?= $sws["nama"];?>">
                </div>

                <div class="col-md-6">
                <label for="kelas" class="form-label">KELAS :</label>
                <input type="text" class="form-control" name="kelas" id="kelas" 
                required value="<?= $sws["kelas"];?>">
                </div>

                <div class="col-md-6">
                <label for="tanggallahir" class="form-label">TANGGAL LAHIR :</label>
                <input type="text" class="form-control" name="tanggallahir" id="tanggallahir" 
                required value="<?= $sws["tanggallahir"];?>">
                </div>
<br>
                </div>
                <div class="col-12"> 
                <input type="submit" class="btn btn-dark" name="submit" value="submit">  
                </div>
                <div></div>
                </form>

</div>
</body>
</html>
