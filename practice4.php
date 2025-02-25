<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST['number']);
    
    if ($num > 0) {
        echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";

        echo "<tr><th>*</th>"; 
        for ($col = 1; $col <= $num; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= $num; $row++) {
            echo "<tr>";
            echo "<th>$row</th>"; // Print row index
            for ($col = 1; $col <= $num; $col++) {
                echo "<td>" . ($row * $col) . "</td>"; // Print multiplication result
            }
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "Please enter a number greater than 0.";
    }
}
?>