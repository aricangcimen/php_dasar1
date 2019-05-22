<?php
if(isset($_POST["Product Name"])){
    include 'connect.php'
    $productName = $_POST["productName"];
    $productDescription =$_POST["productDescription"];
    $productPrice =$_POST["productPrice"];
    $productImage =$_POST["productImage"];
    $message = "";

    if($productName = ""){
        $message = "product name must be filled";
    } else if($productDescription = ""){
        $message = "product Description must be filled";
    }else if ($productPrice = ""){
        $message = "product Price must be filled";
    }else if (isset($productImage["tap_name"] || $productImage["tap_name"] == " " )){
            $message = "product image must be choosen";
 }



}
?>