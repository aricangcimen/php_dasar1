<?php
$conn = mysqli_connect("localHost","root", "root","phpdasar");
$result = mysqli_query($conn , "SELECT * FROM mahasiswa");
var_dump($result);
if(!result){
echo mysqli_error($conn);
// memunculkan errornya
}
?>



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