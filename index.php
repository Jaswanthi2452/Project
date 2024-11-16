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
<<<<<<< HEAD
    </style>
</head>
<body>
  <header>
    <div class="logo-container">
        <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
        <h1>Welcome to the Accessible Amusement Park</h1>
    </div>
    <nav>
        <!-- Navigation Menu -->
        <span class="menu-toggle" onclick="toggleMenu()" tabindex="0" role="button" 
              aria-label="Toggle navigation menu" 
              onkeydown="if(event.key === 'Enter' || event.key === ' ') toggleMenu();">☰</span>
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <!-- Google Translate Widget after Home link -->
            <li>
                <div id="google_translate_element" aria-hidden="true"></div>
            </li>
            
            <li><a href="directions.php">Park Direction</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
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


<style>

=======

    <style>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
        /* Basic Reset */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
<<<<<<< HEAD
=======
        /* Limit the height of the translate dropdown */
.goog-te-menu2 {
    max-height: 200px; /* Adjust this value as needed */
    overflow-y: auto;
}

>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 5px 15px; /* Reduced padding to make header thinner */
        }

        .logo {
            width: 50px; /* Adjust size as needed */
            height: auto;
            margin-right: 8px; /* Space between logo and text */
        }

        h1 {
            font-size: 1.2rem; /* Adjust font size for a compact look */
            margin: 0;
            color: #333;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: flex-start;
        }

        nav ul li {
            margin: 0 10px; /* Reduced space between nav items */
        }

        main {
            padding: 20px;
            display: flex;              
            justify-content: flex-start;
            margin-top: 100px;
            background-color: #f4f4f9;
        }

        /* Flexbox styling */
.flex-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.text-container {
    flex: 1;
    padding-right: 20px;
}

.text-container h2 {
    font-size: 2.5em;
    color: #2c3e50;
    margin-bottom: 15px;
}

.text-container p {
    font-size: 1.5em;
    color: #34495e;
    margin-bottom: 25px;
    line-height: 1.6;
}

.get-started-btn {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.2em;
}

.image-container {
    flex: 1;
}

.image-container img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
}
<<<<<<< HEAD

/* Footer styling */
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 15px 0;
}

=======
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
/* Horizontal layout for mobile view */
@media (max-width: 768px) {
    .flex-container {
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 20px; /* Optional gap for spacing */
    }

    .text-container {
        padding-right: 10px; /* Adjust padding for mobile view */
        text-align: center;
    }
}


        /* Responsive Design */
        @media (max-width: 768px) {
            .flex-container {
                flex-direction: column;
                text-align: center;
            }

            .text-container {
                padding-right: 0;
                padding-bottom: 20px;
            }

            .text-container h2 {
                font-size: 2em;
            }

            .text-container p {
                font-size: 1.2em;
            }

            .image-container {
                width: 100%;
            }
        }
         /* Mobile Toggle Menu */
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
<<<<<<< HEAD
=======
        
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
       
         body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Main container styles */
        main {
            flex: 1; /* Allows main content to grow and push the footer down */
        }

        /* Navigation styling */
        nav ul {
            list-style: none;
            display: flex;
            gap: 8px;
            padding: 0;
            margin: 0;
        }

        /* Mobile Toggle Menu */
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            
            nav ul {
                display: none;
                flex-direction: column;
               
                padding: 15px;
            }

            nav ul.show {
                display: flex;
            }
        }
        /* Flexbox styling */
.flex-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.text-container {
    flex: 1;
    padding-right: 20px;
}

.text-container h2 {
    font-size: 2.5em;
    color: #2c3e50;
    margin-bottom: 15px;
}

.text-container p {
    font-size: 1.5em;
    color: #34495e;
    margin-bottom: 25px;
    line-height: 1.6;
}
<<<<<<< HEAD
.get-started-btn {
    display: inline-block;
    background-color: #0056b3; /* Darker blue for better contrast */
=======

.get-started-btn {
    display: inline-block;
    background-color: #007bff;
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.2em;
}
<<<<<<< HEAD
.
=======

>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
/* Center button in mobile view */
@media (max-width: 768px) {
    .text-container {
        text-align: center; /* Center-aligns text and button */
        padding-right: 0;
    }

    .get-started-btn {
        margin-top: 15px; /* Optional spacing above button */
    }
}

.image-container {
    flex: 1;
}

.image-container img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
}

/* Footer styling */
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    padding: 15px 0;
<<<<<<< HEAD
}
=======
}


    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
            <h1>Welcome to the Accessible Amusement Park</h1>
        </div>
        <nav>
    <!-- Navigation Menu -->
    <span class="menu-toggle" onclick="toggleMenu()">☰</span> <!-- Toggle button -->
    <ul>
        <li><a href="index.php">Home</a></li>
        
        <!-- Google Translate Widget after Home link -->
        <li>
            <div id="google_translate_element"></div>
        </li>
        
        <li><a href="directions.php">Park Direction</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
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
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
