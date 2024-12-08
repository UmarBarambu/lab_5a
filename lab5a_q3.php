<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
    <style>
        /* Styling for single-line table border */
        table {
            
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black; /* Defines the border */
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <?php
    // Function to generate a multiplication table
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = $i * $multiplier;
        }
        return $results;
    }

    // Call the function with multiplier 2
    $multiplier = 2;
    $results = multiplication($multiplier);
    ?>

    <!-- Display the multiplication table in an HTML table -->
    <h2 style="text-align: center;">Multiplication Table</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$multiplier</td>";
            echo "<td>{$results[$i - 1]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
