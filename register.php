<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Accessible Amusement Park</title>
    <link rel="stylesheet" href="styles.css">
        
        <!-- Google Translate Script -->
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

</head>
<style>
    


form {
    width: 80%;
    max-width: 400px; /* Max width for form */
    margin: 0 auto; /* Center the form */
    padding: 20px;
    background-color:skyblue;
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
    width: 90%;
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

    </style>

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
            <h2>Create Your Account</h2>

            <!-- Display success message if session contains one -->
            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="success-message">
                    <?php
                    echo $_SESSION['success_message'];
                    unset($_SESSION['success_message']); // Remove message after displaying
                    ?>
                </div>
            <?php endif; ?>

            <form action="process_register.php" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="accessibility">Accessibility Preferences:</label>
                <input type="text" id="accessibility" name="accessibility">

                <button type="submit">Register</button>
                 <p class="login-li">Already have an account? <a href="login.php">Login here</a></p>
            
            </form>
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
