<?php  
$db = mysqli_connect("localhost", "root", "", "ukk");



function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = []; 
    while($row =mysqli_fetch_assoc($result)){
     $rows[] = $row;
    }
     return $rows;
 }
 function hapus($id){
    global $db;
  
    mysqli_query($db, "DELETE FROM cart WHERE id = $id");
    return mysqli_affected_rows($db);
}
function hapususer($id){
    global $db;
  
    mysqli_query($db, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($db);
}
 
function registrasi($data){
    global $db;
    
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
         
    if(mysqli_fetch_assoc($result)){
        echo 
        "<script> alert('username sudah terdaftar !') </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
     mysqli_query($db, "INSERT INTO user (id, username, password, role) VALUES('', '$username', '$password','')");

     return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
       nama = '$nama', nik = '$nik', email = '$email', gambar = '$gambar' WHERE id = $id ";

mysqli_query($db, $query);

return mysqli_affected_rows($db);
}

// Koneksi ke database
$db = new mysqli('localhost', 'root', '', 'ukk');

// Cek koneksi
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

function login($conn, $username, $password)
{
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($password, $row["password"])) {
        return $row["role"]; // Mengembalikan peran pengguna
    } else {
        return false; // Login gagal
    }
}




?> 