<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top-bar"></div>
        <nav class="hidden-navigation collapsed" style="transform: translateY(-100%)">
            <a href="#">Current Releases</a>
            <a href="#">Roster</a>
            <a href="#">About Us</a>
            <a href="#">Work With Us</a>
            <a href="#">Testimonials</a>
            <div class="close-button"><img src="img/close.png" alt="Close menu"></div>
        </nav>
        <div class="hamburger-button"><img src="img/hamburder.png" alt="Hamburger Menu"></div>
        <!-- rest of header content -->
    </header>
    <div class="main-content">
        <div class="image-container">
            <img src="img/logo.png" width="410" height="221">
        </div>
        <div class="navigation">
            <a href="#">current releases</a>
            <a href="#">roster</a>
            <a href="#">about us</a>
            <a href="#">work with us</a>
            <a href="#">testimonials</a>
        </div>
        <div class="image-grid">
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/1.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/2.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/3.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/4.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/5.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/6.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/7.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/8.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/9.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/10.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/11.png"></a>
            <a href="https://www.instagram.com/riotactmedia/?hl=en"><img src="img/IG/12.png"></a>
        </div>
        <div class="instagram-link">
            <a href="#">
                <img src="img/instagram-icon.png" alt="Instagram Icon" height="20" width="20">
                <span>riotactmedia</span>
            </a>
        </div>
    </div>
    <footer>
        <div class="footer-column">
            <img src="img/owlwhite.png" alt="Riot Act Owl" class="owl">
        </div>
        <div class="footer-column">
            <h3>Learn More</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p>Email: example@example.com</p>
            <p>Phone: 555-555-5555</p>
        </div>
    </footer>
    <div class="footer-bottom">
        <hr>
        <p>&copy; 2023 Riot Act Media. All rights reserved.</p>
    </div>
    <script>
    const hamburgerButton = document.querySelector('.hamburger-button');
    const closeButton = document.querySelector('.close-button');
    const hiddenNavigation = document.querySelector('.hidden-navigation');

    hamburgerButton.addEventListener('click', toggleMenu);
    closeButton.addEventListener('click', toggleMenu);

    function toggleMenu() {
        console.log("TEST");
        if (hiddenNavigation.classList.contains('collapsed')) {
            // hiddenNavigation.style.display = 'block';
            hiddenNavigation.classList.remove('collapsed')
        } else {
            hiddenNavigation.classList.add('collapsed')
        }
    }
    </script>
</body>

</html>