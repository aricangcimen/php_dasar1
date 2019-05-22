<?php 
session_start();




?>    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple CRUD - Create </title>
</head>
<body>
    <h1>Create Product </h1>
    <form action = "doADDProduct.php" method = "post" enctype = "multipart/form-data">
    <table>
    <tr>
    <td>Product Name</td>
    <td>:</td>
    <td><input type="text" name = "productName"></td>
    </tr>
    <tr>
    <td>Product Description </td>
    <td>:</td>
    <td><textarea name = "product Description"></textarea></td>
    </tr>
    <tr>
    <td>Product Price</td>
    <td>:</td>
    <td><input type="number" name = "product price"></td>
    </tr>
    <td>Product Price</td>
    <td>:</td>
    <td><input type="file" name = "product Image"></td>
    </tr>
    <td>Product Price</td>
    <td>:</td>
    <td><button> save product </button></td>
    </tr>

    </table>
    </form>
    <?php 
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset $_SESSION["message"];

    }
    ?>
</body>
</html>