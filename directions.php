<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessible Amusement Park</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Logo and Header Styling */
        .logo-container {
            display: flex;
            align-items: center;
            padding: 10px 15px;
        }
        .logo {
            width: 50px;
            height: auto;
            margin-right: 8px;
        }
        h1 {
            font-size: 1.4rem;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        /* Navigation Styling */
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            margin: 0;
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            text-decoration: none;
            font-weight: bold;
        }
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

       /* Main Content Styling */
main {
    padding: 120px;
    margin-top: 90px;
    background-color:  #f4f4f9;
    line-height: 1.6;
}

h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
}

p {
    margin-bottom: 15px;
}

/* Map Section Styling */
#map-section {
    padding: 20px;
    background-color: #f3f3f3;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%; /* Ensure full width */
    box-sizing: border-box; /* To include padding within width */
}

.map-text h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.map-text p {
    font-size: 16px;
    max-width: 800px;
    margin-bottom: 20px;
    line-height: 1.6;
    padding: 0 15px; /* Ensure text doesn't touch edges */
}

.map-container {
    width: 100%;
    max-width: 1200px;
    height: 60vh;
    margin-top: 20px;
    border: 2px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border: none;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    main {
        padding: 80px 15px; /* Adjust padding for mobile */
        margin-top: 50px;
    }

    .map-text h2 {
        font-size: 20px;
    }

    .map-text p {
        font-size: 14px;
        padding: 0 15px;
    }

    .map-container {
        width: 100%;
        height: 50vh;
        margin-top: 10px; /* Reduce margin for better spacing */
    }

    /* Full height for map and text on smaller screens */
    #map-section {
        height: 100vh;
        padding: 10px;
    }
}


        /* Footer Styling */
        footer {
            text-align: center;
            padding: 15px 0;
            background-color:#E1E5F6;
           color: #333333;;
            font-size: 0.9rem;
            position: relative;
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
    </style>
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector("nav ul");
            navLinks.classList.toggle("show");
        }
    </script>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo-container">
            <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
            <h1>Welcome to the Accessible Amusement Park</h1>
        </div>
        <nav>
            <span class="menu-toggle" onclick="toggleMenu()">☰</span>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="directions.php">Park Directions</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <!-- Direction Header -->
        <h2>Directions to the Park</h2>
        <p>Your day of adventure is closer than you think. Six Flags Over Texas is located in Arlington, midway between Dallas and Fort Worth at the intersection of Interstate 30 and Highway 360 (Angus Wynne Jr. Freeway). We are approximately 20 minutes from downtown Dallas and downtown Fort Worth.</p>
        
        <!-- Location Header -->
        <h2>Our Physical Location</h2>
        <p>2201 Road to Six Flags, Arlington, TX 76011.</p>
        
        <!-- Map Section -->
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.3784504378336!2d-97.07471216659162!3d32.75569124797959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e8772665d40ab%3A0x84cc7dbadd58699f!2sSix%20Flags%20Over%20Texas!5e0!3m2!1sen!2ske!4v1730836915236!5m2!1sen!2ske" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Accessible Amusement Park. All rights reserved.</p>
    </footer>
</body>
</html>
