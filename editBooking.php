<?php 
session_start();
ob_start();
include 'db_connect.php';
include 'header2.php';

if (isset($_GET['id'])) {
    $booking_id = intval($_GET['id']);

    $sql = "SELECT * FROM bookings WHERE id = $booking_id";
    $result = mysqli_query($conn, $sql);
    $booking = mysqli_fetch_assoc($result);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_booking'])) {
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $ride_service = mysqli_real_escape_string($conn, $_POST['ride_service']);

        // Define allowed ride services
        $allowed_ride_services = ["Rollercoaster", "Water Park", "Ferris Wheel", "Bumper Cars"];

        // Validate ride service input
        if (!in_array($ride_service, $allowed_ride_services)) {
            $_SESSION['error'] = "Invalid ride service selected.";
        } else {
            $update_sql = "UPDATE bookings SET first_name='$first_name', email='$email', ride_service='$ride_service' WHERE id=$booking_id";

            if (mysqli_query($conn, $update_sql)) {
                $_SESSION['success'] = "Booking updated successfully!";
                header("Location: dashboard.php");
                exit();
            } else {
                $_SESSION['error'] = "Error updating booking.";
            }
        }
    }
} else {
    $_SESSION['error'] = "No booking ID provided.";
    header("Location: manageBookings.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h2 style="text-align: center; margin-top:90px;">Edit Booking</h2>

<?php if (isset($_SESSION['success'])): ?>
    <div class="success-message"><?= htmlspecialchars($_SESSION['success']) ?></div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="error-message"><?= htmlspecialchars($_SESSION['error']) ?></div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<form method="POST">
    <input type="text" name="first_name" value="<?= htmlspecialchars($booking['first_name']) ?>" required placeholder="First Name">
    <input type="email" name="email" value="<?= htmlspecialchars($booking['email']) ?>" required placeholder="Email">
    
    <select id="ride_service" name="ride_service" required>
        <option value="">-- Select an Option --</option>
        <option value="Rollercoaster" <?= $booking['ride_service'] == "Rollercoaster" ? 'selected' : '' ?>>Rollercoaster</option>
        <option value="Water Park" <?= $booking['ride_service'] == "Water Park" ? 'selected' : '' ?>>Water Park</option>
        <option value="Ferris Wheel" <?= $booking['ride_service'] == "Ferris Wheel" ? 'selected' : '' ?>>Ferris Wheel</option>
        <option value="Bumper Cars" <?= $booking['ride_service'] == "Bumper Cars" ? 'selected' : '' ?>>Bumper Cars</option>
    </select>

    <button type="submit" name="save_booking">Save Booking</button>
</form>

<?php include 'footer.php'; ?>
</body>
</html>

<?php
ob_end_flush();
?>
