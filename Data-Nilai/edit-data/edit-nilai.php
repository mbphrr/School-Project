<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-Nilai</title>

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

    $id = $_GET['id'];

    $nilai = query("SELECT * FROM nilai WHERE id =$id")[0];

    if(isset($_POST['submit'])){
    if(nilaiedit($_POST) > 0){
        echo "
                <script>
                    alert('data has been edited');
                    location.href='../admin/admin-index.php?#nilai';
                </script>
        ";
    }else{
        echo "
                <script>
                    alert('data faileed to edit');
                    location.href='../admin/admin-index.php?#nilai';
                </script>
        ";
    }
}
?>

<div>
                <form class="align-middle" action="" method="POST" >
                <div class="col-6">
                 <label for="id" class="form-label">ID :</label>
                <input type="text" class="form-control" name="id" id="id" required 
                value="<?= $nilai["id"];?>">
                </div>

                <div class="col-md-6">
                <label for="nisn" class="form-label">NISN :</label>
                <input type="text" class="form-control" name="nisn" id="nisn" required 
                value="<?= $nilai["nisn"];?>">
                </div>

                <div class="col-md-6">
                <label for="mapel" class="form-label">MAPEL :</label>
                <input type="text" class="form-control" name="mapel" id="mapel" 
                required value="<?= $nilai["mapel"];?>">
                </div>

                <div class="col-md-6">
                <label for="nilai_1" class="form-label">NILAI-1 :</label>
                <input type="text" class="form-control" name="nilai_1" id="nilai_1" 
                required value="<?= $nilai["nilai_1"];?>">
                </div>

                <div class="col-md-6">
                <label for="nilai_2" class="form-label">NILAI-2 :</label>
                <input type="text" class="form-control" name="nilai_2" id="nilai_2" 
                required value="<?= $nilai["nilai_2"];?>">
                </div>

                <div class="col-md-6">
                <label for="nilai_3" class="form-label">NILAI-3 :</label>
                <input type="text" class="form-control" name="nilai_3" id="nilai_3" 
                required value="<?= $nilai["nilai_3"];?>">
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
