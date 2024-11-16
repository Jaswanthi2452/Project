<!-- header.php -->
<header>
    <div class="logo-container">
        <img src="images/logo.png" alt="Accessible Amusement Park Logo" class="logo">
        <h1>Welcome to the Accessible Amusement Park</h1>
        <style>
  /* Ensure the nav and its elements are aligned */
nav {
    display: flex;
    justify-content: flex-end; /* Aligns items to the right */
/* Optional: Add a background color */
    padding: 10px 20px; /* Thinner padding for the header */
    box-sizing: border-box; /* Include padding in width */
}

/* Style the list to align horizontally */
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center; /* Vertically center the items */
}

/* List items spacing */
nav ul li {
    margin-left: 20px;
}

/* Links styling */
nav ul li a {
    text-decoration: none;
    padding: 8px 12px;
    font-size: 16px;
    color: #000000; 
    font-weight: bold;
    transition: background-color 0.3s ease;
}

h1 {
    color: #e6e6e6; /* Lighter gray text */
    background-color: #1a74d9; /* Darker blue background */
    font-size: 18px;
    font-weight: bold;
}

/* Responsive adjustments */
nav ul {
    list-style: none;
    padding: 0;
    display: flex; /* Use flexbox to align items */
    flex-direction: row; /* Keep items in a single row */
    gap: 20px; /* Space between items */
    justify-content: center; /* Center items horizontally */
}

nav ul li {
    display: inline; /* Ensure list items are inline */
}

nav ul li a {
    text-decoration: none;
    padding: 8px 12px;
    font-size: 16px; /* Font size can be adjusted for mobile if necessary */
    font-weight: bold;
    transition: background-color 0.3s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    nav ul li a {
        font-size: 14px; /* Optionally reduce font size on mobile */
    }
}

        </style>


    </div>
    <nav>
        <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Log Out</a></li> <!-- Log Out link -->
        </ul>
    </nav>
</header>
