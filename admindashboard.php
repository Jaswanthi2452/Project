<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Management Dashboard</title>
    <link rel="stylesheet" href="styles.css">
<<<<<<< HEAD
      <script>
=======
    <script>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
        // JavaScript function to load content based on button clicked
        function loadContent(page) {
            const contentSection = document.getElementById('contentSection');
            const dashboard = document.querySelector('.dashboard');

            // Hide the dashboard when a button is clicked on mobile view
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
                    // Wrap the content with header and footer
                    contentSection.innerHTML = `
                        <?php include 'adminheader.php'; ?>
                        <div class="dynamic-content">
                            ${this.responseText}
                        </div>
                        <?php include 'footer.php'; ?>
                    `;
                } else {
                    contentSection.innerHTML = '<p>Error loading content. Please try again.</p>';
                }
            };
            xhr.send();
        }
    </script>
<<<<<<< HEAD
</script>
   <style>
=======
    <style>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
<<<<<<< HEAD
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
    width: 100%;
    z-index: 1000;
    background-color: #fff;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    padding: 8px 15px; /* Reduced padding */
}


/* Ensure the main content starts after the fixed header */
body {
    padding-top: 80px; /* Adjust this value based on your header height */
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
=======
        nav {
    /* Ensure the navigation takes up full width */
    display: flex;
    justify-content: flex-end; /* Align items to the right */
     /* Optional: Add a background color */
    padding: 5px; /* Add padding for spacing */
}

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #0163F6;
            color: white;
            padding: 10px 20px;
            z-index: 1000; /* Ensure the header is above other content */
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
    padding: 1px 0;
    color: white;
    text-align: center;
    color: white;
    text-align: center;
    position: fixed; /* Fixes the header at the top */
    top: 10; /* Positions it at the top of the page */
    width: 100%; /* Ensures the header spans the full width */
    z-index: 1000; /* Ensures it stays above other content */

        }

        /* Add responsiveness */
        @media (max-width: 600px) {
            header {
                padding: 10px; /* Reduce padding for smaller screens */
                flex-direction: column; /* Stack items vertically */
                align-items: flex-start; /* Align items to the start */
            }

            .logo {
                margin-bottom: 10px; /* Space below the logo */
            }

            .nav-links {
                width: 100%; /* Make navigation links full-width */
                display: flex; /* Use flex for horizontal alignment */
                justify-content: space-between; /* Space links evenly */
                flex-wrap: wrap; /* Wrap links if needed */
            }

            .nav-link {
                flex: 1 1 auto; /* Allow links to grow/shrink */
                text-align: center; /* Center links */
                padding: 5px 0; /* Add vertical padding to links */
            }
        }
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f

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
<<<<<<< HEAD
       
            color: #000000;  /* Button text color */
=======
            color: white; /* Button text color */
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
            border: none; /* Remove default button border */
            border-radius: 5px; /* Rounded corners for buttons */
            cursor: pointer; /* Pointer cursor on hover */
            margin-top: 10px; /* Add margin above each button */
        }
<<<<<<< HEAD
        .dashboard button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
=======

        .dashboard button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
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
<<<<<<< HEAD

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
   color: #000000; 
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
     color: #000000; 
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
    </style>

=======
    </style>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
</head>
<body>
    <?php include 'adminheader.php'; ?> <!-- Include the header -->

    <main>
        <div class="flex-container">
            <!-- Left side: Admin dashboard -->
            <aside class="dashboard">
                <h2>Admin Dashboard</h2>
                <ul>
                    <li><button onclick="loadContent('viewUsers')">View Registered Users</button></li>
                    <li><button onclick="loadContent('manageBookingInformation')">Manage User Bookings</button></li>
                    <li><button onclick="loadContent('viewFeedback')">View User Feedback</button></li>
                    <li><button onclick="loadContent('manageque')">Manage Virtual Queue </button></li>
                    <li><button onclick="loadContent('notifications')">Send Notifications</button></li>
                    <li><button onclick="loadContent('reporting')">Generate Feedback Reports</button></li>
                    <li><button onclick="loadContent('userreporting')">Generate user and manage booking Reports</button></li>
                </ul>
            </aside>

            <!-- Right side: Dynamic content area -->
            <section class="content" id="contentSection">
                <p>Welcome to the Admin Management System! Click on the options to manage users, bookings, and more.</p>
            </section>
        </div>
    </main>

    <?php include 'footer.php'; ?> <!-- Include the footer -->
</body>
</html>
