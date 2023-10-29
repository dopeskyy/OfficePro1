<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"];

try {
$pdo = new PDO("mysql:host=127.0.0.1;dbname=officepro", "root", "Fergent23%");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT ID FROM officepro.users WHERE UserEmail = :username AND Password = :password";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

if ($stmt->rowCount() == 1) {
// Fetch the user's ID
$row = $stmt->fetch();
$user_id = $row['ID'];

// Set the user_id and username session variables
$_SESSION["user_id"] = $user_id;
$_SESSION["username"] = $username;

// Redirect to profile.php
header("Location: profile.php");
exit();
} else {
// Invalid login, display an error message
echo "Invalid login credentials";
}
} catch (PDOException $e) {
echo "Database error: " . $e->getMessage();
}
}
