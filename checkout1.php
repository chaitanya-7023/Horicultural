<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cartData'])) {
        $cartData = json_decode($_POST['cartData'], true);

        echo "<h1>🧾 Order Summary</h1>";
        echo "<ul>";
        $total = 0;
        foreach ($cartData as $item) {
            $name = htmlspecialchars($item['name']);
            $price = intval($item['price']);
            $total += $price;
            echo "<li>$name - ₹$price</li>";
        }
        echo "</ul>";
        echo "<h3>Total: ₹$total</h3>";
    } else {
        echo "No cart data received.";
    }
} else {
    echo "Invalid request method.";
}
?>
