<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carrito de Compras</h1>
        <a href="index.html" class="cart-button">Continuar Comprando</a>
    </header>
    <main>
        <?php if (count($_SESSION['cart']) > 0): ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $item): ?>
                    <li><?php echo $item['product']; ?> - $<?php echo $item['price']; ?></li>
                    <?php $total += $item['price']; ?>
                <?php endforeach; ?>
            </ul>
            <p>Total: $<?php echo $total; ?></p>
        <?php else: ?>
            <p>Tu carrito está vacío.</p>
        <?php endif; ?>
    </main>
</body>
</html>
