<?php
session_start();
//removes a art  from the cart using the id
if(isset($_GET['id'])){
    $items = $_GET['id'];
    $_SESSION['cart']=array_diff($_SESSION['cart'],array($items));
    header('location:cartList.php?success');
}else{
    header('location:cartList.php?failed');
}
?>