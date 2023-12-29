<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include './database.php';
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alasan=$_POST['alasan'];
    $pesan=$_POST['pesan'];
    $stmt = $con->prepare("INSERT INTO `kritik&saran` (nama, email, alasan, pesan) VALUES (?, ?, ?, ?)");
    
    // Bind parameter ke prepared statement
    $stmt->bind_param("ssss", $nama, $email, $alasan, $pesan);
    
    // Eksekusi prepared statement
    if ($stmt->execute() === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Tutup statement dan koneksi
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kritik&Saran</title>
    <link rel="icon" href="./files/faazwisata_-21-12-2023-0001-removebg-preview.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>

<body class="contactbody">
           <nav>
            <img src="./files/faazwisata_-21-12-2023-0001-removebg-preview.png" class="logo" alt="Logo" title="FirstFlight Travels">

            <ul class="navbar">
                <li>
                    <a href="./index">Home</a>
                    <a href="./index#locations">Destinations</a>
                    <a href="./index#package">Packages</a>
                    <a href="./about">About Us</a>
                    <a href="./contact">Contact Us</a>
                </li>
            </ul>
        </nav>

        <section class="contact">
            <div class="contact-form">
                <h1>Kritik <span>Saran</span></h1>
                <p>Kenyamanan pelanggan yang utama</p>
            <form method="post" action="">
                <input type="text" name="nama" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your E-mail" required>
                <input type="text" name="alasan" placeholder="What brings you here?" required>
                <textarea name="pesan" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <input type="submit" value="Submit" class="submit-btn">
            </form>
            </div>
            
        </section>

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./register">Register</a></li>
                    <li><a href="./about">About Us</a></li>
                    <li><a href="./contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://api.whatsapp.com/send?phone=6285159909203" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://www.instagram.com/faazwisata_" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.tiktok.com/@412ghie?_t=8iOprBrqPIn&_r=1" target="_blank"><i class='bx bxl-tiktok' ></i></a>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=faaztour.travel23@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="end">
        <p>Copyright © 2023 Faaz Tour & Travels All Rights Reserved.<br>Website developed by: Team</p>
    </div>
</section>

</body>
</html>
