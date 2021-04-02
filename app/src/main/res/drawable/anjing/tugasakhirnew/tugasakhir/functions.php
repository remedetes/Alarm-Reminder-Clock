<?php

$conn = mysqli_connect("localhost", "root", "", "tugasakhir");



function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



// Users

function searchUsers($keyword)
{
    $query = "SELECT * FROM user
				WHERE
			  email LIKE '%$keyword%' OR
              username LIKE '%keyword%'
			";
    return query($query);
}


function searchOrders($keyword)
{
    $query = "SELECT * FROM pesanan
                WHERE
              nama LIKE '%$keyword%' OR 
              email LIKE '%$keyword%' OR
              pesanan LIKE '%$keyword%' OR
              tgl LIKE '%$keyword%'
         
            ";
    return query($query);
}


function editOrders($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $tgl = htmlspecialchars($data["tgl"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $pesanan = htmlspecialchars($data["pesanan"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    // cek apakah user pilih gambar baru atau tidak
    // if ($_FILES['gambar']['error'] === 4) {
    //     $gambar = $gambarLama;
    // } else {
    //     $gambar = upload();
    // }


    $query = "UPDATE pesanan SET
                nama = '$nama',
                email = '$email',
                tgl = '$tgl',
                jumlah = '$jumlah',
                pesanan = '$pesanan',
                no_hp = '$no_hp'
            
              WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}