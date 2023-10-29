<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../../CSS/mainstyles.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #f7f7f7;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            width: 600px;
        }

        .form {
            padding: 30px;
            flex: 1;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #777;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: #777;
            color: #fff;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #666;
        }

        .form:nth-child(2) {
            background: #007bff;
            color: #fff;
        }

        .form:nth-child(2) label {
            color: #fff;
        }
    </style>
</head>

<body>
<?php include '../NavbarFooter/nav.php'; ?>
<div class="container">
    <div class="form-container">
        <div class="form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <!-- Login form fields -->
                <label for="username">User Email:</label>
                <input type="text" id="username" name="username">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="form">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <!-- Registration form fields -->
                <label for="newFullName">Full Name:</label>
                <input type="text" id="newFullName" name="newFullName">
                <label for="newUserEmail">User Email:</label>
                <input type="text" id="newUserEmail" name="newUserEmail">
                <label for="newPassword">Password:</label>
                <input type="password" id="newPassword" name="newPassword">
                <label for="newUserType">User Type:</label>
                <input type="text" id="newUserType" name="newUserType">
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</div>
</body>

<?php include '../NavbarFooter/footer.php'; ?>

</html>
