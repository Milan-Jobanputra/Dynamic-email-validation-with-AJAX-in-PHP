<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate other form fields if needed
    // ...

    // Process the email if it's valid
    $email = $_POST["email"];

    // Perform further processing, save to database, etc.
    // ...

    // For this example, we'll just echo a success message
    echo "Form submitted successfully!";
} else {
    // Invalid request method
    echo "Invalid request method";
}
?>
