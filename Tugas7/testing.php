<?php
echo "Hello, World!<br>";

$a = 5;
if ($a > 0) {
    echo "Positive number<br>";
} else {
    echo "Non-positive number<br>";
}

$role = "admin";
switch ($role) {
    case "admin":
        echo "Welcome, Admin!<br>";
        break;
    case "editor":
        echo "Welcome, Editor!<br>";
        break;
    case "user":
        echo "Welcome, User!<br>";
        break;
    default:
        echo "Unknown role<br>";
}   

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $value) {
    echo "Value: $value<br>";
}
?>