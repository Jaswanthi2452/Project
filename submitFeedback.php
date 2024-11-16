<?php 
// Start session
session_start();

// Check if session is set to display feedback
if (isset($_SESSION['feedback'])) {
    echo "<div class='session-message'>".$_SESSION['feedback']."</div>";
    // Unset session feedback to avoid repeated alerts
    unset($_SESSION['feedback']);
}

// Check if there is an error message and display it
if (isset($_SESSION['error'])) {
    echo "<div class='error-message'>".$_SESSION['error']."</div>";
    // Unset error message
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amusement Park Feedback Form</title>
    <style type="styles.css"></style>
 <style>
      body { 
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center; /* Center the header */
    align-items: center;
    height: 100vh;
    flex-direction: column; /* Stack header and container vertically */
}

.container {
    background-color: #8CB3FC;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 90%; /* Responsive max width */
    width: 350px; /* Fixed width for larger screens */
    margin: 10px; /* Margin for smaller screens */
}

h2 {
    text-align: center; /* Ensure the header text is centered */
    margin-bottom: 20px; /* Reduced margin for smaller screens */
}

.success-message,
.error-message {
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px; /* Reduced margin for smaller screens */
    text-align: center;
    font-weight: bold;
}

.success-message {
    background-color: #e0ffd4;
    color: #2e7d32;
    border: 1px solid #66bb6a;
}

.error-message {
    background-color: #ffd4d4;
    color: #c62828;
    border: 1px solid #e57373;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #fff;
}

input[type="text"],
input[type="email"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px; /* Reduced margin for smaller screens */
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select {
            background-color: #ffffff;
            color: #000000; /* Ensure text inside inputs has high contrast */
            border: 1px solid #333;
            padding: 8px;
            margin-bottom: 10px;
            width: 100%;
            font-size: 16px;
        }

/* Basic styling for form container */
.form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
}

/* Input and textarea styling */
input[type="date"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
    resize: vertical; /* Allows resizing of the textarea vertically */
}

/* Responsive adjustments for smaller screens */
@media (max-width: 600px) {
    .form-container {
        padding: 15px;
    }
    label {
        font-size: 14px;
    }
    input[type="date"],
    textarea {
        font-size: 14px;
    }
}

.login-btn { 
    padding: 10px;
    font-size: 16px; /* Increased font size for better readability */
   background-color: #0066cc; /* Use a color with high contrast */
    color: #ffffff; /* White text for high contrast */
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    outline: none;
    font-weight: bold;
    width: 200px; /* Set a specific width for centering */
    margin: 0 auto; /* Center button */
}

.login-btn:hover {
    background: linear-gradient(135deg, #2575fc, #6a11cb);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    transform: translateY(-2px);
}

.login-btn:active {
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    transform: translateY(0);
}

/* Media Queries for Responsiveness */
@media (max-width: 480px) {
    .container {
        padding: 15px; /* Adjust padding for smaller screens */
        max-width: 100%; /* Ensure full width on small screens */
        margin: 10px auto; /* Center container with auto margin */
    }

    h2 {
        margin-bottom: 15px; /* Adjust heading margin for small screens */
    }

    .login-btn {
        font-size: 14px; /* Adjust button font size for small screens */
    }

    /* Ensure the text and icon in the profile section do not overflow */
    .profile-icon {
        width: auto; /* Allow flexibility */
        height: auto; /* Allow flexibility */
        display: flex; /* Flexbox for alignment */
        justify-content: center; /* Center the content */
        align-items: center; /* Align items vertically */
    }

    .user-icon {
        width: 25px; /* Adjust the icon size for mobile */
        height: 25px; /* Adjust the icon size for mobile */
    }

    .user-label {
        font-size: 12px; /* Smaller font size for the label */
        margin-left: 5px; /* Space between icon and label */
    }
}

    </style>

</head>
<body>

    <div class="container">
        <h2>Share Your Feedback</h2>
        <form action="process_feedback.php" method="POST">
    <!-- Name -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required placeholder="Enter your name">

    <!-- Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required placeholder="Enter your email">

    <!-- Date of Visit -->
    <label for="date">Date of Visit:</label>
    <input type="date" id="date" name="date" required>

    <!-- Feedback Comments -->
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments" required placeholder="Share your thoughts..."></textarea>

    <!-- Rating -->
    <label for="rating">Rating:</label>
    <select id="rating" name="rating" required>
        <option value="">-- Select Rating --</option>
        <option value="5">5 - Excellent</option>
        <option value="4">4 - Good</option>
        <option value="3">3 - Average</option>
        <option value="2">2 - Poor</option>
        <option value="1">1 - Terrible</option>
    </select>

    <!-- Submit Button -->
    <button type="submit" class="submit-btn">Submit</button>
</form>









        
    </div>

</body>
</html>
