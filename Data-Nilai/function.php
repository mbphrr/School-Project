<?php
$servername ="madebyabyy.my.id";
$username ="rplsmk4padalaran_madeby";
$password ="2rQXYy6M";
$database ="rplsmk4padalaran_madebyabyy";

$db =  mysqli_connect("$servername","$username","$password","$database");


function query($query) {
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
     return $rows;
}


// CRUD Untuk TABEL-SISWA

// Tambah Data
function addsiswa($data){
    $nisn = $data["nisn"];
    $nama = $data["nama"];
    $kelas = $data["kelas"];
    $tanggallahir = $data["tanggallahir"];

    global $db;
    $query = "INSERT INTO siswa (nisn,nama,kelas,tanggallahir) VALUES ('$nisn','$nama','$kelas','$tanggallahir')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
    }

// Hapus Data
function siswahapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM siswa WHERE nisn = $id");
    return mysqli_affected_rows($db);
    }

// Edit Data
function siswaedit($data){
    $nisn = htmlspecialchars($data['nisn']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $tanggallahir = htmlspecialchars($data['tanggallahir']);

    global $db;
    $query = "UPDATE siswa SET 
                nisn = '$nisn', 
                nama = '$nama', 
                kelas = '$kelas', 
                tanggallahir = '$tanggallahir'
                WHERE nisn =$nisn 
                ";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}





// CRUD Untuk TABEL-GURU
function addguru($data){
    $nip = $data["nip"];
    $nama = $data["nama"];
    $jabatan = $data["jabatan"];

    global $db;
    $query = "INSERT INTO guru (nip,nama,jabatan) VALUES ('$nip','$nama','$jabatan')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
    }

// Hapus Data
function guruhapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM guru WHERE nip = $id");
    return mysqli_affected_rows($db);
    }

// Edit Data
function guruedit($data){
    $nip = htmlspecialchars($data['nip']);
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);

    global $db;
    $query = "UPDATE guru SET
                nip = '$nip',
                nama = '$nama',
                jabatan = '$jabatan'
                WHERE nip=$nip"
                ;
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}




// CRUD Untuk TABEL-NILAI
function addnilai($data){
    $id = $data["id"];
    $nisn = $data["nisn"];
    $mapel = $data["mapel"];
    $nilai_1 = $data["nilai_1"];
    $nilai_2 = $data["nilai_2"];
    $nilai_3 = $data["nilai_3"];

    global $db;
    $query = "INSERT INTO nilai (id,nisn,mapel,nilai_1,nilai_2,nilai_3) VALUES ('$id','$nisn','$mapel','$nilai_1','$nilai_2','$nilai_3')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
    }

// Hapus Data
function nilaihapus($id){
    global $db;
    mysqli_query($db,"DELETE FROM nilai WHERE id = $id");
    return mysqli_affected_rows($db);
    }

// Edit Data
function nilaiedit($data){
    $id = $data['id'];
    $nisn = htmlspecialchars($data['nisn']);
    $mapel = htmlspecialchars($data['mapel']);
    $nilai_1 = htmlspecialchars($data['nilai_1']);
    $nilai_2 = htmlspecialchars($data['nilai_2']);
    $nilai_3 = htmlspecialchars($data['nilai_3']);

    global $db;
    $query = "UPDATE nilai SET
                nisn = '$nisn',
                mapel = '$mapel',
                nilai_1 = '$nilai_1',
                nilai_2 = '$nilai_2',
                nilai_3 = '$nilai_3'
                WHERE id = $id
                ";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}

// function edit data siswa
function editdatasiswa ($data){
    $id  = $data ['id'];
    $nisn = htmlspecialchars ($data['nisn']);
    $mapel = htmlspecialchars ($data['mapel']);
    
}


?>

