<?php
$conn = mysqli_connect("localHost","root", "root","phpdasar");
$result = mysqli_query($conn , "SELECT * FROM mahasiswa");
var_dump($result);
if(!result){
echo mysqli_error($conn);
// memunculkan errornya
//ambil data (fetch) mahasiswa dari object result
//mysqli_fecth_row() mengembalikan arary numeric
//mysqli_fetch_assoc()
//mysqli_fetch_array()
//mysqli_fetch_object()

$mhs = mysqli_fetch_row($result);
var_dump($mhs);
$mhs1 = mysqli_fetch_assoc($result);
var_dump($mhs1["jurusan"]);
$mhs2

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>