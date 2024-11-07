<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessible Amusement Park</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        // JavaScript function to load content based on button clicked
        function loadContent(page) {
            const contentSection = document.getElementById('contentSection');
            const dashboard = document.querySelector('.dashboard');

            // Hide the dashboard on mobile view
            if (window.innerWidth <= 768) {
                dashboard.style.display = 'none';
            }

            // Smooth scroll to content section
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: 'smooth'
            });

            const xhr = new XMLHttpRequest();
            xhr.open('GET', page + '.php', true);
            xhr.onload = function() {
                if (this.status == 200) {
                    contentSection.innerHTML = `
                        <div class="dynamic-content">
                            ${this.responseText}
                        </div>
                    `;
                } else {
                    contentSection.innerHTML = '<p>Error loading content. Please try again.</p>';
                }
            };
            xhr.send();
        }

        // Google Translate Initialization
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                { pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE },
                'google_translate_element'
            );
        }

        // Function to toggle the visibility of the menu
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
             <li>
            <div id="google_translate_element"></div>
        </li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li class="profile-icon">
                    <a href="profile.php" style="display: flex; align-items: center;">
                        <img src="images/user.jpg" alt="User Profile" class="user-icon">
                        <span class="user-label">User</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Add margin to main content to avoid overlap with fixed header -->
    <div style="margin-top: 80px;"></div>

    <!-- Main Content Section -->
    <main>
        <div class="flex-container">
            <!-- Left Side: User's Dashboard -->
            <aside class="dashboard">
                <h2>User Dashboard</h2>
                <ul>
                    <li><button onclick="loadContent('parkInfo')">View Park Information</button></li>
                    <li><button onclick="loadContent('bookRides')">Book Rides and Services</button></li>
                    <li><button onclick="loadContent('manageBookings')">Manage Bookings</button></li>
                    <li><button onclick="loadContent('accessInfo')">Access Accessibility Information</button></li>
                    <li><button onclick="loadContent('submitFeedback')">Submit Feedback</button></li>
                    <li><button onclick="loadContent('realTimeNotifications')">Receive Real-Time Notifications</button></li>
                    <li><button onclick="loadContent('shareSocialMedia')">Share to Social Media</button></li>
                    <li><button onclick="loadContent('personalItinerary')">Plan Personalized Itinerary</button></li>
                    <li><button onclick="loadContent('virtualQueue')">Join Virtual Queue</button></li>
                    <li><button onclick="loadContent('map')">View Map</button></li>
                </ul>
            </aside>

            <!-- Right Side: Dynamic Content Area -->
            <section class="content" id="contentSection">
                <p>Welcome to the Accessible Amusement Park! Click on the options to learn more.</p>
            </section>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Accessible Amusement Park. All rights reserved.</p>
    </footer>

    <!-- Google Translate Script -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
</body>
</html>
<style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #google_translate_element {
    font-size: 8px;  /* Adjust the font size */
    padding: 5px;     /* Adjust the padding to reduce the space around the element */
    margin: 0;  
    font-size: 19px !important;      /* Remove any margin if present */
}

/* Mobile Toggle Menu */
        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
       
        header { 
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #2194f3;
    color: white;
    padding: 8px 15px;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    flex-wrap: wrap;
}



.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    max-height: 30px;
    margin-right: 10px;
}

h1 {
    font-size: 1.2em;
    margin: 0;
}

        .dashboard {
            width: 150px; /* Fixed width */
            position: fixed; /* Keeps it fixed on the screen */
            top: 160px; /* Ensure this is below the header, adjusted for header height */
            left: 0; /* Fix to the left side */
            bottom: 0; /* Keep it to the bottom */
            background-color: #f1f1f1; /* Optional: Add background color */
            z-index: 1000; /* Ensure it stays above other elements */
            overflow-y: auto; /* If the content is too large, make it scrollable */
            padding: 80px; /* Adjust padding */
        }

        main {
            margin-left: 180px; /* Leave space for the dashboard on larger screens */
            padding-top: 50px; /* Add padding to prevent content from going under the header */
        }

        .content {
            padding: 20px;
        }

        footer { 
            position: fixed;
            bottom: 0; /* Aligns it to the bottom of the viewport */
            left: 0; /* Aligns it to the left edge */
            width: 100%; /* Makes the footer take the full width */
            background-color: #e0e7ff; /* Set your background color */
            text-align: center; /* Centers the text */
            padding: 5px 0; /* Adds padding for spacing */
            z-index: 1000; /* Keeps it above other content */
        }

        /* Responsive styles for mobile view */
        @media (max-width: 768px) {
            footer {
                font-size: 0.9em; /* Slightly smaller text size for mobile */
                padding: 10px 0; /* Increase padding for better spacing */
            }
        }

        /* Remove bullets from the dashboard */
        .dashboard ul {
            list-style-type: none; /* Removes bullets */
            padding: 0; /* Removes default padding */
            margin: 0; /* Removes default margin */
        }

        .dashboard ul li {
            margin-bottom: 10px; /* Adds space between buttons */
        }

        .dashboard button {
            width: 100%; /* Make buttons full width for better accessibility */
            padding: 10px; /* Padding for buttons */
            font-size: 16px; /* Increase font size for readability */
            background-color: #007BFF; /* Button color */
            color: white; /* Button text color */
            border: none; /* Remove default button border */
            border-radius: 5px; /* Rounded corners for buttons */
            cursor: pointer; /* Pointer cursor on hover */
            margin-top: 10px; /* Add margin above each button */
        }
        .dashboard button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
        /* Responsive styles */
        @media (max-width: 768px) {
            header {
                flex-direction: column; /* Stack header items on small screens */
            }

            main {
                margin-left: 0; /* Remove left margin for smaller screens */
                padding-top: 60px; /* Adjust top padding */
            }

            .flex-container {
                flex-direction: column; /* Stack dashboard and content vertically */
                margin: 0; /* Remove default margin */
                padding: 0; /* Remove default padding */
            }

            .dashboard {
                position: relative; /* Change to relative so it flows with the content */
                width: 100%; /* Full width dashboard */
                margin-top: 10px; /* Increased space above dashboard */
                padding: 20px; /* Adjust padding */
                top: 0; /* Reset top position */
                left: 0; /* Align it to the left */
                display: block; /* Ensure dashboard is displayed on mobile */
            }

            .dashboard.hidden {
                display: none; /* Hide dashboard on mobile when the button is clicked */
            }

            .content {
                width: 100%; /* Make content take up full width */
                padding-top: 20px; /* Add space above content */
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 20px; /* Smaller header text */
            }

            .dashboard button {
                font-size: 14px; /* Smaller button text */
                margin-top: 15px; /* Increased space between buttons */
            }

            main {
                padding-top: 60px; /* Adjust padding for small screens */
            }
        }

                /* Header styling */
        /* Header styling */
header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

/* Logo and title styling */
.logo-container {
    display: flex;
    align-items: center;
    text-align: center;
}

.logo-container img {
    width: 50px;
    height: auto;
    margin-right: 10px;
}

.logo-container h1 {
    font-size: 20px;
    color: #FFFFFF;
    margin: 0;
}

/* Navigation bar styling */
nav {
    display: flex;
    justify-content: flex-end; /* Aligns items to the right */
/* Optional: Add a background color */
    padding: 10px 20px; /* Thinner padding for the header */
    box-sizing: border-box; /* Include padding in width */
}


/* Navigation list styling */
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center; /* Vertically center the items */
}

nav ul li {
    margin-left: 20px;
}

/* Link styling */
nav ul li a {
    text-decoration: none;
    color: #90EE90;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
    display: flex;
    align-items: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    nav {
        justify-content: center;
    }

    nav ul {
        flex-direction: row; /* Keep items in a row on smaller screens */
        justify-content: center;
        flex-wrap: nowrap;
    }

    nav ul li {
        margin-left: 10px;
        margin-bottom: 0;
    }

    nav ul li a {
        font-size: 14px;
        padding: 8px 12px;
    }
}

@media (max-width: 480px) {
    header {
        padding: 10px;
    }

    nav ul li {
        margin-left: 5px;
    }

    nav ul li a {
        font-size: 12px;
        padding: 6px 10px;
    }
}

        //* Profile icon alignment */
.profile-icon {
    margin-left: auto;
}

/* User icon styling */
.user-icon {
    width: 20px;
    height: 20px;
    margin-right: 5px;
    border-radius: 50%; /* Make the icon circular */
}

/* User label styling */
.user-label {
    font-size: 16px;
    color: #90EE90;
}

        /* Responsive styling for mobile screens */
@media (max-width: 768px) {
    /* Logo container adjustments */
    .logo-container {
        flex-direction: column;
        padding: 10px;
    }

    .logo-container img {
        width: 40px;
    }

    .logo-container h1 {
        font-size: 18px;
        margin-top: 5px;
    }

    /* Navigation adjustments */
    nav {
        display: flex;
        justify-content: flex-start;
        padding: 10px;
    }

    nav ul {
        display: flex;
        flex-direction: row;
        gap: 10px; /* Space between nav items */
        padding: 0;
        margin: 0;
        list-style: none;
    }

    nav ul li {
        margin-left: 0;
    }

    nav ul li a {
        padding: 8px 10px;
        font-size: 14px;
        text-decoration: none;
    }

    /* Profile icon adjustments */
    .profile-icon {
        margin-left: 0;
    }

    .user-icon {
        width: 18px;
        height: 18px;
    }

    .user-label {
        font-size: 14px;
    }
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
        logo-container {
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

.get-started-btn {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.2em;
}

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

    </style>
