<?php
function calculateFinalPrice($originalPrice, $discountPrice) {
    $discountAmount = $originalPrice * $discountPrice / 100;
    $finalPrice = $originalPrice - $discountAmount;
    return $finalPrice;
}

function main() {
    $originalPrice = 50;
    $discount = 50;
    
    $finalPrice = calculateFinalPrice($originalPrice, $discount);
    echo "Price: " . number_format($finalPrice, 2, '.', '') . "\n";
}

main();
?>

