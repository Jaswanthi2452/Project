<?php
// Include admin header and database connection
include 'adminheader.php';
include 'db_connect.php';
session_start(); // Start the session

// Fetch all users from the database
$users_sql = "SELECT * FROM users";
$users_result = $conn->query($users_sql);
?>
<!DOCTYPE html>
<html lang="en"> <!-- Set the language attribute -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Users</title> <!-- Added a descriptive page title -->
    <!-- Include any required CSS files or links here -->
</head>
<body>
    <div class="container">
        <h2>View Users</h2>
        <button onclick="window.print()" class="btn btn-primary print-btn">Print Report</button> <!-- Print button -->

        <div class="table-responsive">
            <table class="table table-bordered custom-table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Accessibility Preferences</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($users_result->num_rows > 0) {
                        while ($user = $users_result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td data-label='ID'>" . htmlspecialchars($user['id']) . "</td>";
                            echo "<td data-label='Name'>" . htmlspecialchars($user['name']) . "</td>";
                            echo "<td data-label='Email'>" . htmlspecialchars($user['email']) . "</td>";
                            echo "<td data-label='Accessibility Preferences'>" . htmlspecialchars($user['accessibility_preferences']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No users found.</td></tr>";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; $conn->close(); ?>
</body>
</html>









<style>
/* Container and typography */
.container {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

h2 {
    text-align: center;
}

/* Print button styles */
.print-btn {
    display: inline-block;
    margin-bottom: 15px;
    color: white;
    background-color: #007bff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.print-btn:hover {
    background-color: #0056b3;
}

/* Table styles */
.table-responsive {
    margin-top: 15px;
    overflow-x: auto; /* Enables horizontal scrolling on mobile */
}

.custom-table {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto; /* Allows flexible resizing */
}

.custom-table th, .custom-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
    white-space: nowrap; /* Prevents cell text wrapping */
}

.custom-table th {
    background-color: #343a40;
    color: white;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .table-responsive {
        overflow-x: scroll; /* Enables horizontal scrolling on mobile */
    }

    .custom-table th, .custom-table td {
        display: table-cell; /* Maintains table cell structure */
        white-space: nowrap; /* Keeps columns intact without stacking */
    }

    .print-btn {
        width: 100%;
        padding: 12px 0;
        font-size: 16px;
    }
}

/* Print media styles */
@media print {
    .print-btn {
        display: none;
    }
}

/* Logo container styles */
.logo-container {
    display: flex;
    align-items: center;
    overflow: hidden;
}

.logo {
    width: 80px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 15px;
}

/* Footer styles */
footer {
    text-align: center;
    padding: 10px 0;
    font-size: 14px;
    background-color: #f8f9fa;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
    z-index: 10;
}

/* Header styles */
header {
    background: #2194f3;
    padding: 0px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}

/* Adjust container padding to avoid content being hidden behind the fixed header */
.container {
    padding-top: 150px;
}

/* Header logo container */
.logo-container {
    display: flex;
    align-items: center;
}

.logo {
    max-width: 100px;
    margin-right: 20px;
}

/* Navbar styles */
nav {
    display: flex;
    justify-content: flex-end;
    padding: 10px 15px;
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
      color: #000000; /* Darker green for improved readability */
        padding: 10px 15px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

nav ul li a:hover {
    background-color: rgba(0, 123, 255, 0.1);
}

/* Adjustments for smaller screens */
@media (max-width: 576px) {
    .logo {
        width: 60px;
        height: 50px;
    }

    nav ul {
        flex-direction: column;
        align-items: flex-start;
    }

    nav ul li {
        margin: 10px 0;
    }

    nav ul li a {
        padding: 8px 12px;
        font-size: 14px;

    }
}
/* Button Styling for Accessibility */
.btn {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    border: none;
    border-radius: 4px;
    background-color: #005f73; /* Wave-compliant blue for high contrast */
    color: #FFFFFF; /* White text for high contrast */
    transition: background-color 0.3s ease;
}

/* Hover and Focus States for Better Accessibility */
.btn:hover,
.btn:focus {
    background-color: #0a9396; /* Teal shade for hover effect */
    outline: 3px solid #94d2bd; /* Outline for keyboard navigation focus */
}

/* Accessible Print Button Class */
.print-btn {
    display: inline-block;
    text-align: center;
}


</style>
  

  