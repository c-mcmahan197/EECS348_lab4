<?php
// Check if the form is submitted and the size is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["size"]) && is_numeric($_POST["size"])) {
    // Get the input value
    $size = (int) $_POST["size"];
    
    // Check if the size is a valid positive number
    if ($size > 0) {
        // Start the table
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        
        // Print the header row (column indexes)
        echo "<tr><th>*</th>"; // Top-left corner
        for ($col = 1; $col <= $size; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        // Print the multiplication table rows
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr>";
            // Print row index in the first column
            echo "<th>$row</th>";
            // Print the multiplication values for each column
            for ($col = 1; $col <= $size; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        
        // End the table
        echo "</table>";
    } else {
        echo "Please enter a valid positive number.";
    }
} else {
    echo "Please enter a valid size for the multiplication table.";
}
?>