<?php 
// Set session timeout duration (in seconds)
$timeout_duration = 600; // 10 minutes

// Start session
session_start();

// Check if "last activity" is set
if (isset($_SESSION['LAST_ACTIVITY'])) {
    // Calculate the session lifetime
    if (time() - $_SESSION['LAST_ACTIVITY'] > $timeout_duration) {
        // Last activity is longer than timeout_duration, so log out the user
        session_unset();     // Unset session variables
        session_destroy();   // Destroy the session
        header("Location: index.php?logged_out=true"); // Redirect to index.php after logging out
        exit();
    }
}

// Update last activity timestamp
$_SESSION['LAST_ACTIVITY'] = time();
?>

<<<<<<< HEAD
<!DOCTYPE html> 
=======
<!DOCTYPE html>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Accessible Amusement Park</title>
    <link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
<<<<<<< HEAD

    <!-- Google Translate Script -->
=======
        <!-- Google Translate Script -->
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
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
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
            <h1>Welcome to the Accessible Amusement Park</h1>
        </div>
        <nav>
            <!-- Navigation Menu -->
            <span class="menu-toggle" id="menuToggle">☰</span> <!-- Toggle button -->
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
    <section>
        <h2>Login to Admin Account</h2>

        <!-- Display session message if available -->
        <?php if (isset($_SESSION['login_message'])): ?>
            <div class="message <?php echo htmlspecialchars($_SESSION['message_type']); ?>">
                <?php
                echo htmlspecialchars($_SESSION['login_message']);
                unset($_SESSION['login_message']); // Clear message after displaying
                unset($_SESSION['message_type']);
                ?>
            </div>
        <?php endif; ?>

        <!-- Accessible Login Form -->
        <form action="process_admin.php" method="POST">
            <!-- Email Field with Accessible Label -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" aria-required="true" required>

            <!-- Password Field with Accessible Label -->
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" aria-required="true" required>

            <!-- Submit Button -->
            <button type="submit" aria-label="Login Button">Login</button>
        </form>
    </section>
</main>


    <footer>
        <p>&copy; 2024 Accessible Amusement Park. All rights reserved.</p>
    </footer>

    <!-- JavaScript moved to the end for better performance -->
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector("nav ul");
            navLinks.classList.toggle("show");
        }

        // Add event listener for menu toggle
        document.getElementById('menuToggle').addEventListener('click', toggleMenu);
    </script>
</body>
</html>











=======
       
</head>

>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
<style>
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
form {
    width: 80%;
    max-width: 400px; /* Max width for form */
    margin: 0 auto; /* Center the form */
    padding: 20px;
    background-color: skyblue;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    font-size: 16px;
    color: #333;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    background-color: #f9f9f9;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
}

button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}
<<<<<<< HEAD
</style>
=======
</style>

<script>
        function toggleMenu() {
            const navLinks = document.querySelector("nav ul");
            navLinks.classList.toggle("show");
        }
    </script>
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
        <section>
            <h2>Login to Admin Account</h2>

            <!-- Display session message if available -->
            <?php if (isset($_SESSION['login_message'])): ?>
                <div class="message <?php echo $_SESSION['message_type']; ?>">
                    <?php
                    echo $_SESSION['login_message'];
                    unset($_SESSION['login_message']); // Clear message after displaying
                    unset($_SESSION['message_type']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="process_admin.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>

            <!-- Forgot Password link -->
           
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Accessible Amusement Park. All rights reserved.</p>
    </footer>
</body>
</html>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
