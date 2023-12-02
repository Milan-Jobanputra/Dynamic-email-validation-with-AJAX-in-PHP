<?php
// This is a simplified example. In a real-world scenario, you would perform more robust validation and connect to a database to check email availability.

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Perform email validation (you can use filter_var or a regular expression)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span style='color: red;'>Invalid email format</span>";
    } else {
        // Check email availability (this is just an example, replace it with your logic)
        $existingEmails = ['existing@example.com', 'another@example.com'];

        if (in_array($email, $existingEmails)) {
            echo "<span style='color: red;'>Email already exists</span>";
        } else {
            echo "<span style='color: green;'>Email available</span>";
        }
    }
} else {
    echo "Invalid request";
}
?>
