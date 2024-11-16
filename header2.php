<!-- header.php -->
<header>
    <div class="logo-container">
        <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
        <h1>Welcome to the Accessible Amusement Park</h1>
    </div>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Log Out</a></li> <!-- Log Out link -->
        </ul>
    </nav>
    <style>
        /* Thin header adjustments */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 5px; /* Reduced padding */
            background-color: #2194f3; /* Optional background color */
        }
        /* styles.css */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

<<<<<<< HEAD
/* Ensure high contrast for links */
a[href$="dashboard.php"] {
    color: #003366; /* Dark blue text color */
    background-color: #f9f9f9; /* Light background color */
    text-decoration: none; /* Optional: Remove underline */
}

/* Hover state */
a[href$="dashboard.php"]:hover {
    color: #ffffff; /* White text on hover */
    background-color: #0056b3; /* Darker blue background on hover */
}
=======
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f

        /* Logo container styling */
        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            max-height: 80px; /* Smaller logo */
            margin-right: 10px;
        }

        h1 {
            font-size: 18px; /* Smaller font size */
            margin: 0;
            color: #333333;
        }

        /* Navigation adjustments */
        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        nav ul li {
            margin-left: 15px;
        }

        nav ul li a {
            text-decoration: none;
<<<<<<< HEAD
            color: #ffffff;
=======
            color: #90EE90;
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
            padding: 5px 10px; /* Reduced padding */
            font-size: 14px; /* Smaller font size */
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #e0f7e0; /* Optional hover effect */
            border-radius: 5px;
        }
    </style>
</header>
