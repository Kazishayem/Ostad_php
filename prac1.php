<?php
// $cart = array(
//     array('id' => 1, 'name' => 'Product 1', 'price' => 10.99, 'quantity' => 2),
//     array('id' => 2, 'name' => 'Product 2', 'price' => 5.99, 'quantity' => 1),
//     array('id' => 3, 'name' => 'Product 3', 'price' => 7.99, 'quantity' => 3)
// );

// // Calculate the total cost of the items in the cart
// $total_cost = 0;
// foreach ($cart as $item) {
//     $total_cost += $item['price'] * $item['quantity'];
// }

// echo "Total cost: $". number_format($total_cost, 2);


// $students = array(
//     array('id' => 1, 'name' => 'John Doe', 'grade' => 'A', 'age' => 20),
//     array('id' => 2, 'name' => 'Jane Doe', 'grade' => 'B', 'age' => 21),
//     array('id' => 3, 'name' => 'Bob Smith', 'grade' => 'C', 'age' => 22)
// );

// // Find all students with a grade of 'A'
// $a_students = array_filter($students, function($student) {
//     return $student['grade'] == 'A';
// });

// echo "Students with a grade of 'A':";
// foreach ($a_students as $student) {
//     echo "<br>". $student['name'];
// }




$weather_data = array(
    'temperature' => 25.5,
    'humidity' => 60,
    'wind_speed' => 10,
    'conditions' => 'Sunny'
);

// Display the weather data
echo "Current weather: \n";
echo "Temperature: ". $weather_data['temperature']. "°C \n";
echo "Humidity: ". $weather_data['humidity']. "% \n";
echo "Wind speed: ". $weather_data['wind_speed']. " km/h \n";
echo "Conditions: ". $weather_data['conditions'];


?>