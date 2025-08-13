<?php include 'includes/header.php';
session_start();
include 'db.php';
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

$stmt = mysqli_prepare($conn, "SELECT * FROM students WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$student = mysqli_fetch_assoc($result); ?>
<!-- all other is  here -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    

    <div class=" container py-5">
        <h1 class="fw-bold my-4 mb-1 p-3 text-center">Welcome To ERP Portal</h1>
        <!-- felxing items '' -->
        <div class="outer0 d-flex bg-light text-dark ">

            <!-- sidebar  -->
            <div class="outer1 d-flex slidebar flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 300px;">
                <a href="dashboard.php" class="d-flex  text-decoration-none">

                    <span class="fs-3 font-dmsans text-primary-emphasis fw-bold text-uppercase"><i
                            class="fa-regular fa-font-awesome"></i> SMART ERP</span>
                </a>
                <hr />
                <ul class=" nav nav-pills flex-column mb-auto fs-5 side-link">
                    <li class="hover nav-item side-link">
                        <a href="dashboard.php" class="nav-link link-body-emphasis">
                            <i class="fa-solid fa-id-card"></i> Dashboard
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="subjects.php" class="nav-link link-body-emphasis ">
                            <i class="fa-solid fa-chart-line"></i> Subjects
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="resume.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-file-pdf"></i> Auto resume generator
                        </a>
                    </li>
                  
                    <li class="hover nav-item side-link">
                        <a href="levelupquiz.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-pen-to-square"></i> Level Up Quiz
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="smartscoreboard.php" class="nav-link link-body-emphasis">
                            <i class="fa-solid fa-square-poll-vertical"></i> Smart Scoreboard
                        </a>
                    </li>

                     <li class="hover nav-item side-link">
                        <a href="leave.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-file-lines"></i> Leave Application
                        </a>
                    </li>
                </ul>
                <hr />
                <div class="dropdown">
                    <a href="#" class="d-flex  link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <strong><i class="fs-5 fa-regular fa-circle-user"></i> student/user</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>

            <!-- center content -->
            <div class=" flex-grow-1 ">
                <!-- alerts -->
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa-solid fa-circle-exclamation"></i> <a href="https://kistechnosoftware.in/"
                            target="_blank">KistechnoSoftware</a> Is Hiring! apply till 30th Feb.
                    </div>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>MID-TERM NOTICE!</strong> All students are hereby informed that the Mid-Term Examinations
                    will commence from [15/11/2025]..
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!-- closing of alerts -->

                <div class="container d-flex justify-content-center align-items-center ">
                    <!-- card -->
                    <div class="container d-flex justify-content-center align-items-center  ">
                        <div class="student-card shadow-lg rounded-4 p-4 bg-white"
                            style="max-width: 550px; width: 100%;">

                            <!-- University / College Logo -->
                            <div class="icard text-center mt-0 mb-3">
                                <img src="photos/skit_logo.png" alt="College Logo " class="mb-0" width="70" height="70">
                                <h5 class="mb-0 fw-bold">Internet Of Things</h5>
                                <hr>
                            </div>

                            <!-- Student Photo -->
                            <div class="text-center mb-3">
                                <img src="photos/g.png.png" alt="Student Photo" class="rounded-circle border border-2"
                                    width="100" height="100">
                            </div>

                            <!-- Student Details -->
                           
                            
                                   <h2> <?php echo $student['name']; ?>
                                </h2>
     <table class="table table-sm table-borderless mx-4" width="300" height="50">
        <tr><td>Roll No:</td><td><?php echo $student['roll_no']; ?></td></tr>
        <tr><td>Branch:</td><td><?php echo $student['branch']; ?></td></tr>
        <tr><td>Year:</td><td><?php echo $student['year']; ?></td></tr>
        <tr><td>Semester:</td><td><?php echo $student['semester']; ?></td></tr>
        <tr><td>Course:</td><td><?php echo $student['course']; ?></td></tr>
        <tr><td>Phone No:</td><td><?php echo $student['phone_no']; ?></td></tr>
        <tr><td>Email:</td><td><?php echo $student['email']; ?></td></tr>
    </table>
    <br>
    <a href="logout.php">Logout</a>
                        </div>
                    </div>

                </div>

            </div>
 </body>
 </html>
            <!-- Announcement sidebar -->

            <!-- <div class=" outer2 d-flex slidebar flex-column align-items-stretch flex-shrink-0 bg-body-tertiary "
                style="width: 380px;">
                <a href="/"
                    class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg> <span class="fs-5 font-dmsans text-primary-emphasis fw-bold text-uppercase"><i
                            class="fa-regular fa-star"></i> Announcement</span>
                </a>
                <div class="list-group list-group-flush border-bottom scrollarea"> <a href="#"
                        class="list-group-item list-group-item-action active py-3 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong
                                class="mb-1">📢Kistechno Internship Opportunities (2024 Batch)</strong> <small
                                class="text-body-secondary">Mon</small> </div>
                        <div class="col-10 mb-1 small">Eligible students must apply via the Training & Placement portal
                            before 10th August 2025.
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong class="mb-1">📢 1.
                                Semester Exam Schedule Released</strong> <small>Tue</small> </div>
                        <div class="col-10 mb-1 small"> The final exam schedule for the 3rd and 5th semesters has been
                            published.

                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong class="mb-1">📢
                                Hackathon Alert: CodeSprint 2.0</strong> <small class="text-body-secondary">Wed</small>
                        </div>
                        <div class="col-10 mb-1 small">Join our 24-hour hackathon to build innovative solutions! Teams
                            of 3–5 students can register by August 5th. Prizes worth ₹50,000 to be won. Visit the Events
                            section for details.
                        </div>
                    </a> <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong
                                class="mb-1">📢Wi-Fi Downtime Notice</strong> <small
                                class="text-body-secondary">Thu</small> </div>
                        <div class="col-10 mb-1 small">Due to scheduled maintenance, campus Wi-Fi will be unavailable on
                            August 2nd from 10:00 AM to 1:00 PM. Kindly plan your work accordingly.
                        </div>
                    </a> <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong
                                class="mb-1">📢Mid-Term Assignment Submission</strong> <small
                                class="text-body-secondary">Fri</small> </div>
                        <div class="col-10 mb-1 small">Mid-term assignments for all departments must be submitted by
                            August 10th. Late submissions will not be entertained. Upload your files via the Assignment
                            section in your dashboard.
                        </div>
                    </a>
                    </a> <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between"> <strong
                                class="mb-1">📢Library Book Return Reminder</strong> <small
                                class="text-body-secondary">Fri</small> </div>
                        <div class="col-10 mb-1 small">Students who borrowed books before July 15th are reminded to
                            return them by August 1st to avoid late fees. Visit the Library tab for due books and fines.
                        </div>
                    </a>
                    </a>
                </div>
            </div> -->

        </div>
        <!-- CARD-1 -->
        <div class="container my-5">
            <h3 class="text-center mb-4">🌟Placement Season 2K25 | SKIT Jaipur💻🌟</h3>
            <div class="slider-container">
                <div class="slider-track">
                    <!-- Set 1 -->
                    <div class="card-set">
                        <div class="card1">
                            <img src="photos/s1.png" class="card-img-top" alt="1">

                        </div>
                        <div class="card1">
                            <img src="photos/sklogo.png" class="card-img-center" width="250" height="250" alt="2">

                        </div>
                        <div class="card1">
                            <img src="photos/s1big.png" class="card-img-top" width="260" height="250" alt="3">

                        </div>
                        <div class="card1">
                            <img src="photos/s2.png" class="card-img-top" width="260" height="250" alt="4">

                        </div>
                    </div>
                    <div class="card-set">
                        <div class="card1">
                            <img src="photos/sklogo.png" class="card-img-center" width="250" height="250" alt="2">

                        </div>
                        <div class="card1">
                            <img src="photos/s1.png" class="card-img-top text-center" alt="1">

                        </div>
                        <div class="card1">
                            <img src="photos/s3.png" class="card-img-top" width="250" height="250" alt="3">

                        </div>
                        <div class="card1">
                            <img src="photos/sklogo.png" class="card-img-center" width="250" height="250" alt="2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CARD-2-->
        <div class="container my-5">
            <h3 class="text-center mb-4">🎯Not Just Teachers, They’re Future Makers — SKIT Jaipur Faculty🚀</h3>
            <div class="slider-container">
                <div class="slider-track">
                    <!-- Set 1 -->
                    <div class="card-set">
                        <div class="card2">
                            <img src="photos/f3.jpg" class="card-img-top" width="450" height="275" alt="2">

                        </div>
                        <div class="card2">
                            <img src="photos/clg2_resized.jpeg" class="card-img-top" alt="3">
                            <div class="card-body">
                                <h5 class="card-title">Card 3</h5>
                            </div>
                        </div>
                        <div class="card2">
                            <img src="photos/imp_resized.jpg" class="card-img-top" alt="1">

                        </div>
                        <div class="card2">
                            <img src="photos/f2.jpg" class="card-img-top" width="450" height="275" alt="4">
                            <div class="card-body">
                                <h5 class="card-title">Card 4</h5>
                            </div>
                        </div>
                        <div class="card2">
                            <img src="photos/clg.png" class="card-img-top" width="450" height="275" alt="3">

                        </div>
                    </div>
                    <div class="card-set">
                        <div class="card2">
                            <img src="photos/f1.jpg" class="card-img-top" width="450" height="275" alt="1">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- footer -->
    <?php include 'includes/footer.php'; ?>