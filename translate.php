<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessible Amusement Park</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Google Translate Script -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 
                'google_translate_element'
            );
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Custom CSS for Navigation and Translate Widget -->
    <style>
        /* General Navigation Styling */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .menu-toggle {
            display: none;
        }

        /* Translate Widget Styling */
        #google_translate_element {
            margin-right: auto; /* Positions the widget to the left */
            padding-right: 20px;
        }

        /* Mobile Styling */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            nav ul {
                display: none; /* Hidden initially */
                flex-direction: column;
                gap: 10px;
            }

            nav ul.show {
                display: flex; /* Show on toggle */
            }
        }
    </style>
</head>
<body>

<header>
    <!-- Navigation with Google Translate -->
    <<!-- Navigation Menu with Dropdown -->
<nav>
    <!-- Google Translate Widget -->
    <div id="google_translate_element"></div>
    
    <!-- Navigation Menu -->
    <span class="menu-toggle" onclick="toggleMenu()">☰</span> <!-- Toggle button -->
    <ul>
        <li><a href="index.php">Home / Inicio</a></li>
        <li><a href="directions.php">Park Direction / Dirección del Parque</a></li>
        <li><a href="admin.php">Admin / Administrador</a></li>
        <li><a href="register.php">Register / Registro</a></li>
        <li><a href="login.php">Login / Iniciar sesión</a></li>
    </ul>
</nav>

</header>

<main>
    <section id="welcome" class="flex-container">
        <div class="text-container">
            <h2>Experience the Park for Everyone</h2>
            <p>We provide a fully accessible amusement park experience for all guests, including those with disabilities. Join us and enjoy your visit!</p>
            <a href="register.php" class="btn get-started-btn">Get Started</a>
        </div>
        <div class="image-container">
            <img src="images/1.jpeg" alt="Amusement Park" />
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 Accessible Amusement Park. All rights reserved.</p>
</footer>

<script>
    function toggleMenu() {
        const navLinks = document.querySelector("nav ul");
        navLinks.classList.toggle("show");
    }
</script>

</body>
</html>
