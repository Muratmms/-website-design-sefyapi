<?php
if (isset($_POST[email])) {
    $kime = "sefyapisistemleri@gmail.com";
    $konu = $_POST["subject"];
    $mesaj = "<h1>" . $_POST["message"] . "</h1>";
    $baslik = "From: " . $_POST["name"] . "<" . $_POST["email"] . ">\r\n";
    $baslik .= "Reply-to: deneme@bubirdenemedir.com\r\n";
    $baslik .= "Content-type: text/html\r\n";
    $alert = "<script>alert('Mesajınız gönderildi.')</script>";
    $alert2 = "<script>alert('Mesajınız gönderilemedi.')</script>";
    if (mail($kime, $konu, $mesaj, $baslik))
        echo $alert;
    else
        echo $alert2;
}

?>