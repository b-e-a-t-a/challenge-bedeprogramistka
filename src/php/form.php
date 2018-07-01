    <?php
        $to      = 'karolczak.beata@gmail.com';
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = 'Nowa wiadomość od ' . $name . ' (' . $email . ')';
        $message = $_POST['message'];
        $headers = 'From: ' . $name . ' (' . $email . ')';
        $headers .= 'Content-Type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
        echo '<h2>Thank you for your e-mail</h2>';
    ?>
    