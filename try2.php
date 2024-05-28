<?php
function calculateFinalPrice($originalPrice, $discountPrice) {
    $discountAmount = $originalPrice * $discountPrice / 100;
    $finalPrice = $originalPrice - $discountAmount;
    return $finalPrice;
}

function main() {
    echo "Enter numbers: ";
    $input = readline();
    $numbers = explode(" ", $input);
    
    $originalPrice = (int)$numbers[0];
    $discount = (int)$numbers[1];
    
    $finalPrice = calculateFinalPrice($originalPrice, $discount);
    echo "Price: " . number_format($finalPrice, 2, '.', '') . "\n";
}

main();
?>
