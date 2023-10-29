<!DOCTYPE html>
<html>

<head>
    <title>Registration Success</title>
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

        .success-message {
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
    <div class="success-message">
        <h1>Registration Successful</h1>
        <p>Your registration has been successfully completed. Please <a href="loginhandler.php">click here to login</a>.</p>
    </div>
</div>
</body>

<?php include '../NavbarFooter/footer.php'; ?>

</html>
