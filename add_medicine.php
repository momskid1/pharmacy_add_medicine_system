<?php include 'db/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Add New Medicine</h2>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Medicine Name" required><br>
        <input type="text" name="batch_no" placeholder="Batch No"><br>
        <input type="date" name="expiry_date"><br>
        <input type="number" name="quantity" placeholder="Quantity"><br>
        <input type="text" name="price" placeholder="Price"><br>
        <button type="submit" name="submit">Add Medicine</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $batch = $_POST['batch_no'];
        $expiry = $_POST['expiry_date'];
        $qty = $_POST['quantity'];
        $price = $_POST['price'];

        $sql = "INSERT INTO medicines (name, batch_no, expiry_date, quantity, price)
                VALUES ('$name', '$batch', '$expiry', '$qty', '$price')";
        
        if ($conn->query($sql)) {
            echo "Medicine added successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
