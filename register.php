<?php include 'includes/header.php';
include 'db.php';
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($conn, "INSERT INTO students (name, roll_no, branch, year, semester, course, phone_no, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssssss", $name, $roll_no, $branch, $year, $semester, $course, $phone_no, $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Registration Successful! Please login.'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?> 
<!-- all other is  here -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    

    <div class=" container py-5 ">

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
                <h2>Register</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Roll No: <input type="text" name="roll_no" required><br><br>
        Branch: <input type="text" name="branch" required><br><br>
        Year: <input type="text" name="year" required><br><br>
        Semester: <input type="text" name="semester" required><br><br>
        Course: <input type="text" name="course" required><br><br>
        Phone No: <input type="text" name="phone_no" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="text" name="password" required><br><br>
        <button type="submit" name="register">Register</button>
    </form>
</div>


        </div>
    </div> 
     </body>
 </html>
    <?php include 'includes/footer.php'; ?>