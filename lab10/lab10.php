<?php
// Student ID: 2237392
// Name: Azzam Saeed Alghamdi
// CPIT 405 - Lab 10
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 10 - PHP and MariaDB</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        h1 { color: #2c3e50; }
        h2 { color: #2980b9; margin-top: 30px; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        .box { background: #f4f6f8; padding: 15px; border-left: 4px solid #3498db; margin: 10px 0; }
        table { border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ccc; padding: 8px 14px; text-align: left; }
        th { background: #3498db; color: white; }
        .back { display: inline-block; margin-bottom: 15px; text-decoration: none; color: #3498db; }
    </style>
</head>
<body>

<a class="back" href="../index.html">&larr; Back to Home</a>

<h1>Lab 10: PHP and MariaDB</h1>
<p><strong>Name:</strong> Azzam Saeed Alghamdi (2237392)</p>
<p><strong>Section:</strong> CPIT 405 IT1</p>

<!-- ============== Q1: Power Function ============== -->
<h2>Q1: Power Function</h2>
<div class="box">
    <?php
        // Include the power function from a separate file (code reuse / library concept)
        require_once 'power.php';

        $base = 2;
        $exp  = 10;

        echo "Using <strong>iterative</strong> function: $base ^ $exp = " . power_iterative($base, $exp) . "<br>";
        echo "Using <strong>recursive</strong> function: $base ^ $exp = " . power_recursive($base, $exp) . "<br>";

        echo "<br>Examples:<br>";
        echo "5 ^ 3 = " . power_iterative(5, 3) . "<br>";
        echo "7 ^ 0 = " . power_iterative(7, 0) . "<br>";
        echo "3 ^ 4 = " . power_recursive(3, 4) . "<br>";
    ?>
</div>

<!-- ============== Q2: MVC Demo ============== -->
<h2>Q2: MVC Pattern Demo</h2>
<div class="box">
    <p>
        <strong>MVC</strong> (Model–View–Controller) separates the application into three parts:
    </p>
    <ul>
        <li><strong>Model:</strong> handles the data (database connection, read/write).</li>
        <li><strong>View:</strong> the HTML page shown to the user.</li>
        <li><strong>Controller:</strong> receives the request, calls the Model, then sends data to the View.</li>
    </ul>
    <p>Flow: <em>Browser &rarr; Controller &rarr; Model &rarr; Database &rarr; Model &rarr; Controller &rarr; View &rarr; Browser</em></p>
    <p><a href="mvc-demo.php">Open MVC Demo &rarr;</a></p>
</div>

<!-- ============== Q3: Database Connection ============== -->
<h2>Q3: Database Connection - SHOW DATABASES</h2>
<div class="box">
    <?php
        require_once 'db-connection.php';
    ?>
</div>

</body>
</html>