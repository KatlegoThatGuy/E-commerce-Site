<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request to Sell Product</title>
</head>
<body>
    <h1>Request to Sell Product</h1>
    <form action="submit_request.php" method="post">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required><br>

        <label for="productDescription">Product Description:</label>
        <textarea id="productDescription" name="productDescription" required></textarea><br>

        <label for="productPrice">Price:</label>
        <input type="number" id="productPrice" name="productPrice" required><br>

        <label for="userEmail">Your Email:</label>
        <input type="email" id="userEmail" name="userEmail" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
