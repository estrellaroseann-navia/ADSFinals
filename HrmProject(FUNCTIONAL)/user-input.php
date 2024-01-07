<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch user input
    $userInput = $_POST["user-input"];

    // Use the user input as needed (e.g., display, store in a database, etc.)
    echo "You entered: " . $userInput;
}
?>
