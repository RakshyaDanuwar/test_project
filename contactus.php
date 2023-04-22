<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us</title>
    <link rel = "stylesheet" href = "CSS/style.css">
    
</head>
<body>
<section class="header">
  <?php include "header.php" ?>
  </section>

  <section>
            <div class="container">
                <div class="contactInfo"> 
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span>Kathmandu, Nepal<br>
                                    Kalanki St</span>
                                </span>
                            </li>
                            <li>
    
                                
                                <span><a href = "mailto: nepalicustume@gmail.com">nepalicustume@gmail.com</a></span>
                            </li>
                            <li>
                                
                                <span></span>
                            </li>

                        </ul>
                
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
                    
                    
             
        </section>
  

<section class="footer">
<?php include "footer.php"?>

</section> 
    
</body>
</html>