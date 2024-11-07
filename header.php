<!-- header.php -->
<header>
    <div class="logo-container">
        <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
        <h1>Welcome to the Accessible Amusement Park</h1>
    </div>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <!-- Profile Icon Link with User Label -->
            <li class="profile-icon">
                <a href="profile.php" style="display: flex; align-items: center;">
                    <img src="images/user.jpg" alt="User Profile" class="user-icon">
                    <span class="user-label">User</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Styling -->
    <style>
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

    </style>
</header>

<!-- Add margin to the top of the main content so it isn't hidden behind the fixed header -->
<div style="margin-top: 80px;"></div>
