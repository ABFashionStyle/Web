<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];

    $_SESSION['cart'][] = array('product' => $product, 'price' => $price);
}

header('Location: cart.php');
exit();
?>
