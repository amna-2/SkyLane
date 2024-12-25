<?php
// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$query = "SELECT * FROM book_form";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
        }
        .receipt {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .receipt h2 {
            margin: 0 0 10px;
            color: #333;
            font-size: 20px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 10px;
        }
        .receipt p {
            margin: 5px 0;
            color: #555;
            font-size: 16px;
        }
        .receipt p span {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center; color: #333;">Booking Receipts</h1>

        <?php
        // Loop through the results and display each record as a receipt
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="receipt">';
                echo '<h2>Receipt ID: ' . $row['ID'] . '</h2>';
                echo '<p><span>Name:</span> ' . $row['Name'] . '</p>';
                echo '<p><span>Email:</span> ' . $row['Email'] . '</p>';
                echo '<p><span>Phone:</span> ' . $row['Phone'] . '</p>';
                echo '<p><span>Address:</span> ' . $row['Address'] . '</p>';
                echo '<p><span>Destination:</span> ' . $row['Location'] . '</p>';
                echo '<p><span>Guests:</span> ' . $row['Guests'] . '</p>';
                echo '<p><span>Arrival Date:</span> ' . $row['Arrivals'] . '</p>';
                echo '<p><span>Leaving Date:</span> ' . $row['Leaving'] . '</p>';
                echo '<p><span>Total Price:</span> $' . $row['price'] . '</p>';
                echo '</div>';
            }
        } else {
            echo '<p style="text-align: center; color: #888;">No bookings found.</p>';
        }
        ?>

    </div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($connection);
?>
