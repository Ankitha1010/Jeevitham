<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Agent Signup</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input,
select,
textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 1px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    </style>

</head>
<body>
    <div class="container">
        <h2>Delivery Agent Signup</h2>
        <form action="connect.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="mobile">Mobile Number:</label>
            <input type="number" name="mobile" required><br>

            <label for="email">Email Address:</label>
            <input type="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <label for="address">Address with Pincode:</label>
            <textarea name="address" rows="3" required></textarea><br>

            <label for="city">City:</label>
            <input type="text" name="city" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" required><br>

            <label for="longitude">Longitude:</label>
            <input type="text" name="longitude" required><br>

            <label for="latitude">Latitude:</label>
            <input type="text" name="latitude" required><br>

            <label for="delivery_mode">Mode of Delivery:</label>
            <select name="delivery_mode" required>
                <option value="bike">Bike</option>
                <option value="car">Car</option>
            </select><br>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>



