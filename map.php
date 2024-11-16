<?php  
// parkMap.php

// Styling each section with a more readable, appealing format
echo '<style>
    .map-section {
        background-color: #f9f9f9; /* Light background for contrast */
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .map-section h2 {
        color: #0056b3; /* Darker blue for main headings */
        margin-bottom: 10px;
        font-size: 1.8em; /* Increased font size for headings */
    }
    
    .map-section p {
        color: #333; /* Darker text color for readability */
        font-size: 1.2em; /* Slightly larger font size for paragraphs */
        line-height: 1.6; /* Improved line height for readability */
        margin-bottom: 15px;
    }

    .map-container {
        width: 100%;
        height: 60vh; /* Adjust the map container height */
        margin-top: 20px;
        border: 2px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .map-section a {
        color: #007BFF; /* Link color */
        text-decoration: none; /* No underline for links */
        font-weight: bold; /* Bold links */
    }

    .map-section a:hover {
        text-decoration: underline; /* Underline on hover for links */
    }
</style>';

echo '<div class="map-section">';

    // Header Section
    echo '<h2>Park Map</h2>';
    echo '<p>Explore the park layout below! You can also download the full map if needed.</p>';

    // Embed the map PDF using an iframe
    echo '<div class="map-container">
            <iframe src="https://static.sixflags.com/website/files/sfot_park-map.pdf" 
                    width="100%" 
                    height="100%" 
                    style="border: none;">
            </iframe>
          </div>';

    // Additional Resources Section (optional: for a download link

echo '</div>';
?>
