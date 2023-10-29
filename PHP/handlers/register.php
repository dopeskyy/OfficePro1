<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newFullName = $_POST["newFullName"];
    $newUserEmail = $_POST["newUserEmail"];
    $newPassword = $_POST["newPassword"];
    $newUserType = $_POST["newUserType"];

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=officepro", "root", "Fergent23%");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT INTO officepro.users (FullName, UserEmail, Password, UserType, Active) VALUES (:newFullName, :newUserEmail, :newPassword, :newUserType, 'yes')";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':newFullName', $newFullName);
        $stmt->bindParam(':newUserEmail', $newUserEmail);
        $stmt->bindParam(':newPassword', $newPassword);
        $stmt->bindParam(':newUserType', $newUserType);

        if ($stmt->execute()) {
            // Registration successful, you can also redirect to the login page
            header("Location: registrationsuccessfully.php");
            exit();
        } else {
            // Registration failed, display an error message
            echo "Registration failed";
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>
