<?php 
if(isset($_POST['submit'])){
    try{
    $to = "trail.contact.us@gmail.com";
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $phoneNumber = $_POST['phonenumber'];
    $reason = $_POST['reason'];
    $contactForm = $_POST['contactForm'];
    $subject = "Serwis TRAIL formularz kontaktowy";

    if(empty($phoneNumber)){
        $message =  "Imię:   $name\n".
        "Email:   $from\n".
        "Proferowana forma kontaktu:    $contactForm \n".
        "Powód kontaktu:    $reason \n\n".
        "Tresc wiadomosci: \n\n".
        $_POST['message'];
    }else{
        $message =  "Imię:   $name\n".
        "Email:   $from\n".
        "Numer telefonu:    $phoneNumber\n".
        "Proferowana forma kontaktu:    $contactForm \n".
        "Powód kontaktu:    $reason \n\n".
        "Tresc wiadomosci: \n\n".
        $_POST['message'];
    }
    
    mail($to,$subject,$message);
    header('location: Kontakt.html');
    }catch (Exception $e)  {     
    echo "<script type='text/javascript'>alert('Wiadomość nie została wysłana!');</script>";
    }
}
?>