<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030088');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama_buah = htmlspecialchars($data['nama_buah']);
  $stok_buah = htmlspecialchars($data['stok_buah']);
  $harga_buah = htmlspecialchars($data['harga_buah']);
  $foto_buah = htmlspecialchars($data['foto_buah']);

  $query = "INSERT INTO daftar_buah 
VALUES
('','$nama_buah','$stok_buah','$harga_buah','$foto_buah');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM daftar_buah WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}



function edit($data)
{
  global $conn;

  $id = ($data['id']);
  $nama_buah = htmlspecialchars($data['nama_buah']);
  $stok_buah = htmlspecialchars($data['stok_buah']);
  $harga_buah = htmlspecialchars($data['harga_buah']);
  $foto_buah = htmlspecialchars($data['foto_buah']);

  $query = "UPDATE daftar_buah SET nama_buah ='$nama_buah', stok_buah ='$stok_buah', harga_buah ='$harga_buah', foto_buah ='$foto_buah', WHERE id=$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM daftar_buah WHERE nama_buah LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
