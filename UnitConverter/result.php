<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Result</title>
    <link rel="stylesheet" href="dark.css">
</head>
<body>
    <div class="calculator-card">
        <h1>Conversion Result</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $type = $_POST['type'];
            $val = $_POST['val'];
            $result = 0;
            $label = "";

            // The switch statement is perfect for multiple conversion types
            switch ($type) {
                case "temp":
                    // Formula to convert Celsius to Fahrenheit
                    $result = ($val * 9/5) + 32;
                    $label = "°F (Fahrenheit)";
                    break;
                case "data":
                    // Formula to convert MB to GB
                    $result = $val / 1024;
                    $label = "GB (Gigabytes)";
                    break;
                case "weight":
                    // Formula to convert KG to Grams
                    $result = $val * 1000;
                    $label = "Grams";
                    break;
                default:
                    echo "<p>Invalid conversion type selected.</p>";
                    exit;
            }

            // Displaying the input and the result using your polished CSS classes
            echo "<div class='result-text'>Input Value: " . htmlspecialchars($val) . "</div>";
            echo "<div class='result-text'>Converted To:</div>";
            echo "<div class='amount-display'>" . number_format($result, 2) . " " . $label . "</div>";
        }
        ?>

        <div class="button-group">
            <a href="index.html" class="btn btn-back" style="width: 100%; text-decoration: none; display: inline-block;">Convert Another</a>
        </div>
    </div>
</body>
</html>