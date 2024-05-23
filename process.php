<?php

# Test the PHP environment
//phpinfo();

// Function to reduce number to the range of 1-22
function reduceNumber($num) {
    while ($num > 22) {
        $num -= 22;
    }
    return $num;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input number from the form
    $number = intval($_POST['number']);

    // Reduce the number
    $reducedNumber = reduceNumber($number);

    // Display the result
    echo "<h1>Reduced Number: $reducedNumber</h1>";
    echo '<a href="index.html">Go back</a>';
} else {
    // If accessed directly without a POST request, redirect back to the form
    header("Location: index.html");
    exit();
}

?>
