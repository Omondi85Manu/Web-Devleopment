<?php
    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Do something with the data (e.g. send an email, save to a database, etc.)
        // ...

        // Output a confirmation message
        echo "Thank you, $name, for contacting us! We have received your message and will get back to you as soon as possible.";
    }
    
?>
