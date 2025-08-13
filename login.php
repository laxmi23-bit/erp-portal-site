<?php include 'includes/header.php'; 
session_start();

include'db.php'; 
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = mysqli_prepare($conn, "SELECT * FROM students WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>
<!-- all other is  here -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP PORTAL</title>
 </head>
 <body>

    <div class=" container  ">

        <div class="login-wrapper d-flex justify-content-center align-items-center min-vh-100 ">
            <div class="login-card p-4 mx-5" style="width: 100%; max-width: 450px; height: 100%; max-height: 450px;">
                <form action="login.php" method="POST">
                    <div class="text-center mb-3">
                        <img src="photos/skit_logo.png" width="100px" alt="College Logo" class="mb-2">
                        <h5 class="mb-0 fw-bold">ABC Institute of Technology</h5>
                        <small class="text-muted">Student ID Card</small>
                    </div>
                </form>
            </div>

            <div class="login-card p-4 shadow rounded-4 bg-white" style="width: 100%; max-width: 450px;">
                <h3 class="text-center mb-4 d-flex bg-light text-dark">Login (Smart ERP System)</h3>
                 
    <form method="POST">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="text" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
    <p><a href="register.php">New user? Register here</a></p>
                
            </div>
        </div>
    </div>
        
 </body>
 </html>
    <?php include 'includes/footer.php'; ?>