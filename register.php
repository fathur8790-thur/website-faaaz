<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="icon" href="./files/faazwisata_-21-12-2023-0001-removebg-preview.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body class="register-body">

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

    <section class="registration">
        <div class="register-form">
            <h1>Register <span>Here</span></h1>
            <form action="" onsubmit="return validateform()">

            <input type="text" name="myname1" placeholder="Name" id="name" required>
            <input type="email" name="myemail" placeholder="Email-Id" id="" required>
            <input type="tel" name="myphone" placeholder="Phone No." id="phonenum" required>
            <input type="number" name="myage" placeholder="Age" id="" required>
            <h4>Gender</h4>
            <input type="radio" name="mygender" id="" required> Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            <input type="radio" name="mygender" id=""> Female
            <h4>Departure</h4>
            <input type="datetime-local" name="departuredate" id="" required>
            <h4>Return</h4>
            <input type="datetime-local" name="returndate" id="" required>
            <h4>Travel Destination</h4>
            <input type="checkbox" name="td" id=""> Kashmir &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Istanbul &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Paris &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Bali &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Dubai &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Geneva &nbsp; &nbsp; &nbsp; 
            <input type="checkbox" name="td" id=""> Port Blair &nbsp; &nbsp; &nbsp;
            <input type="checkbox" name="td" id=""> Rome &nbsp; &nbsp; &nbsp;
            <br> <br>
            <h4>Package</h4>
            <input type="radio" name="locations" id="loc1" required> Bronze &nbsp; &nbsp; &nbsp;
            <input type="radio" name="locations" id="loc1"> Silver &nbsp; &nbsp; &nbsp;
            <input type="radio" name="locations" id="loc1"> Gold &nbsp; &nbsp; &nbsp;
            <input type="radio" name="locations" id="loc1"> Platinum &nbsp; &nbsp; &nbsp;
            <br> <br> 
            <input type="checkbox" name="t&c" id="" checked required> I accept the Terms & Conditions.
            <br> <br> 
            <input type="submit" value="Submit" class="submitbtn">

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

<!-- Javascript -->
<script>
    function validateform(){ 
        var tel=document.getElementById("phonenum").value;  

        if(tel.length<10){  
            alert("Phone number must be of atleast 10 digits!");  
            return false;  
        } else if(isNaN(tel)){
            alert("Phone number should not include character!");
            return false;
        }
        return true;
}  
</script>

</body>
</html>
