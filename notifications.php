<?php 
// Include admin header and database connection
include 'adminheader.php';
include 'db_connect.php';
session_start(); // Start the session

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_sql = "DELETE FROM notifications WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Notification deleted successfully."; // Set success message
        $stmt->close();
        header("Location: admindashboard.php"); // Redirect to notifications page after deleting
        exit(); // Ensure no further code is executed
    } else {
        $_SESSION['error_message'] = "Error deleting notification."; // Set error message
    }
    $stmt->close();
}

// Fetch all notifications from the database
$sql = "SELECT * FROM notifications ORDER BY created_at DESC"; // Adjust query if needed
$result = $conn->query($sql);
?>

<div class="container">
    <h2>View User Notifications</h2>

    <!-- Display success or error messages at the top -->
    <?php
    if (isset($_SESSION['success_message'])) {
        echo "<div class='alert custom-alert'>" . $_SESSION['success_message'] . "</div>";
        unset($_SESSION['success_message']); // Clear the message after displaying
    }
    if (isset($_SESSION['error_message'])) {
        echo "<div class='alert custom-alert'>" . $_SESSION['error_message'] . "</div>";
        unset($_SESSION['error_message']); // Clear the message after displaying
    }
    ?>

    <!-- Display the table of notifications -->
    <div class="table-responsive"> <!-- Ensure the table is responsive -->
        <table class="table table-bordered custom-table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if notifications exist in the database
                if ($result->num_rows > 0) {
                    // Loop through each notification and display it in the table
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td>
                                <a href='notifications.php?delete_id=" . $row['id'] . "' class='btn btn-sm' onclick=\"return confirm('Are you sure you want to delete this notification?');\">Delete</a> <!-- Delete Button -->
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No notifications found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
// Include admin footer
include 'footer.php';
$conn->close();
?>

<!-- Additional CSS for styling and responsiveness -->
<style>
    .container {
        margin-top: 20px;
    }
    
    .custom-table {
        border: 2px solid #333;
        border-radius: 8px;
        margin-top: 20px;
        background-color: #F5F7FA;
    }

    .custom-table th, .custom-table td {
        border: 1px solid #333; /* Ensure cells have borders */
        padding: 8px; /* Padding for better spacing */
        text-align: left; /* Left-align text */
    }

    .custom-table th {
        background-color: #0B244D; /* Dark background for headers */
        color: white; /* White text for headers */
    }

    /* Style for the session message alerts */
    .custom-alert {
        background-color: #E53835; /* Custom color for alerts */
        color: white; /* White text for visibility */
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
        text-align: center; /* Center the message text */
        font-weight: bold; /* Bold text for emphasis */
    }

    /* Mobile-friendly adjustments */
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }

        h2 {
            font-size: 1.5rem;
        }

        .custom-table {
            font-size: 0.9rem;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.8rem;
        }
    }
</style>



