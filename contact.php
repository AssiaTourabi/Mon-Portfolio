<?php
if (isset($_POST['submit'])) {
    $to = 'assiatourabi55@email.com'; 
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['full_name'] . " <" . $_POST['email'] . ">\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Votre message a bien été envoyé.");</script>';
    } else {
        echo '<script>alert("Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.");</script>';
    }
}
?>
