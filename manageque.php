<<<<<<< HEAD
<?php  
=======
<?php 
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
// Start the session
session_start();

// Include the database connection
include 'db_connect.php';

// Fetch queue data directly
$sql = "SELECT v.id AS queue_id, v.queue_position, v.status, r.name AS ride_name, u.name AS user_name
        FROM virtual_queue v
        JOIN rides_services r ON v.ride_id = r.id
        JOIN users u ON v.user_id = u.id
        ORDER BY r.id, v.queue_position ASC";
$queue = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Virtual Queue Management</title>
    <style>
<<<<<<< HEAD
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: ;
        }
=======
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        th { background-color: #0B244D; color: white; }
        .btn { padding: 5px 10px; cursor: pointer; border: none; }
        .btn-update { background-color: #28a745; color: white; }
        .btn-delete { background-color: #dc3545; color: white; }
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
    </style>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this item?");
        }
    </script>
</head>
<body>
    <h1>Admin - Virtual Queue Management</h1>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']); // Clear the message
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Queue ID</th>
                <th>Ride Name</th>
                <th>User Name</th>
                <th>Position</th>
                <th>Status</th>
                <th>Update Status</th>
<<<<<<< HEAD
=======
                <th>Update</th>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
        <?php while ($row = $queue->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['queue_id']; ?></td>
            <td><?php echo htmlspecialchars($row['ride_name']); ?></td>
            <td><?php echo htmlspecialchars($row['user_name']); ?></td>
            <td><?php echo $row['queue_position']; ?></td>
            <td><?php echo htmlspecialchars($row['status']); ?></td>
            <td>
                <form action="adminQueueActions.php" method="get">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="queue_id" value="<?php echo $row['queue_id']; ?>">
                    <label for="status-select-<?php echo $row['queue_id']; ?>">Change Status:</label>
                    <select name="new_status" id="status-select-<?php echo $row['queue_id']; ?>">
                        <option value="waiting" <?php if ($row['status'] === 'waiting') echo 'selected'; ?>>Waiting</option>
                        <option value="near" <?php if ($row['status'] === 'near') echo 'selected'; ?>>Near</option>
                        <option value="active" <?php if ($row['status'] === 'active') echo 'selected'; ?>>Active</option>
                    </select>
                    <button type="submit" class="btn btn-update">Update</button>
                </form>
            </td>
            <td>
                <a href="adminQueueActions.php?action=delete&queue_id=<?php echo $row['queue_id']; ?>" 
                   class="btn btn-delete" 
                   onclick="return confirmDelete();">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
=======
            <?php while ($row = $queue->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['queue_id']; ?></td>
                    <td><?php echo htmlspecialchars($row['ride_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                    <td><?php echo $row['queue_position']; ?></td>
                    <td><?php echo htmlspecialchars($row['status']); ?></td>
                    <td>
                        <select onchange="window.location.href='adminQueueActions.php?action=update&queue_id=<?php echo $row['queue_id']; ?>&new_status=' + this.value;">
                            <option value="waiting" <?php if ($row['status'] === 'waiting') echo 'selected'; ?>>Waiting</option>
                            <option value="near" <?php if ($row['status'] === 'near') echo 'selected'; ?>>Near</option>
                            <option value="active" <?php if ($row['status'] === 'active') echo 'selected'; ?>>Active</option>
                        </select>
                    </td>
                    <td>
                        <a href="adminQueueActions.php?action=update&queue_id=<?php echo $row['queue_id']; ?>&new_status=active" class="btn btn-update">Update</a>
                    </td>
                    <td>
                        <a href="adminQueueActions.php?action=delete&queue_id=<?php echo $row['queue_id']; ?>" class="btn btn-delete" onclick="return confirmDelete();">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
        </tbody>
    </table>
</body>
</html>
<?php $conn->close(); ?>

<<<<<<< HEAD
<style>
     body {
    font-family: Arial, sans-serif;
    padding: 20px;
    margin: 0;
}

h1 {
    text-align: center;
    font-size: 1.8em;
    color: #333333; /* Dark color for better contrast */
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

thead {
    background-color: #222222; /* Darker for higher contrast */
    color: #ffffff; /* White text for contrast */
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #cccccc;
}

td {
    text-align: center;
    vertical-align: middle;
}

.table-container {
    width: 100%;
    overflow-x: auto; /* Enables horizontal scrolling for smaller screens */
}

/* Button styling */
.btn {
    padding: 8px 12px;
    text-decoration: none;
    color: #ffffff; /* White text for higher contrast */
    border-radius: 5px;
    text-align: center;
    display: inline-block;
}

.btn-update {
    background-color: #218838; /* Darker green for higher contrast */
}

.btn-delete {
    background-color: #c82333; /* Darker red for higher contrast */
}

select {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

/* Mobile-friendly styling for select dropdown */
select {
    padding: 5px;
}

/* Inline form styling */
form {
    display: inline;
}

/* Specific button and table cell adjustments for accessibility */
.btn-update {
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.btn-delete {
    padding: 5px 10px;
    text-decoration: none;
    border: none;
}

            
    </style>



=======
>>>>>>> e973fa6f87a6e009d59fe5fa0e84a7d79811430f
