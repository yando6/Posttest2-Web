<?php include './cities.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <title>ARHA | Contact</title>
    <link rel="shortcut icon" href="./iconarha.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/require.css">
    <link rel="stylesheet" href="./assets/css/pages/contact.css">
    <link rel="stylesheet" href="./assets/css/pages/con_button.css">

</head>
<body>
    <div class="preloader" data-preloader>
        <div class="preloader-circle"></div>
    </div>
    
    <header class="header" data-header>
        <div class="container">
            
            <a href="./home.php" class="logo">
                <img src="./assets/images/logo-arha.png" width="151" height="28" alt="ARHA home">
            </a>
            
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    
                    <li class="navbar-item">
                        <a href="./home.php" class="label-lg navbar-link has-after">Home</a>
                    </li>
                    
                    <li class="navbar-item">
                        <a href="./service.php" class="label-lg navbar-link has-after">Services</a>
                    </li>
                    
                    <li class="navbar-item">
                        <a href="./portfolio.php" class="label-lg navbar-link has-after">Portfolio</a>
                    </li>
                    
                    <li class="navbar-item">
                        <a href="#" class="label-lg navbar-link has-after active">Contact</a>
                    </li>

                </ul>
            </nav>
            
            <button class="nav-open-btn nav-toggle-btn" aria-label="menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>
            
        </div>
    </header>
    <main>
        <article>
            <section class="section contact has-bg-image" aria-labelledby="contact-label" 
                style="background-image: url(./assets/images/contact-bg.png);">
                <div class="container">
                <form action="" class="contact-form" id="contact-form">

                        <h2 class="headline-sm" id="contact-label">Contact Me</h2>
                        <div class="wrapper">

                            <div>
                                <label for="name" class="label">First name</label>

                                <input type="text" name="name" id="name" placeholder="Name *" required 
                                    class="input-field">
                            </div>

                            <div>
                                <label for="email" class="label">Your Email</label>

                                <input type="email" name="email" id="email" placeholder="Email *" required 
                                    class="input-field">
                            </div>

                        </div>

                        <label for="subject" class="label">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject *" 
                            class="input-field">
							
						<label class="label">Gender</label>
						<div class="input-field">
						  <label>
							Male
							 <span style="display: inline-block;">
								<input type="radio" name="gender" id="male" value="male">
							  </span>
						  </label>

						  <label>
							Female
							<span style="display: inline-block;">
								<input type="radio" name="gender" id="female" value="female">
							</span>
						  </label>
						</div>
						
						<label class="label">City</label>
						<div class="input-field">
                            <select name="city" id="city">
                            <option value=""> Pilih kota anda</option>
                            <?php
                              foreach ($cities as $city) {
                                echo "<option value=\"$city\">$city</option>";
                              }
                            ?>
                          </select>
                        </div>
                        
                        <label class="label">Upload Foto Anda Untuk Profil</label>
						<div class="input-field">
					    <input type="file" id="file" name="file" accept="image/*">
						</div>

                        <label for="message" class="label">Your message </label>
                        <textarea name="message" id="message" placeholder="Your message *" required
                            class="input-field"></textarea>
                        
                        <div class="button-container">
                        <button id="sendBtn" class="btn btn-tertiary">Send Message</button>
                        </div>
                        
                    </form>
                    
                    <div class="contact-content">
                
                        <ul class="contact-list">
                
                            <li class="contact-item">
                
                                <div class="item-icon" style="background-color: hsl(177, 39%, 72%);">
                                        <ion-icon name="call" aria-hidden="true"></ion-icon>
                                </div>
                
                                <div>
                                    <p class="label-lg">Phone</p>
                
                                    <a href="tel:+6285787743947" class="body-lg">+62 857 8774 3947</a>
                                </div>
                
                            </li>
                
                            <li class="contact-item">
                
                                <div class="item-icon" style="background-color: hsl(41, 99%, 64%);">
                                        <ion-icon name="mail" aria-hidden="true"></ion-icon>
                                </div>
                
                                <div>
                                    <p class="label-lg">Mail</p>
                
                                    <a href="tel:yandonazwar29@gmail.com" class="body-lg">yandonazwar29@gmail.com</a>
                                </div>
                
                            </li>
                
                            <li class="contact-item">
                
                                <div class="item-icon" style="background-color: hsl(19, 97%, 85%);">
                                                    <ion-icon name="location" aria-hidden="true"></ion-icon>
                                </div>
                
                                <div>
                                    <p class="label-lg">Address</p>
                
                                    <address class="body-lg">Ds. Bangun Rejo RT.07 Jl.Agatis No.47 Kec.Tenggarong Seberang Kab.Kutai Kartanegara</address>
                                </div>
                                
                            </li>
                
                        </ul>
                
                    </div>
    
                </div>
            </section>
            
        </article>
    </main>
    
    <footer class="footer">
        <div class="container">

            <ul class="social-list">

                <li>
                    <a href="https://www.facebook.com/yandonaz?mibextid=ZbWKwL" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://instagram.com/xemroriph6?igshid=ZDdkNTZiNTM=" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://www.linkedin.com/in/muhammad-fathan-587bb6207" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>
                
            </ul>

            <p class="text-center">&copy; 2023 copyright all right reserved</p>

        </div>
    </footer>
    
    <script src="./assets/js/storeData.js"></script>
    <script src="./assets/js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>