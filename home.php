<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">

    <!--?========== PRIMARY META TAGS ===========?-->

    <title>ARHA - Mulawarman University Student from Tgr Sbr, KalTim</title>
    <meta name="title" content="ARHA - Mulawarman University Student from Tgr Sbr, KalTim">
    <meta name="description" content="This is a personal portfolio html template made by Muhammad Fathan Hari AKA ARHA">

    <!--?========== FAVICON ===========?-->

    <link rel="shortcut icon" href="./iconarha.png" type="image/x-icon">

    <!--?========== GOOGLE FONTS ===========?-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" 
    rel="stylesheet">

    <!--?========== CUSTOM CSS ===========?-->

    <link rel="stylesheet" href="./assets/css/require.css">
    <link rel="stylesheet" href="./assets/css/main.css">

</head>
<body>
    <script>
function updateGreeting() {
  // Retrieve the currently logged-in user's email from localStorage
  var loggedInUser = JSON.parse(localStorage.getItem("loggedInUser"));
  var userEmail = loggedInUser ? loggedInUser.email : "";

  // Get existing user data from localStorage
  var existingData = JSON.parse(localStorage.getItem("userData"));

  // Find the user with the matching email
  var matchedUser = existingData.find(function(user) {
    return user.email === userEmail;
  });

  // Update the HTML with the user's name
  var greeting = document.getElementById("user-name");
  greeting.innerHTML = matchedUser ? matchedUser.name : "";
}

window.addEventListener("load", updateGreeting);


    </script>

    <!--?========== PRELOADER ===========?-->

    <div class="preloader" data-preloader>
        <div class="preloader-circle"></div>
    </div>


    <!--?========== HEADER ===========?-->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logo-arha.png" width="151" height="28" alt="ARHA home">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="#" class="label-lg navbar-link has-after active">Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="./service.php" class="label-lg navbar-link has-after">Services</a>
                    </li>

                    <li class="navbar-item">
                        <a href="./portfolio.php" class="label-lg navbar-link has-after">Portfolio</a>
                    </li>

                    <li class="navbar-item">
                        <a href="./contact.php" class="label-lg navbar-link has-after">Contact</a>
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

            <!--?========== HERO ===========?-->

            <section class="section hero" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">👋 <span id="user-name"></span>, My name is Muhammad Fathan Hari</p>

                        <h1 class="headline-lg">I'm a Web Developer</h1>

                        <p class="hero-text body-md">
                            From Tenggarong Seberang, Kalimantan Timur.
                        </p>
						
						<a class="btn btn-primary">Let's Start</a>

                    </div>

                    <figure class="hero-banner">
                        <img src="./assets/images/hero-banner.png" width="680" height="645" alt="Muhammad Fathan Hari - Web Developer" 
                        class="w-100">
                    </figure>
                </div>
            </section>



            <!--?========== CLIENT ===========?-->

            <section class="client" aria-label="Trusted client">
            </section>


            <!--?========== ABOUT ===========?-->

            <section class="section about" aria-label="about me">
                <div class="container">

                    <figure class="about-banner">
                        <img src="./assets/images/about-banner.png" width="580" height="554" loading="lazy" 
                        alt="Muhammad Fathan Hari - Web Developer" class="w-100">
                    </figure>

                    <div class="about-content">

                        <h2 class="title-lg">I am a Front-End Web Developer
                        </h2>

                        <p class="body-md section-text">
                            I have expertise in HTML, CSS, and JavaScript and have a strong foundation in web development best practices.
							I am skilled in building websites that are visually appealing, responsive, and user-friendly.
                        </p>
						
						<ul class="about-list">

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">109+</strong> Projet Completed
                                </p>
                            </li>

                            <li>
                                <p class="list-text">
                                    <strong class="strong title-md">105+</strong> Happy Clients
                                </p>
                            </li>

                        </ul>

                        <div class="wrapper">
                            <a href="./contact.php" class="btn btn-primary">Contact Me</a>

                            <a href="./portfolio.php" class="btn btn-secondary">Portfolio</a>
                        </div>
						
                    </div>
					
                </div>
            </section>
			
			
			<!--?========== SKILL ===========?-->

            <section class="section skill" aria-labelledby="skill-label">
                <div class="container">

                    <div class="skill-content">

                        <h2 class="section-title headline-md" id="skill-label">My Skills</h2>

                        <ul class="skill-list">

                            <li>
                                <div class="card card-sm" style="background-color: hsl(177, 39%, 72%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-html5"></ion-icon>
                                    </div>

                                    <h2 class="card-title">HTML</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(41, 99%, 64%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-css3"></ion-icon>
                                    </div>

                                    <h2 class="card-title">CSS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(19, 97%, 85%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-react"></ion-icon>
                                    </div>

                                    <h2 class="card-title">React JS</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(221, 100%, 79%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-angular"></ion-icon>
                                    </div>

                                    <h2 class="card-title">Angular</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(76, 39%, 72%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-apple"></ion-icon>
                                    </div>

                                    <h2 class="card-title">IOS App</h2>

                                </div>
                            </li>

                            <li>
                                <div class="card card-sm" style="background-color: hsl(245, 100%, 90%);">

                                    <div class="card-media">
                                        <ion-icon name="logo-android"></ion-icon>
                                    </div>

                                    <h2 class="card-title">App Dev</h2>

                                </div>
                            </li>

                        </ul>

                    </div>

                    <figure class="skill-banner">
                        <img src="./assets/images/skill-banner.png" width="281" height="357" loading="lazy"
                        alt="ARHA - Web Developer" class="w-100">
                    </figure>

                </div>
            </section>



            <!--?========== CTA ===========?-->

            <section class="cta">
                <div class="container">
                    <h2 class="title-lg">Intrested working with me?</h2>

                    <a href="./contact.php" class="btn btn-tertiary">Contact Now</a>
                </div>
            </section>



            <!--?========== TESTIMONIALS ===========?-->

            <section class="section testi" aria-labelledby="testi-label">
                <div class="container">

                    <h2 class="headline-md section-title text-center" id="testi-label">Testimonial</h2>

                    <ul class="slider">

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="./assets/images/makima-2.jpg" width="100" height="100" loading="lazy"
                                    alt="Anonymous" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                       "Saya sangat terkesan dengan jasa web yang disediakan oleh ARHA.
									   Prosesnya sangat mudah dan cepat, serta hasilnya sangat profesional dan mengagumkan.
									   Terima kasih atas layanan yang luar biasa ini!"
                                    </blockquote>

                                    <p class="client-name">Anonymous - M</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="./assets/images/saitama.jpg" width="100" height="100" loading="lazy"
                                    alt="Anonymous" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        "Saya sangat puas dengan desain website yang dibuat oleh ARHA.
										Tampilannya sangat menarik dan mudah dinavigasi, serta sangat menggambarkan merek saya dengan baik.
										Saya sangat merekomendasikan jasa web ini kepada siapa pun yang mencari solusi web yang berkualitas."
                                    </blockquote>

                                    <p class="client-name">Anonymous - S</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="./assets/images/naruto.jpg" width="100" height="100" loading="lazy"
                                    alt="Anonymous" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                       "Saya sangat senang dengan hasil akhir website yang dibuat oleh ARHA.
									   Desainnya sangat kreatif dan menarik perhatian, serta fungsi yang disediakan sangat mudah digunakan oleh pengunjung.
									   Terima kasih atas hasil yang luar biasa ini, dan saya pasti akan menggunakan jasa web ini lagi di masa depan."
                                    </blockquote>

                                    <p class="client-name">Anonymous - N</p>

                                </div>

                            </div>
                        </li>

                        <li class="slider-item card-container">
                            <div class="card card-lg">

                                <figure class="card-media">
                                    <img src="./assets/images/muzan.jpg" width="100" height="100" loading="lazy"
                                    alt="Anonymous" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <blockquote class="body-sm">
                                        "Saya sangat terkesan dengan kualitas pelayanan yang diberikan oleh ARHA.
										Mereka sangat responsif dan selalu siap membantu saya dengan setiap permintaan atau masalah yang saya hadapi.
										Saya sangat merekomendasikan jasa web ini kepada siapa saja yang mencari layanan web yang terpercaya dan berkualitas."
                                    </blockquote>

                                    <p class="client-name">Anonymous - Mz</p>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>
			
        </article>
    </main>



    <!--?========== FOOTER ===========?-->

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

    <!--?========== CUSTOM JS ===========?-->

    <script src="./assets/js/script.js"></script>

    <!--?========== IONICON ===========?-->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>