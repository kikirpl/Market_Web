<?php 
session_start();
include "functions.php";

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
 
    $check_cart_numbers = mysqli_query($db, "SELECT * FROM `cart` WHERE nama = '$product_name'") or die('query failed');
 
    if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart!';
    }else{
       mysqli_query($db, "INSERT INTO cart (nama, harga, gambar) VALUES('$product_name', '$product_price', '$product_image')") or die('query failed');
       $message[] = 'product added to cart!';
    }
 
 }
?>