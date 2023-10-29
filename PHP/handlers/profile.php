<?php
session_start();

// Check if the user is signed in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not signed in
    header("Location: login.php");
    exit();
}

// Fetch user-specific information from the database based on the user_id
$user_id = $_SESSION['user_id'];

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=officepro", "root", "Fergent23%");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM officepro.users WHERE ID = :user_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="../../CSS/mainstyles.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-info {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 18px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>

<body>
<?php include '../NavbarFooter/nav.php'; ?>
<div class="container">
    <div class="profile-info">
        <h1>My Profile</h1>
        <p><strong>Full Name:</strong> <?php echo $user['FullName']; ?></p>
        <p><strong>User Email:</strong> <?php echo $user['UserEmail']; ?></p>
        <p><strong>User Type:</strong> <?php echo $user['UserType']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</div>
</body>

<?php include '../NavbarFooter/footer.php'; ?>

</html>
