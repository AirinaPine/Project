<?php 

    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if (!empty($name) && !empty($email) && !empty($message)) {
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $from = "$email";
                    $to = "airina.pineviciute@gmail.com";
                    $subject = "New message";
                    $sender = 'From ' . $name . ', ' . $email;
                    $text = htmlspecialchars($message);
                    mail($to, $subject, $sender, $text, $from);
                    echo "<script>alert('Ačiū už Jūsų žinutę, greitu metu su Jumis susisieksime!');</script>";
                }
        }

        include('db.php');
    }